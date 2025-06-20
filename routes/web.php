<?php

use App\Http\Controllers\Front\HomeController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/estate', [HomeController::class, 'estate'])->name('estate');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/live-trades', [HomeController::class, 'trades'])->name('trades');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/realestate', [HomeController::class, 'realestate'])->name('realestate');
Route::get('/cryptocurrency', [HomeController::class, 'cryptocurrency'])->name('cryptocurrency');
Route::get('/stock', [HomeController::class, 'stock'])->name('stock');
Route::get('/tos', [HomeController::class, 'tos'])->name('tos');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/invplanning', [HomeController::class, 'invplanning'])->name('invplanning');
Route::get('/marketinsights', [HomeController::class, 'marketinsights'])->name('marketinsights');
Route::get('/wlthadvisry', [HomeController::class, 'wlthadvisry'])->name('wlthadvisry');
Route::get('/portmg', [HomeController::class, 'portmg'])->name('portmg');
Route::get('/riskassmt', [HomeController::class, 'riskassmt'])->name('riskassmt');
Route::get('/tradingexec', [HomeController::class, 'tradingexec'])->name('tradingexec');
Route::post('/contact', [HomeController::class, 'contactValidate'])->name('contact-validate');
Route::get('/p/{slug}', [HomeController::class, 'page'])->name('page');


Route::get('/emailcontact', [HomeController::class, 'emailcontact'])->name('emailcontact');
Route::post('/emailcontact', [HomeController::class, 'emailproof'])->name('emailproof');
