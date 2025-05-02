<?php
 
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\AuthController;


Route::get('/user-login',[AuthController::class,'loginpage'])->name('loginPage');
Route::post('user/login',[AuthController::class,'login']);
Route::get('/user-forgot-password', [AuthController::class, 'forgetPassword']);
Route::post('/user-reset-password-link', [AuthController::class, 'userResetPasswordLink'])->name('user.resetPasswordLink');
Route::get('/user-change-password/{id}', [AuthController::class, 'change_password']);
Route::post('/user-reset-password', [AuthController::class, 'ResetPassword']);

Route::prefix('user')->middleware('User')->group(function () {
    Route::controller(UserController::class)->group(function(){
        Route::get('dashboard','getDashboard')->name('userDashboard');
        Route::get('profile',  'getProfile')->name('user.profile');
        Route::post('update-profile', 'update_profile');
        Route::get('logout','logout');
        Route::get('certificates','userCertificates')->name('user.certificates');
        Route::get('certificate/download/{id}','downlaod')->name('certificate.download');
        Route::get('marketing','maketingView')->name('marketing');
        Route::get('/404/two','errorPage')->name('error.page2');
    });
});