<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

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

$myAppBaseDir = '';

if( env('APP_BASE_DIR') !== null  ) {
    $myAppBaseDir = env('APP_BASE_DIR');
}

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('login');
});
// Route::get('users', 'Users@list');
Route::get('/create', [Users::class, 'create']);
Route::post('/loginsubmit', [Users::class, 'loginsubmit'])->name('loginsubmit');
Route::post('/createsubmit', [Users::class, 'createsubmit'])->name('createsubmit');


Route::group(['middleware' => ['logCheck']], function() {
	Route::get('products', [Users::class, 'list']);
});

Route::group(['prefix' => $myAppBaseDir], function () { });
