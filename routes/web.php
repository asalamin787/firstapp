<?php

use App\Http\Controllers\PageController;
use App\Models\Post;
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

// route::get('/', [PageController::class,'index']);




Route::middleware('auth')->group(function () {
    Route::get('/home', [PageController::class, 'home'])->name('home');


    route::get('/category', [PageController::class, 'category']);
    route::post('/category-store', [PageController::class, 'store']);

    route::get('/category_view', [PageController::class, 'category_view'])->name('category');

    route::get('/category_edit/{id}', [PageController::class, 'category_edit'])->name('category.edit');
    route::post('update/{id}', [PageController::class, 'update'])->name('updates');



    route::get('/post_create', [PageController::class, 'post_create']);
    route::post('/post-store', [PageController::class, 'stores']);

    route::get('/post_view', [PageController::class, 'post_view']);

    route::get('post_edit/{id}', [PageController::class, 'post_edit'])->name('edit');
    route::post('update_post/{id}', [PageController::class, 'update_post'])->name('update');
});



route::get('/blog', [PageController::class, 'blog'])->name('blog');
route::get('usercategory/{post}', [PageController::class, 'usercategory'])->name('usercategory');
route::post('/comment_store/{post}', [PageController::class, 'comment_store'])->name('comment_store');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
