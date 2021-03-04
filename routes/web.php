<?php


use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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



    Route::prefix('baliasri')->group(function () {
        route::get('/home', [UserController::class, 'index']);
        route::get('/product', [UserController::class, 'product']);
        route::get('/service', [UserController::class, 'service']);
        route::get('/about', [UserController::class, 'about']);
        route::get('/contact', [UserController::class, 'contact']);
        route::post('/post-contact', [UserController::class, 'postContact'])->name('post-contact');
    });

    route::middleware('guest')->group(function () {
        route::get('login', [AuthController::class, 'index'])->name('login');
        route::post('authenticate', [AuthController::class, 'login'])->name('authenticate');


    });


    Route::prefix('admin')->middleware('auth')->group(function () {
        route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        route::get('/index', [AdminController::class, 'index'])->name('dashboard');

        route::get('/mail', [AdminController::class, 'contact']);
        route::get('/mail-delete/{mail:id}', [AdminController::class, 'destroyMail'])->name('mail.delete');

        route::get('/blog', [AdminController::class, 'blog']);
        route::get('/blog-create', [AdminController::class, 'createBlog']);
        route::get('/blog-edit/{blog:id}', [AdminController::class, 'editBlog'])->name('blog.edit');
        route::get('/blog-delete/{blog:id}', [AdminController::class, 'destroyBlog'])->name('blog.delete');

        route::get('/user', [AdminController::class, 'user']);
        route::get('/user-create', [AdminController::class, 'createUser']);
        route::post('/user-post', [AdminController::class, 'postUser'])->name('user.post');
        route::post('/user-update', [AdminController::class, 'updateUser'])->name('user.update');
        route::get('/user-edit/{user:id}', [AdminController::class, 'editUser'])->name('user.edit');
        route::get('/user-delete/{user:id}', [AdminController::class, 'destroyUser'])->name('user.delete');


    });
