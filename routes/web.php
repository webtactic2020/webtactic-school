<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'IndexController@index');


// AdminController Dashboard
Route::get('/admin/dashboard', 'AdminController@dashboard');



// AdminController Curriculum
Route::get('/admin/view-curriculum', 'AdminController@curriculum');
Route::get('/admin/add-subjects', 'AdminController@addSubjects');
Route::get('/admin/add-subjects-units', 'AdminController@addSubjectsUnits');
Route::get('/admin/view-subjects-units', 'AdminController@viewSubjectsUnits');
Route::get('/admin/add-topics', 'AdminController@addTopics');


// AdminController Manage User

Route::get('/admin/register', 'AdminController@register');
Route::get('/admin/view-register-students', 'AdminController@viewRegisterStudents');
Route::get('/admin/view-register-teacher', 'AdminController@viewRegisterTeacher');


// AdminController Projects

Route::get('/admin/add-projects', 'AdminController@addProjects');
Route::get('/admin/view-projects-assignments', 'AdminController@viewProjectsAssignments');
Route::get('/admin/view-feedback', 'AdminController@viewFeedback');


//AdminController Notice

Route::get('/admin/add-notice', 'AdminController@addNotice');
Route::get('/admin/view-notice', 'AdminController@viewNotice');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
