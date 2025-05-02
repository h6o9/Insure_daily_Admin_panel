<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Admin\AboutusController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\InsurancesController;
use App\Http\Controllers\Admin\OfficerController;
use App\Http\Controllers\Admin\TermConditionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserCertificatesController;
use App\Http\Controllers\Web\WebsiteController;

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
/*
Admin routes
 * */

Route::get('/cache_clear', function () {
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('optimize:clear');
    Artisan::call('route:clear');
    return 'Application cache cleared!';
});

// Route::get('/', function () {
//     return redirect('/web-index');
// });
Route::get('/', [WebsiteController::class, 'webIndex']);
Route::get('/search-index', [WebsiteController::class, 'searchBlade']);
Route::post('/search-result', [WebsiteController::class, 'checkSearchData'])->name('search.results');


Route::get('/admin-login', [AuthController::class, 'getLoginPage']);
Route::post('admin/login', [AuthController::class, 'Login']);
Route::get('/admin-forgot-password', [AdminController::class, 'forgetPassword']);
Route::post('/admin-reset-password-link', [AdminController::class, 'adminResetPasswordLink']);
Route::get('/change_password/{id}', [AdminController::class, 'change_password']);
Route::post('/admin-reset-password', [AdminController::class, 'ResetPassword']);

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('dashboard', [AdminController::class, 'getdashboard']);
    Route::get('profile', [AdminController::class, 'getProfile']);
    Route::post('update-profile', [AdminController::class, 'update_profile']);
    Route::get('logout', [AdminController::class, 'logout']);
    /**officer */
    Route::get('officer/status/{id}', [OfficerController::class, 'status'])->name('officer.status');
    /**company */
    Route::get('company/status/{id}', [CompanyController::class, 'status'])->name('company.status');

    /** resource controller */
    Route::resource('officer', OfficerController::class);
    Route::resource('company', CompanyController::class);
    Route::resource('about', AboutusController::class);
    Route::resource('policy', PolicyController::class);
    Route::resource('terms', TermConditionController::class);
    // Route::resource('faq', FaqController::class);
    // ################ Insurance ################
    Route::controller(InsurancesController::class)->group(function () {
        Route::get('/insurance', 'insuranceIndex')->name('insurance.index');
        Route::post('/insurance-create', 'insuranceCreate')->name('insurance.create');
        Route::get('/insuranceData', 'insuranceData')->name('insurance.get');
        Route::get('/insurance/{id}', 'showinsurance')->name('insurance.show');
        Route::post('/insuranceUpdate/{id}', 'updateinsurance')->name('insurance.update');
        Route::get('/insurance/delete/{id}', 'deleteinsurance')->name('insurance.delete');
        Route::post('/update-insurance-status/{id}',  'updateinsuranceStatus')->name('insuranceBlock.update');
    });
    // ################ Users ################
    Route::controller(UserController::class)->group(function () {
        Route::get('/user-certificate/{id}', 'userCertificates')->name('certificates.index');
        Route::get('/user-certificate-create/{id}', 'certificateCretePage')->name('certificates.create');
        Route::get('/user', 'userIndex')->name('user.index');
        Route::post('/user-create', 'userCreate')->name('user.create');
        Route::get('/userData', 'userData')->name('user.get');
        Route::get('/user/{id}', 'showuser')->name('user.show');
        Route::post('/userUpdate/{id}', 'updateUser')->name('user.update');
        Route::get('/user/delete/{id}', 'deleteUser')->name('user.delete');
        Route::post('/update-user-status/{id}',  'updateUserStatus')->name('userBlock.update');
    });

     //  ######################### FAQ #########################
     Route::controller(FaqController::class)->group(function () {
        Route::get('/faq',  'faqIndex')->name('faq.index');
        Route::get('/faq-create',  'faqCreate')->name('faq.create');
        Route::post('/faq-store',  'faqStore')->name('faq.store');
        Route::get('/faqData',  'faqData')->name('faq.get');
        Route::get('/faq/edit/{id}',  'editFaq')->name('faq.edit');
        Route::get('/faq/{id}',  'showFaq')->name('faq.show');
        Route::post('/faqUpdate/{id}',  'updateFaq')->name('faq.update');
        Route::get('/faq/delete/{id}',  'deleteFaq')->name('faq.delete');
        Route::post('/faq/reorder',  'faqReorder')->name('faq.updateOrder');
    }); 

    Route::controller(UserCertificatesController::class)->group(function () {
        Route::post('/user-certificate-store', 'store')->name('certificates.store');
        Route::delete('/user-certificate-delete/{id}', 'destroy')->name('certificates.destroy');
    });


});

require __DIR__ . '/user.php'; 
