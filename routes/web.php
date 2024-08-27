<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\Dashboard;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
// use App\Http\Middleware\AdminMiddleware;


// Route::get('/admin/dashboard', function () {
//     return view('admin.dash');
// });


    Route::prefix('/admin')->group(function () {
        Route::get('/login', [Auth::class, 'index'])->name("admin-login");
        Route::post('/check', [Auth::class, 'userCheck'])->name("admin-check");

        Route::middleware([AdminMiddleware::class])->group(function(){
            Route::get('/dashboard', function () {
                return view('admin.dash');
            });

            Route::post('/logout', [Auth::class, 'logout']);
        });
    });
  