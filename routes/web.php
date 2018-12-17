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


/*
	PagesController created with this:  

	"php artisan make:controller PagesController"

	stored in app/Http/Controllers
*/
Route::get('/', 'PagesController@home');
Route::get('/contacts', 'PagesController@contacts');
Route::get('/about', 'PagesController@about');

Route::resource('assignments', 'AssignmentsController');
Route::resource('students','StudentsController');
// Route::get('/students', 'StudentsController@index');
// Route::post('/students', 'StudentsController@store');
// Route::get('/students/create', 'StudentsController@create');
// Route::get('/students/{student}', 'StudentsController@show');
// Route::patch('/students/{student}', 'StudentsController@update');
// Route::delete('/students/{student}', 'StudentsController@destroy');
// Route::get('/students/{student}/edit', 'StudentsController@edit');


// /*Route::get('/about', function() {
// 	return view('about');
// });
// */

// ?>
