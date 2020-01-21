<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UsersUpdateRequest extends FormRequest
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
        $rules = [
            'name'          =>  [
                'required',
                Rule::unique('users')->ignore($this->route('user'))
            ],
            'first_name'    =>  '',
            'last_name'     =>  '',
            'address'   =>  '',
            'dni'   =>  '',
            'email'         =>  [
                'required',
                Rule::unique('users')->ignore($this->route('user'))
            ],
            'roles'         =>  'required',
            'permissions'   =>  '',
            'faculty_id' => '',
            'profession_id' =>  '',
            'country_id'    => '',
            'state_id'  =>  '',
            'city_id'   =>  '',  
        ];

        if($this->filled('password'))
        {
            $rules['password']  =  ['confirmed','min:8'];
        }
        return $rules;
    }
}
