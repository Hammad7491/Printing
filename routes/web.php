<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'indexes'])
         ->name('indexes');




Route::get('/villa', [PagesController::class, 'villa'])
         ->name('villa');


         Route::get('/neon', [PagesController::class, 'neon'])
         ->name('neon');


         Route::get('/name', [PagesController::class, 'name'])
         ->name('name');


 Route::get('/label', [PagesController::class, 'label'])
         ->name('label');


          Route::get('/print', [PagesController::class, 'print'])
         ->name('print');




          Route::get('/ballon', [PagesController::class, 'ballon'])
         ->name('ballon');


         Route::get('/flag', [PagesController::class, 'flag'])
         ->name('flag');


         Route::get('/stand', [PagesController::class, 'stand'])
         ->name('stand');