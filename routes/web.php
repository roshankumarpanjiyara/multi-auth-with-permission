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

Route::get('/', function () {
    return view('welcome');
});

//google login
Route::get('auth/google', 'App\Http\Controllers\LoginController@redirectToGoogle')->name('google.redirect');
Route::get('auth/google/callback', 'App\Http\Controllers\LoginController@handleGoogleCallback')->name('google.callback');

//admin login
Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login', [App\Http\Controllers\AdminController::class, 'loginForm']);
    Route::post('admin/login', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.login');
});

//admin dashboard
Route::middleware([
    'auth:sanctum,admin',
    config('jetstream.auth_session'),
    'has.permission',
    'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('backend.admin.admin_dashboard');
    })->name('admin.dashboard')->middleware('auth:admin');

    Route::prefix('admin/dashboard')->group(function(){
        //permission
        Route::resource('permissions','App\Http\Controllers\Backend\PermissionController');
        //role
        Route::resource('roles','App\Http\Controllers\Backend\RoleController');
        //user
        Route::resource('users','App\Http\Controllers\UserController');
        //admin routes
        Route::controller(App\Http\Controllers\AdminController::class)->group(function(){
            Route::get('/profile','AdminProfile')->name('admin.profile.view');
            Route::get('/profile/edit','AdminEditProfile')->name('admin.profile.edit');
            Route::patch('/profile/store','AdminStoreProfile')->name('admin.profile.store');
            Route::get('/profile/change/password','AdminPasswordProfile')->name('admin.profile.password');
            Route::patch('/profile/update/password','AdminUpdatePassword')->name('admin.password.update');
            Route::get('/admins','AdminIndex')->name('admins.index');
            Route::get('/create','AdminCreate')->name('admins.create');
            Route::post('/store','AdminStore')->name('admins.store');
            Route::get('/edit/{id}','AdminEdit')->name('admins.edit');
            Route::patch('/update/{id}','AdminUpdate')->name('admins.update');
            Route::delete('/delete/{id}','AdminDelete')->name('admins.delete');
        });
    });
});

//user dashboard
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    // 'has.permission',
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');

    Route::prefix('dashboard')->group(function(){
        Route::prefix('profile')->group(function(){
            Route::get('/view', [App\Http\Controllers\UserController::class, 'ProfileView'])->name('profile.view');
            Route::get('/profile-edit', [App\Http\Controllers\UserController::class, 'ProfileEdit'])->name('profile.edit');
            Route::patch('/update', [App\Http\Controllers\UserController::class, 'ProfileUpdate'])->name('profile.update');
            Route::get('/password/view', [App\Http\Controllers\UserController::class, 'PasswordView'])->name('password.view');
            Route::patch('/password/change', [App\Http\Controllers\UserController::class, 'PasswordChange'])->name('password.change');
        });
    });
});
