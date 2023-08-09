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
/*
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/greetings', function () {
   return view('welcome');
    return "<h1>Hello Guys</h1>";
});
 */


/*
*Route::get('/about', function () {
*return view('pages.about');
});

*/


// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return "This is the user name: " . $name . " and this is the  user id: ".  $id . ". " ;
// });

// Route::get('/', "gpostscontroller@index");
// Route::get('/index', 'PagesController@index');
// Route::get('/about', 'PagesController@about');
// Route::get('/services', 'PagesController@services');
// Route::get('/title', 'PagesController@change_title');
// Route::get('/array', 'PagesController@display_array');
// Route::get('/welcoming', 'PagesController@sass_works');
// Route::get('/location', 'PagesController@location');
// Route::get('/class', 'MyPagesController@class_works');
Route::resource('myposts', 'gpostscontroller');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
//->name('dashboard);
