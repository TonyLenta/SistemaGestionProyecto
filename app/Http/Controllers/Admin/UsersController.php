<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\Models\Country;
use App\Models\Faculty;
use App\Models\Profession;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersStoreRequest;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\UsersUpdateRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index',[
            'users' =>  User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.users.create',[
            'user'          =>  New User,
            'roles'         =>  Role::all(),
            'faculties'     =>  Faculty::all(),
            'permissions'   =>  Permission::all(),
            'professions'   =>  Profession::all(),
            'countries'     =>  Country::pluck('name','id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersStoreRequest $request)
    {

        $user = User::create($request->validated());

        $user->assignRole($request->roles);

        if($request->has('permissions'))
        {
            $user->givePermissionTo($request->permissions);

        }
        
        return redirect()->route('dashboard.users.index')->with('status','Fue Creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('view', $user);


        return view('admin.users.show',[
            'user'  =>  $user,
            'roles' =>  Role::all(),
            'faculties'     =>  Faculty::all(),
            'permissions'   =>  Permission::all(),
            'professions'   =>  Profession::all(),
            'countries'     =>  Country::pluck('name','id'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        return view('admin.users.edit',[
            'user'  =>  $user,
            'roles' =>  Role::all(),
            'faculties'     =>  Faculty::all(),
            'permissions'   =>  Permission::all(),
            'professions'   =>  Profession::all(),
            'countries'     =>  Country::pluck('name','id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersUpdateRequest $request, User $user)
    {

        $user->roles()->detach();

        $user->update($request->validated());

        if($request->filled('roles'))
        {
            $user->assignRole($request->roles);
        }
        if($request->has('permissions'))
        {
            $user->givePermissionTo($request->permissions);

        }

        return redirect()->route('dashboard.users.index')->with('status','Fue Creado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        
        $user->roles()->detach();
        $user->permissions()->detach();
        $user->delete();
        return redirect()->route('dashboard.users.index')->with('danger','Fue eliminado con exito');
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
