<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/kili-routes', function () {
    return view('layouts.kilimanjaroroutes');
});

Route::get('/day-trips', function () {
    return view('layouts.daytrips');
});


Route::get('/m6', function () {
    return view('layouts.6machame');
});
Route::get('/m7', function () {
    return view('layouts.7machame');
});
Route::get('/lm7', function () {
    return view('layouts.7lemosho');
});
Route::get('/rn7', function () {
    return view('layouts.7rongai');
});

Route::get('/mr5', function () {
    return view('layouts.5marangu');
});

Route::get('/mr6', function () {
    return view('layouts.6marangu');
});

Route::get('/meru', function () {
    return view('layouts.meru');
});

Route::get('/usambara', function () {
    return view('layouts.usambara');
});

Route::get('/oldonyo', function () {
    return view('layouts.oldonyo');
});

Route::get('/2dayswldlifes', function () {
    return view('layouts.2dayswldlife');
});

Route::get('/5dayswldlifesafari', function () {
    return view('layouts.5dayswldsafari');
});

Route::get('/4daysTanzsafari', function () {
    return view('layouts.4daysTanzsafari');
});


Route::get('/wildlife-luxury-safari', function () {
    return view('layouts.arushasafari');
});

Route::get('/3-days-zanzibar', function () {
    return view('layouts.3zanzibar');
});

Route::get('/six-day-zanzibar', function () {
    return view('layouts.6zanzibar');
});

Route::get('/7-day-zanzibar', function () {
    return view('layouts.7zanzibar');
});
Route::get('/terms&Condition', function () {
    return view('layouts.terms');
});



