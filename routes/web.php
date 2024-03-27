<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/pages/edit/{url}', [PageController::class, 'getPageByUrl'])->name('page.list');

Route::get('{any?}', function() {
     return view('application', ['page' => 'testing']);
 })->where('any', '.*');
