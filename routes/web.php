<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
Route::get('/', [IndexController::class, 'index']);
Route::get('/about-us', [IndexController::class, 'aboutUs']);
Route::get('/designers', [IndexController::class, 'allDesigners']);
Route::get('/designer-detail/{id}', [IndexController::class, 'designerDetail']);
Route::get('/projects', [IndexController::class, 'projects']);
Route::get('/project-detail/{id}', [IndexController::class, 'projectDetail']);
Route::get('/news', [IndexController::class, 'news']);
Route::get('/news-detail/{id}', [IndexController::class, 'newsDetail']);

Route::get('/about', function () {
    return view('about-us');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
