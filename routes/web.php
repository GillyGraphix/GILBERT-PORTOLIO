<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Hapa ndipo tunapopanga njia zote za website yako.
|
*/

// 1. Ukurasa wa nyumbani (Home Page)
Route::get('/', function () {
    return view('welcome');
});

// 2. Njia ya kutuma ujumbe (Contact Form)
// Tunatumia ContactController ili kodi iwe safi na rahisi kudebug
Route::post('/send-message', [ContactController::class, 'sendMessage']);

// 3. NJIA YA SIRI: Ukikumbana na Error 500, fungua hii link kusafisha cache
// Itumie kwa kuandika: gilbertportfolio.kigongonigazella.co.tz/clear-cache
Route::get('/clear-cache', function() {
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    return "Safi! Cache zote zimefutwa. Jaribu kutuma fomu sasa.";
});