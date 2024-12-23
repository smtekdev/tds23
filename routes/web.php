<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\FormController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   // return view('welcome');

});

Route::post('/send-message', [PageController::class, 'sendEmail'])->name('contact.send');

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/websitedesign', [PageController::class, 'websitedesign'])->name('websitedesign');
Route::get('/websitedevelopment', [PageController::class, 'websitedevelopment'])->name('websitedevelopment');
Route::get('/graphicdesign', [PageController::class, 'graphicdesign'])->name('graphicdesign');
Route::get('/socialmediamarketing', [PageController::class, 'socialmediamarketing'])->name('socialmediamarketing');
Route::get('/appdevelopment', [PageController::class, 'appdevelopment'])->name('appdevelopment');
Route::get('/searchengineoptimization', [PageController::class, 'searchengineoptimization'])->name('searchengineoptimization');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/videoediting', [PageController::class, 'videoediting'])->name('videoediting');
Route::get('/animation', [PageController::class, 'animation'])->name('animation');
Route::get('/illustration', [PageController::class, 'illustration'])->name('illustration');
Route::get('/ecommerce', [PageController::class, 'ecommerce'])->name('ecommerce');
Route::get('/youtubemonetization', [PageController::class, 'youtubemonetization'])->name('youtubemonetization');
Route::get('/copywriting', [PageController::class, 'copywriting'])->name('copywriting');
Route::get('/contentcreation', [PageController::class, 'contentcreation'])->name('contentcreation');
Route::get('/gamedevelopment', [PageController::class, 'gamedevelopment'])->name('gamedevelopment');
Route::get('/branding', [PageController::class, 'branding'])->name('branding');
Route::get('/portfolio1', [PageController::class, 'portfolio1'])->name('portfolio1');


Route::post('/submit-form', [FormController::class, 'submitForm'])->name('form.submit');