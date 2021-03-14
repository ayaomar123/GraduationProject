<?php

use App\Http\Controllers\Admin\AnswerController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\QestionController;
use App\Http\Controllers\Admin\ScholarController;
use App\Http\Controllers\Admin\StaticPageController;
use App\Http\Controllers\Admin\TrainerController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserProfileController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\CustomerHomeController;
use App\Http\Controllers\front\FrontCourseController;
use App\Http\Controllers\front\FrontDepartmentController;
use App\Http\Controllers\front\FrontResultController;
use App\Http\Controllers\front\FrontScholarController;
use App\Http\Controllers\front\FrontStaticPageController;

use App\Http\Controllers\FrontQuestionController;
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



Route::get('home',function (){
    return view('layouts.home.frontend');
});
Route::get('',function (){
    return view('front.CustomerHome');
});

Route::resource("quiz",FrontQuestionController::class);
Route::resource("myprofile",CustomerHomeController::class);
Route::get("getDepartments",[FrontDepartmentController::class,'index']);
Route::get('/getDepartments/{slug}', [FrontDepartmentController::class,'details'])->name("getDepartments.details");

Route::get("getScholar",[FrontScholarController::class,'index'])->name('scolarss');
Route::get("getScholar/internal",[FrontScholarController::class,'internal'])->name('internal');
Route::get("getScholar/external",[FrontScholarController::class,'external'])->name('external');
Route::get('/getScholar/{slug}', [FrontScholarController::class,'details'])->name("getScholarDetails");
Route::get("getCourses",[FrontCourseController::class,'index'])->name('getCourses');
Route::get("getCourses/subscription/{slug}",[FrontCourseController::class,'subscription'])->name('subscription');
Route::get('/getCourses/{slug}', [FrontCourseController::class,'details'])->name("getCoursesDetails");
Route::get('/menu/{slug}', [FrontCourseController::class,'menu'])->name("menu");
Route::get("getResult",[FrontResultController::class,'index'])->name('getResult');
Route::get("getPages/who",[FrontStaticPageController::class,'index'])->name('getPages/who');
Route::get("getPages/calls",[FrontStaticPageController::class,'calls'])->name('getPages/calls');


Route::prefix("admin")->middleware(['auth','role:admin'])->group(function() {
    Route::get('/', function () {
        return view('layouts.admin');
    })->name('dashboard');

    Route::resource("user",UserController::class);
    Route::get("user/{id}/delete",[UserController::class,'destroy'])->name("users.delete");

    Route::resource("customer",CustomerController::class);
    Route::get("customer/{id}/delete",[CustomerController::class,'destroy'])->name("customer.delete");

    Route::resource("static-page", StaticPageController::class);
    Route::get("static-page/{id}/delete", [StaticPageController::class, 'destroy'])->name("static-page.delete");

    Route::resource("trainers", TrainerController::class);
    Route::get("trainers/{id}/delete", [TrainerController::class, 'destroy'])->name("trainers.delete");

    Route::resource("departments", DepartmentController::class);
    Route::get("departments/{id}/delete", [DepartmentController::class, 'destroy'])->name("departments.delete");

    Route::resource("scholarships", ScholarController::class);
    Route::get("scholarships/{id}/delete", [ScholarController::class, 'destroy'])->name("scholarships.delete");

    Route::resource("courses", CourseController::class);
    Route::get("courses/{id}/delete", [CourseController::class, 'destroy'])->name("courses.delete");

    Route::resource("question", QestionController::class);
    Route::get("question/{id}/delete", [QestionController::class, 'destroy'])->name("question.delete");

    Route::resource("answers", AnswerController::class);
    Route::get("answers/{id}/delete", [AnswerController::class, 'destroy'])->name("answers.delete");

    Route::get("change-pass", [ChangePasswordController::class, 'edit'])->name("password.edit");
    Route::post("change-pass", [ChangePasswordController::class, 'update'])->name("password.changed");

    Route::get("profile", [UserProfileController::class, 'edit'])->name("profile.edit");
    Route::put("profile", [UserProfileController::class, 'update'])->name("profile.update");
});



require __DIR__.'/auth.php';
