<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;

    Route::get('/', function () {
    return view('home');
    })->middleware('auth');

    Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

    Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');



    Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

    Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

    Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


    Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

    Route::get('/estudiante', [AdminController::class, 'index'])
    ->middleware('auth.estudiante')
    ->name('estudiante.index');

    Route::resource('empresariales', App\Http\Controllers\EmpresarialeController::class)->middleware('auth');
    Route::resource('rubricas', App\Http\Controllers\RubricaController::class)->middleware('auth');
    

    Route::group(['middleware' => 'auth.admin'], function(){
        Route::get('/empresariales/create', [App\Http\Controllers\EmpresarialeController::class, 'create'])->name('empresariales.create');
        Route::get('/empresariales/{empresariale}/edit', [App\Http\Controllers\EmpresarialeController::class, 'edit'])->name('empresariales.edit');
        Route::delete('/empresariales/{empresariale}}',[App\Http\Controllers\EmpresarialeController::class, 'destroy'])->name('empresariales.destroy');
    });

    Route::group(['middleware' => 'auth.admin'], function(){
        Route::get('/rubricas/create', [App\Http\Controllers\RubricaController::class, 'create'])->name('rubricas.create');
        Route::get('/rubricas/{rubrica}/edit', [App\Http\Controllers\RubricaController::class, 'edit'])->name('rubricas.edit');
        Route::delete('/rubricas/{rubrica}}',[App\Http\Controllers\RubricaController::class, 'destroy'])->name('rubricas.destroy');

    });

    Route::get('empresariale/pdf',[App\Http\Controllers\EmpresarialeController::class, 'pdf'])->name('empresariales.pdf');
    Route::get('rubrica/pdf',[App\Http\Controllers\RubricaController::class, 'pdf'])->name('rubricas.pdf');

    Route::post('EnvioDatos',[App\Http\Controllers\RegistroController::class, 'Insertar']);
    Route::get('Listado',[App\Http\Controllers\ListadoController::class, 'index'])->name('datos.index')->middleware('auth');
    Route::get('/registro', [App\Http\Controllers\RegistroController::class, 'create'])->name('datos.store')->middleware('auth');


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/pdf',[App\Http\Controllers\PDFController::class, 'pdf'])->name('descargarPDF');
