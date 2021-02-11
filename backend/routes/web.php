<?php

use App\Http\Controllers\Admin\AnswerController;
use App\Http\Controllers\Admin\QestionController;
use App\Http\Controllers\Admin\StaticPageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserProfileController;
use App\Http\Controllers\Auth\ChangePasswordController;
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


Route::prefix("admin")->middleware('auth')->group(function() {
    Route::get('/aya', function () {
        return view('layouts.admin');
    });
    Route::resource("user",UserController::class);
    Route::get("user/{id}/delete",[UserController::class,'destroy'])->name("users.delete");

    Route::resource("static-page", StaticPageController::class);
    Route::get("static-page/{id}/delete", [StaticPageController::class, 'destroy'])->name("static-page.delete");

    Route::resource("question", QestionController::class);
    Route::get("question/{id}/delete", [QestionController::class, 'destroy'])->name("question.delete");

    Route::resource("answers", AnswerController::class);
    Route::get("answers/{id}/delete", [AnswerController::class, 'destroy'])->name("answers.delete");

    Route::get("change-pass", [ChangePasswordController::class, 'edit'])->name("password.edit");
    Route::post("change-pass", [ChangePasswordController::class, 'update'])->name("password.changed");

    Route::get("profile", [UserProfileController::class, 'edit'])->name("profile.edit");
    Route::put("profile", [UserProfileController::class, 'update'])->name("profile.update");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
