<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentWebsiteController;
use App\Http\Controllers\AdminWebsiteController;
use App\Http\Controllers\CreateDepartmentsController;
use App\Http\Controllers\CourseController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Route::get('/student/home', [StudentWebsiteController::class, 'home']);
// Route::get('/student/arif', [StudentWebsiteController::class, 'arif']);


// Route::get('/admin/home', [AdminWebsiteController::class, 'home']);
// Route::get('/admin/create-course', [AdminWebsiteController::class, 'create_course']);
// Route::get('/admin/view-course', [AdminWebsiteController::class, 'view_course']);
// Route::get('/admin/create-department', [AdminWebsiteController::class, 'create_department']);
// Route::get('/admin/view-department', [AdminWebsiteController::class, 'view_department']);
// Route::get('/admin/enrollment-requests', [AdminWebsiteController::class, 'enrollment_requests']);
// Route::get('/admin/new-registrations', [AdminWebsiteController::class, 'new_registrations']);



// multiple authentication system
Route::middleware(['auth','role:admin'])->group(function(){

    Route::get('/admin/home',[AdminWebsiteController::class, 'home'])->name('admin.pages.admin-home');
    Route::get('/admin/home', [AdminWebsiteController::class, 'home']);

    //courses
    
    

    //departments
    //create department page view
    Route::get('/admin/create-department', [CreateDepartmentsController::class, 'create_department']);
    //department info post
    Route::post('/admin/store', [CreateDepartmentsController::class, 'store']);
    //view departments
    Route::get('/admin/view-department', [CreateDepartmentsController::class, 'view_department']);
    //edit
    Route::get('admin/edit/{id}', [CreateDepartmentsController::class, 'edit']);
    Route::post('admin/update/{id}', [CreateDepartmentsController::class, 'update']);
    //delete
    Route::get('admin/delete/{id}', [CreateDepartmentsController::class, 'delete']);


    //Courses
    //create Course page view
    Route::get('/admin/create-course', [CourseController::class, 'create_course']);
    //Course info post
    Route::post('/admin/course-store', [CourseController::class, 'store']);
    //view Course
    Route::get('/admin/view-course', [CourseController::class, 'view_course']);
    //edit
    Route::get('admin/course-edit/{id}', [CourseController::class, 'edit']);
    Route::post('admin/course-update/{id}', [CourseController::class, 'update']);
    //delete
    Route::get('admin/course-delete/{id}', [CourseController::class, 'delete']);

    //enrollments
    Route::get('/admin/enrollment-requests', [AdminWebsiteController::class, 'enrollment_requests']);
    Route::get('/admin/new-registrations', [AdminWebsiteController::class, 'new_registrations']);
   
   }); //End Group Admin Middleware
   
   Route::middleware(['auth','role:student'])->group(function(){
   
    Route::get('/student/home',[StudentWebsiteController::class, 'home'])->name('student.pages.student-home');
    Route::get('/student/home', [StudentWebsiteController::class, 'home']);
    Route::get('/student/arif', [StudentWebsiteController::class, 'arif']);
    Route::get('/student/view-available-courses', [StudentWebsiteController::class, 'available_courses']);
    Route::get('/student/course-recommendation', [StudentWebsiteController::class, 'course_recommendation']);
    Route::get('/student/view-courses', [StudentWebsiteController::class, 'show_courses']);
    Route::get('/student/view-enrollment', [StudentWebsiteController::class, 'view_enrollment']);
    Route::get('/student/new-enrollment', [StudentWebsiteController::class, 'new_enrollment']);
    Route::get('/student/reports', [StudentWebsiteController::class, 'view_reports']);
    Route::get('/student/enrollment-form', [StudentWebsiteController::class, 'print_enrollment']);
    Route::get('/student/results', [StudentWebsiteController::class, 'print_results']);
   
   }); //End Group Faculty Middleware

//    Route::get('/student/random', [StudentWebsiteController::class, 'random_page']);
