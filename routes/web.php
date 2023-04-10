<?php

use App\Http\Controllers\Web\WebController;
use Faker\Provider\Lorem;
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

Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/about', [WebController::class, 'about'])->name('about');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');
Route::get('/services', [WebController::class, 'services'])->name('services');
Route::get('/blog', [WebController::class, 'blog'])->name('blog');
Route::get('/articles/{slug}', [WebController::class, 'blogDetails'])->name('blog-details');
Route::post('/contact', [WebController::class, 'contactForm'])->name('contact-post');


Route::get('admin/{all?}', function() {
    return view('admin');
})->where('all', '[\/\w\.-]*');