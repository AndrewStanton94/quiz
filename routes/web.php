<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/quizzes', 'QuizController@show');
Route::post('/quizzes', 'QuizController@create');

Route::get('/test', function () {
	echo "Yo";
	$users = DB::connection('mysql')->select('SELECT * FROM  `Answer`');
	echo implode(', ', $users);
	echo count($users);
	echo "lo";
});
