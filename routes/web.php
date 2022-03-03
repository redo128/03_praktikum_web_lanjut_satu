<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProgramController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home',function(){
//     return view('layouts.app');
// });
Route::get('/',[HelloController::Class,'index']);
Route::get('/blog.content',[HelloController::Class,'content']);
Route::prefix("product")->group(function () {
    Route::get("/marbel-edu-games",[ProductController::class, 'product1'] );
    Route::get("/marbel-and-friends-kids-games",[ProductController::class, 'product2'] );
    Route::get("/riri-story-books",[ProductController::class, 'product3'] );
    Route::get("/kolak-kids-songs",[ProductController::class, 'product4'] );
});
Route::get('/benda',function(){
return view('product');
});
Route::get('/news/{id}',[BeritaController::Class,'index']);
Route::get('/berita',function(){
    return view('news');
});
// Route::get('/berita',function(){
//         return view('news',['id'=>'educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19']);
//         });
Route::get('/about',function(){
    return view ('about-us',[
        "name"=>"Aditya Raihan Setyoputra",
        "email"=>"aditya.alamat007@gmail.com",
    ]);
});
Route::get('/content',function(){
return view('blog.content');
});
Route::get('/contact-us',function(){
    return redirect('https://www.educastudio.com/contact-us');
    });

Route::prefix("program")->group(function () {
    Route::get("/karir",[ProgramController::class, 'pro1'] );
    Route::get("/magang",[ProgramController::class, 'pro2'] );
    Route::get("/kunjungan-industri",[ProgramController::class, 'pro3'] );
        });
Route::get('/menuprogram',function(){
    return view('program');
});
