<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class AdminController extends Controller
{

    public function __construct()
    {
        /* $this->middleware('role:admin'); */
    }

    public function index()
    {
        return view('admin.dashboard',[
            'users' =>  User::all(),
            'roles' =>  Role::all(),
            'permissions'   =>  Permission::all(),
        ]);
    }
}
