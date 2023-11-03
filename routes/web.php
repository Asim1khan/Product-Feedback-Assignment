<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FrontendControler;
use App\Http\Controllers\ProfileController;
use Database\Seeders\AdminSeeder;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',[FrontendControler::class,'index'])->name('home');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('feedback/{id}',[FeedbackController::class,'feedback'])->name('feedback');
 Route::get('/create',[FeedbackController::class,'create'])->name('feedback.create');
 Route::post('/add/coment',[FrontendControler::class,'CommentStore'])->name('comment.store');

Route::middleware('auth')->group(function () {
    Route::post('/category/store',[FeedbackController::class,'store'])->name('category.store');
});
//Admin Routes
Route::get('/admin', [AdminController::class, 'loginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login.store');
Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function (){

Route::get('dashboard',[AdminController::class, 'index'])->name('admin.dashboard');
Route::get('user/',[AdminController::class,'user'])->name('user');
Route::get('user/delete/{id}',[AdminController::class,'userDelete'])->name('user.delete');

Route::get('/Feedback/Comments',[AdminController::class,'Comments'])->name('manage.comments');

Route::get('/Comment/InActive/{id}',[AdminController::class,'InActive'])->name('comments.inactive');

Route::get('/Comment/Active/{id}',[AdminController::class,'Active'])->name('comments.active');

Route::get('/FeedbackItem',[AdminController::class,'FeedbackItem'])->name('manage.feedback.item');
Route::get('/delete/feedback/{id}',[AdminController::class,'DeleteFeedback'])->name('feedback.item.delete');

Route::get('logout/', [AdminController::class, 'destroy'])->name('admin.logout');
});
require __DIR__.'/auth.php';
