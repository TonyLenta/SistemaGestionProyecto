<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Role::truncate();

        $adminRole = Role::create(['name' => 'Administrator']);
        $writerRole = Role::create(['name' => 'Writer']);
        $userRole = Role::create(['name' => 'User']);

        Permission::create(['name' => 'Can view posts']);
        Permission::create(['name' => 'Can edit posts']);
        Permission::create(['name' => 'Can view users']);



        $admin = New User;
        $admin->name = 'Andrezw';
        $admin->email = 'azw1021@gmail.com';
        $admin->password = 'evangelions';
        $admin->save();
        $admin->assignRole($adminRole);


        $writer = New User;
        $writer->name = 'Writer';
        $writer->email = 'writer@gmail.com';
        $writer->password = 'evangelions';
        $writer->save();
        $writer->assignRole($writerRole);

        $user = New User;
        $user->name = 'Usuario';
        $user->email = 'user@gmail.com';
        $user->password = 'evangelions';
        $user->save();
        $user->assignRole($userRole);
    }
}
