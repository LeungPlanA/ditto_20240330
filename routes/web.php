<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

//Route::get('admin/pages/edit/{url}', [PageController::class, 'getPageByUrl'])->name('page.list');

Route::get('admin/{any?}', function() {
    return view('application', ['page' => 'testing']);
})->where('any', '.*');
Route::get('build/admin/{any?}', function() {
    return view('application', ['page' => 'testing']);
})->where('any', '.*');

Route::get('/{url}', [PageController::class, 'getPageByUrl'])->name('page.getpagebyurl');
