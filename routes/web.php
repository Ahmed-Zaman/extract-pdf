<?php

use App\Http\Controllers\PdfToTextController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/pdf-to-text', 'PdfToTextController@convert');
Route::get('/smalot-to-text', [PdfToTextController::class, 'smalotConvert']);
Route::get('/spatie-to-text', [PdfToTextController::class, 'spatieConvert']);
Route::get('/image-to-text', [PdfToTextController::class, 'ocrConvert']);

