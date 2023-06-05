<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers;



Route::get('/', function () {
    return view('welcome');
});


Route::post('login', function (Illuminate\Http\Request $request) {
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('dashboard');
    }

    return back()->withErrors([
        'username' => 'The provided credentials do not match our records.',
    ]);
});


Route::get('dashboard', [App\Http\Controllers\CustomAuthController::class, 'dashboard']); 
Route::get('admins', [App\Http\Controllers\CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [App\Http\Controllers\CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [App\Http\Controllers\CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [App\Http\Controllers\CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [App\Http\Controllers\CustomAuthController::class, 'signOut'])->name('signout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'login'])->name('admin');




Route::get('admin', [App\Http\Controllers\AdminAuthController::class, 'index'])->name('admin.login');

Route::post('admin/login', [App\Http\Controllers\AdminAuthController::class, 'customLogin'])->name('admin.customLogin');

Route::post('create', [App\Http\Controllers\AdminAuthController::class, 'create'])->name('create');

Route::get('dashboard', [App\Http\Controllers\AdminAuthController::class, 'dashboard'])->name('admin.dashboard');

Route::post('custom-registration', [App\Http\Controllers\AdminAuthController::class, 'customRegistration'])->name('register.custom'); 

Route::get('signout', [App\Http\Controllers\AdminAuthController::class, 'signOut'])->name('admin.signOut');



// Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
//     Route::get('/login', [App\Http\Controllers\Admin\AdminAuthController::class, 'getLogin'])->name('adminLogin');
//     Route::post('/login', [App\Http\Controllers\Admin\AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
 
//     Route::group(['middleware' => 'adminauth'], function () {
//         Route::get('/', function () {
//             return view('welcome');
//         })->name('adminDashboard');
 
//     });
// });
