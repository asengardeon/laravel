<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('emconstrucao');
});

Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('construcao', ['middleware' => 'auth', function () {
    return view('emconstrucao');
}]);

//Route::get('tarefa', ['middleware' => 'auth', 'TarefaController']);

Route::resource('tarefa', 'TarefaController');

Route::get('/novolayout', ['middleware' => 'auth', function () {
    return view('novolayout/fullpage');
}]);


Route::get('info', function(){
  return view('phpinfo');
});

Route::get('especial', function(){
  return view('paraGielez');
});

Route::get('menutest', function(){
  return view('menutest');
});

Route::resource('person', 'PersonController');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
