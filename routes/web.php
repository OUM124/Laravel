<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\About;
use App\Http\Controllers\PostController;

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
    return view('about');
});

Route::get('/ex', function () {
    return view('experience');
});

Route::get('/sk', function () {
    return view('skills');
});




# The parameter id here is required.
Route::get('/post/{id}', [PostController::class, 'index']); 


# Another Test .
Route::get('/Welcome', [About::class, 'WelcomeToLarvelTest']); 



# The parameter id here is not required.
Route::get('/GETname/{name?}', function(String $name="OUMAIMA")
{
    return $name;
}); 



# Using controllers 
Route::get('/oum', [About::class, 'index']); 




# View without the Get , passing data as array and using it in the corresponding view
Route::View('/about-me','oumaAbou',[
    'page_title'=>'About Me',
    'page_description'=>'This is the description part ',
    'page_h1'=>'Hi , Welcome to About ME page'

]);