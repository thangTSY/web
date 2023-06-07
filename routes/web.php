<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SinhvienController;
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

    Route::post('/form', [AdminAuthController::class, 'customLogin'])->name('admin.customLogin');

    Route::post('/create', [AdminAuthController::class, 'create'])->name('create');

    Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');

});

Auth::routes();

Route::get('/admin_home', [AdminHomeController::class, 'home'])->name('admin_home');


// Route::prefix('permission')->group(function () {


//     Route::get('/', [PermissionController::class, 'index' ])->name('permission.index');

//     Route::get('/create', [PermissionController::class, 'create' ])->name('permission.add');

//     Route::post('/store', [PermissionController::class, 'store' ])->name('permission.store');

//     Route::get('/edit', [PermissionController::class, 'edit' ])->name('permission.edit');

//     Route::post('/update', [PermissionController::class, 'update' ])->name('permission.update');

//     Route::get('/delete', [PermissionController::class, 'destroy' ])->name('permission.destroy');


// });

Route::resource('/permission',PermissionController::class);


