<?php

use App\Http\Controllers\Admin\BatchController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\InstitutionController;
use App\Http\Controllers\Admin\StudentsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Student\DashboardController;
use App\Http\Controllers\Student\LGAClearanceController;
use App\Http\Controllers\Student\PPALetterController;
use App\Http\Controllers\Student\Reg\InstitutionAttendedController;
use App\Http\Controllers\Student\Reg\InstitutionValidationController;
use App\Http\Controllers\Student\Reg\MillitaryInfoController;
use App\Http\Controllers\Student\Reg\NextOfKinController;
use App\Http\Controllers\Student\Reg\NINValidationController;
use App\Http\Controllers\Student\Reg\OtherInfoController;
use App\Http\Controllers\Student\Reg\ProfileImageController;
use App\Http\Controllers\Student\Reg\UserInfoController;
use App\Http\Controllers\Verification;
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

Route::get('/', [PublicController::class, 'index']);
Route::get('/register', [PublicController::class, 'register']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/reg_successful', [PublicController::class, 'reg_successful']);

Route::get('/login', [PublicController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LogoutController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/forgot_password', [PublicController::class, 'forgot_password']);
Route::post('/reset_password_link', [PasswordController::class, 'resetPasswordLink']);

Route::get('/reset_password/{email_base64}/{token}', [PublicController::class, 'changePassword']);
Route::post('/reset_password/{email_base64}/{token}', [PasswordController::class, 'changePassword'])->name('password.reset');

Route::get('/verify_email', [PublicController::class, 'sendVerificationLink']);
Route::post('/verify_email', [Verification::class, 'sendEmailVerification']);
Route::get('/verify_email/{verification_id}/{email_code}', [Verification::class, 'verifyEmail']);


Route::prefix('student/reg/step')
  ->middleware(['auth', 'student'])
  ->group(function () {
    Route::get('/1', [NINValidationController::class, 'index']);
    Route::get('/2', [InstitutionValidationController::class, 'index']);
    Route::get('/3', [UserInfoController::class, 'index']);
    Route::get('/4', [ProfileImageController::class, 'index']);
    Route::get('/5', [OtherInfoController::class, 'index']);
    Route::get('/6', [NextOfKinController::class, 'index']);
    Route::get('/7', [InstitutionAttendedController::class, 'index']);
    Route::get('/8', [MillitaryInfoController::class, 'index']);

    Route::post('/1', [NINValidationController::class, 'update']);
    Route::post('/2', [InstitutionValidationController::class, 'update']);
    Route::post('/3', [UserInfoController::class, 'update']);
    Route::post('/4', [ProfileImageController::class, 'update']);
    Route::post('/5', [OtherInfoController::class, 'update']);
    Route::post('/6', [NextOfKinController::class, 'update']);
    Route::post('/7', [InstitutionAttendedController::class, 'update']);
    Route::post('/8', [MillitaryInfoController::class, 'update']);
  });


Route::prefix('student')
  ->middleware(['auth', 'student'])
  ->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/ppa_letter', [PPALetterController::class, 'index']);
    Route::get('/lga_clearance', [LGAClearanceController::class, 'index']);

    Route::get('/update_password', [PasswordController::class, 'updatePasswordView']);
  });


// ADMIN ROUTES
Route::prefix('admin')
  ->middleware(['auth', 'admin'])
  ->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index']);
    Route::get('/upload_new_students', [StudentsController::class, 'uploadStudentView']);
    Route::post('/upload_new_students', [StudentsController::class, 'uploadStudent']);
    Route::get('/view_institutions', [InstitutionController::class, 'institutionView']);
    Route::post('/post_institutions', [InstitutionController::class, 'institutionUpdate']);

    Route::get('/update_batch', [BatchController::class, 'batchView']);
    Route::post('/update_batch', [BatchController::class, 'batchUpdate']);

    Route::get('/update_password', [PasswordController::class, 'updatePasswordView']);
  });


// ADMIN ROUTES
Route::middleware(['auth'])
  ->group(function () {
    Route::post('/update_password', [PasswordController::class, 'updatePassword'])->name('update_password');
  });
