<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('login', function (Request $request) {
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('dashboard');
    }

    return back()->withErrors([
        'username' => 'The provided credentials do not match our records.',
    ]);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', [AdminAuthController::class, 'index'])->name('admin.login');

    Route::post('/index', [AdminAuthController::class, 'index2'])->name('admin.index');

    Route::post('/form', [AdminAuthController::class, 'customLogin'])->name('admin.customLogin');

    Route::post('/create', [AdminAuthController::class, 'create'])->name('create');

    Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');

});