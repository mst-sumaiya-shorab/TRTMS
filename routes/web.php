<?php

use App\Models\Thesis;
use App\Models\Practicum;
use GuzzleHttp\Promise\Create;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ThesisController;
use App\Http\Controllers\ApproveController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PracticumController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\NewRegisterController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'deshboard'])->name('Dashboard');

Route::get('/register',[RegisterController::class,'register'])->name('register');
Route::post('/register-form',[RegisterController::class,'registerform'])->name('admin.register');

Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('/login_form',[AuthController::class,'loginform'])->name('admin.login');

Route::get('/logout',[AuthController::class,'logout'])->name('Logout');

// Student list in admin dashboard
Route::get('/student-list',[StudentController::class,'student'])->name('studentlist');
Route::get('/student-list/screate',[StudentController::class,'create'])->name('student.create');
Route::post('/student-list/store',[StudentController::class,'store'])->name('student.store');

// faculty list in admi  dashboard
Route::get('/faculty-list',[FacultyController::class,'faculty'])->name('facultylist');
Route::get('/faculty-list/create',[FacultyController::class,'create'])->name('faculty.create');
Route::post('/faculty-list/store',[FacultyController::class,'store'])->name('faculty.store');

//new register list
Route::get('/new',[NewRegisterController::class,'newregister'])->name('newregister');
Route::get('/newform',[NewRegisterController::class,'create'])->name('newregister.create');

//action
Route::get('/view/{id}',[NewRegisterController::class,'view'])->name('view');
Route::get('/edit',[NewRegisterController::class,'edit'])->name('edit');
Route::get('/delete',[NewRegisterController::class,'delete'])->name('delete');

//approved
Route::get('/approve/{id}',[ApproveController::class,'approve'])->name('approve');
Route::get('/accept/{id}',[ApproveController::class,'accept'])->name('accept');
Route::get('/accepte/{id}',[ApproveController::class,'accepte'])->name('accepte');


//department
Route::get('/department',[DepartmentController::class,'department'])->name('department');
Route::get('/department/create',[DepartmentController::class,'create'])->name('department.create');
Route::post('/department/store',[DepartmentController::class,'store'])->name('department.store');

//department action
Route::get('department/{id}/edit',[DepartmentController::class,'edit'])->name('department.edit');
Route::put('/department/{id}',[DepartmentController::class,'update'])->name('department.update');
Route::get('/department/delete/{id}',[DepartmentController::class,'delete'])->name('department.delete');

//semester
Route::get('/semester',[DepartmentController::class,'semester'])->name('semester');

//course
Route::get('/course',[CourseController::class,'course'])->name('course');
Route::get('/course/create',[CourseController::class,'create'])->name('course.create');
Route::post('/course/store',[CourseController::class,'store'])->name('course.store');

//thesis and practicum
Route::get('/course/thesis',[ThesisController::class,'thesis'])->name('thesis');
Route::get('/course/pending-thesis',[ThesisController::class,'newthesis'])->name('newthesis');
Route::get('/course/practicum',[PracticumController::class,'practicum'])->name('practicum');
Route::get('/course/pending-practicum',[PracticumController::class,'newpracticum'])->name('newpracticum');

//research
Route::get('/research',[ResearchController::class,'research'])->name('research');
Route::get('/research/create',[ResearchController::class,'create'])->name('research.create');
Route::get('/research/store',[ResearchController::class,'store'])->name('research.store');

//task
Route::get('/task',[TaskController::class,'task'])->name('task');