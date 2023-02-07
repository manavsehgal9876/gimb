<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/new', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index2');
});

Route::post('send-enquiry-data',[ApiController::class,'sendEnquiryData'])->name('send-enquiry-data');

Route::post('send-brochure-data',[ApiController::class,'sendBrochureData'])->name('send-brochure-data');

Route::post('send-apply-data',[ApiController::class,'sendApplyData'])->name('send-apply-data');

Route::post('send-banner-data',[ApiController::class,'sendBannerData'])->name('send-banner-data');

 