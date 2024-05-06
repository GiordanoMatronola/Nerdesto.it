<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//rotta home
Route::get('/', [FrontController::class, 'welcome'])->name('welcome');


//rotta crea annuncio
Route::get('/nuovo/annuncio', [AnnouncementController::class, 'createAnnouncement'])->middleware('auth')->name('announcements.create');

//Home revisore
Route::get('/revisor/dashboard',[RevisorController::class, 'dashboard'])->middleware('isRevisor')->name('revisor.dashboard');

//Richiesta per diventare revisore
Route::get('richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('becomeRevisor');
Route::get('/rendi/revisore/{user}',[RevisorController::class,'makeRevisor'])->name('make.revisor');
Route::get('/formRevisore', [Frontcontroller::class, 'formRevisor'])->middleware('auth')->name('formRevisor');


//Rotte per il Profilo
Route::get('/tuoProfilo', [FrontController::class, 'tuoProfilo'])->name('tuoProfilo');
Route::get('/tuoProfilo/edit/{user}', [FrontController::class, 'tuoProfiloEdit'])->name('tuoProfiloEdit');
Route::post('/tuoProfilo/update', [FrontController::class, 'tuoProfiloUpdate'])->name('tuoProfiloUpdate');

// Route::get('/prova/{announcement}',[AnnouncementController::class,'prova'])->name('prova');

//Rotta per il profilo visto dagli altri utenti
Route::get('/profilodi{username}', [FrontController::class, 'profiloUtente'])->name('profiloUtente');

// Rotta per le Spedizioni Veloci
Route::get('/delivery', [FrontController::class, 'delivery'])->name('delivery');
















Route::get('/categoria/{category}', [FrontController::class, 'categoryShow'])->name('categoryShow');
Route::get('/dettaglio/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcements.show');
Route::get('/tutti/annunci', [AnnouncementController::class, 'indexAnnouncement'])->name('announcements.index');
Route::get('/ricerca/annuncio', [FrontController::class, 'searchAnnouncements'])->name('announcements.search');
Route::post('/lingua/{lang}', [FrontController::class, 'setLanguage'])->name('set_language_locale');

