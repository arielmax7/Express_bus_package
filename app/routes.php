<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//llamamos al controlador RESTFUL  Esto enrutara a todos los metodos a la vez

Route::get('/', function()
{	
    return View::make('login');	

});

//login
Route::post('login', 'UserLogin@user');
//logout
Route::get('logout', function()
{
    Auth::logout();
    return Redirect::to('/');
});
// ruta de administracion
Route::get('admin', array('before' => 'auth', function()
{
    return View::make('dashboard.index');	
}));


//rutas del sistema
Route::controller('package', 'PackageController');
Route::controller('users', 'UsersController');






Route::get('registrar', function()
{

	$user = new User;
	$user->name = "Maria";
	$user->last_name = "Gonzales";
	$user->email = "maria@gmail.com";
	$user->address = "calle 20 de mayo #100";
        $user->phone = 5452100;
        $user->username = "maria";
	$user->level = 0;
        $user->password = Hash::make('123');
	// guardamos
	$user->save();
	return "El usuario fue agregado.";
});