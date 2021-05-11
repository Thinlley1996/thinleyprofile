<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackFormController;
use App\Http\Controllers\ReportFormController;

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
Route::get('/detail-news', function () {
    return view('frontend.detail-news');
});
Route::get('detail-news/{id}', 'FrontController@shownews');
Route::get('/news-home', function () {
    return view('frontend.news');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/project-home','FrontController@projectdec');
Route::get('/rules', function () {
    return view('frontend.rules');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/table', function () {
    return view('admin.table');
});
Route::get('/team', function () {
    return view('frontend.team');
});
Route::get('/','FrontController@index');
Route::resource('/project','ProjectController');
Route::resource('/news','NewsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/map', 'OutletMapController@index');
Route::get('/our_outlets', 'OutletMapController@index')->name('outlet_map.index');
Route::resource('outlets', 'OutletController');

Route::resource('ourteam', 'TeamController');
// feedbackform
Route::get('/feedback', [FeedbackFormController::class, 'createForm']);
Route::post('/feedback', [FeedbackFormController::class, 'ContactUsForm'])->name('feedback.store');

// Report form
 Route::get('reportform', [ReportFormController::class, 'index']);
 Route::post('reportform/send', [ReportFormController::class,'send'])->name('reportform/send');
