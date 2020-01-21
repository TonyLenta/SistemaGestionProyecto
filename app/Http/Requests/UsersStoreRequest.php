<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  => 'required|unique:users',
            'first_name' =>  '',
            'last_name' =>  '',
            'address'   =>  '',
            'dni'   =>  '',

            'password'  =>  'required|min:8',
            
            'email'     =>  'required|unique:users',
            'faculty_id' => '',
            'profession_id' =>  '',
            'country_id'    => '',
            'state_id'  =>  '',
            'city_id'   =>  '',

            'roles'     =>  'required'
        ];
    }
}
