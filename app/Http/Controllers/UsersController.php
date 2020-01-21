<?php

namespace App\Http\Controllers;

use File;
use Image;
use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\Models\Country;
use App\Models\Faculty;
use App\Models\Profession;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Storage;


class UsersController extends Controller
{

    public function show(User $user)
    {
        $this->authorize('view', $user);

        return view('public.users.show',[
            'user'  =>  $user
        ]);
    }

    public function edit(User $user)
    {
        return view('public.users.edit',[
            'user'  =>  $user,
            'faculties' =>  Faculty::all(),
            'professions'   =>  Profession::all(),
            'countries'     =>  Country::pluck('name','id')
        ]);
    }

    public function update(UserRequest $request, User $user)
    {

        if($request->hasFile('avatar') )
        {
            $filename = $user->avatar;
            Storage::delete($filename);

            $user->fill($request->validated());


            $user->avatar = $request->file('avatar');

            $filename = $user->avatar->getClientOriginalName();

            $save_path = storage_path('app/public').'/users/id/'.$user->id.'/uploads/avatar/';
       

             $public_path = '/users/id/'.$user->id.'/uploads/avatar/'.$filename;

             File::makeDirectory($save_path,$mode = 0755, true, true);
            
             Image::make($user->avatar)->save($save_path.$filename);

             $user->avatar = $public_path;

            
             $user->save();
            
            

        } else {

            $user->update(array_filter($request->validated() ) );

        }

        return redirect()->route('dashboard')->with('status','Fue Creado con exito');
    }


    public function userProfileAvatar($id,$image)
    {
        return Image::make(storage_path('app/public').'/users/id/'.$id.'/uploads/avatar/'.$image)->response();
    }

    public function getStates($id)
    {
        $states = State::where('country_id', $id)->pluck('name','id');
        
        return json_encode($states);
    }

    public function getCities($id)
    {
        $cities = City::where('state_id',$id)->pluck('name','id');
        return json_encode($cities);
        
    }
}
