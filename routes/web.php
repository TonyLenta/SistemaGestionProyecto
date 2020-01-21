<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



Route::group([
    'prefix'    =>  'dashboard',
    'namespace' =>  'Admin',
    'middleware'    =>  ['auth','role:Administrator|Writer']],

function(){

    Route::get('/', 'AdminController@index')->name('dashboard');

    /* Ruta para el inicio de los Roles & Permisos */
    Route::get('management', 'IndexPermissionsController',[
        'as'    =>  'dashboard'
    ])->name('dashboard.management.index');

        /* Ruta para los Roles */
        Route::resource('roles','RolesController',[
            'except'    =>  'index',
            'as'    =>  'dashboard'
        ]);

        /* Ruta para los permisos */
        Route::resource('permissions','PermissionsController',[
            'except'    =>  'index',
            'as'    =>  'dashboard'
        ]);

    /* Ruta para los Usuarios */
    Route::resource('users', 'UsersController',
        ['as'    =>  'dashboard']
        );

    /* LISTADO DE ESTADOS Y CIUDADES PARA LOS USUARIOS*/
    Route::get('users/create/getStates/{id}', 'UsersController@getStates');
    Route::get('users/create/getCities/{id}', 'UsersController@getCities');

    /* Rutas para las Facultades o Escuelas */
    Route::resource('faculties', 'FacultiesController',[
        'as'    =>  'dashboard'
    ]);

    /* Ruta para las profesiones o Titulos */
    Route::resource('professions', 'ProfessionsController',[
        'as'    =>  'dashboard'
    ]);

    /* Ruta para las Universidades */
    Route::resource('universities','UniversitiesController',[
        'as'    =>  'dashboard'
    ]);

        

});


Route::group([
    'middleware'    =>  'auth'],

function(){

    Route::resource('users','UsersController',[
        'only'  =>  [
            'show',
            'edit',
            'update'
            ]
    ]
);

Route::get('/users/id/{id}/uploads/avatar/{image}', [
    'uses'  =>  'UsersController@userProfileAvatar'
]);

Route::get('edit/getStates/{id}', 'UsersController@getStates');
Route::get('edit/getCities/{id}', 'UsersController@getCities');


});