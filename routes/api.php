<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\clientReviewController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\HomePageEtcController;


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Chart Route
Route::get('/chartdata',[ChartController::class, 'onAllSelect']);

//Client Review Route
Route::get('/clientreview',[clientReviewController::class, 'onAllSelect']);

//Contact Route
Route::post('/contactsend',[ContactController::class, 'onContactSend']);

//Course All Route
Route::get('/coursehome',[CoursesController::class, 'onSelectFour']);
Route::get('/courseall',[CoursesController::class, 'onSelectAll']);
Route::get('/coursedetails/{courseID}',[CoursesController::class, 'onSelectDetails']);

//Footer Route
Route::get('/footerdata',[FooterController::class, 'onAllSelect']);

//Information Route
Route::get('/information',[InformationController::class, 'onAllSelect']);

//Services Route
Route::get('/services',[ServiceController::class, 'ServiceView']);

//Project Routes
Route::get('/projecthome',[ProjectController::class, 'onSelectThree']);
Route::get('/projectall',[ProjectController::class, 'onSelectAll']);
Route::get('/projectdetails/{projectId}',[ProjectController::class, 'ProjectDetails']);

//Home All Routes
Route::get('/totalhome',[HomePageEtcController::class, 'SelectTotalHome']);
Route::get('/techhome',[HomePageEtcController::class, 'SelectTechHome']);
Route::get('/homepage/title',[HomePageEtcController::class, 'SelectHomeTitle']);
