<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\MailingListController;
use App\Http\Controllers\VideoServerController;

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

Route::get('/', [FrontendController::class, 'index']);
Route::get('media', [FrontendController::class, 'media']);
Route::get('movie', [FrontendController::class, 'movie']);
Route::get('watch', [FrontendController::class, 'watch']);
Route::post('subscription', [SubscriberController::class, 'subscribe']);

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/view_sunscriber', [SubscriberController::class, 'view_sunscriber'])->name('findsubscribers');
Route::delete('/delete_sunscriber{id}', [SubscriberController::class, 'delete_sunscriber'])->name('deletesubscribers');
Route::get('/view_code', [MailingListController::class, 'index'])->name('codepage');
Route::post('/send_code', [MailingListController::class, 'store_code'])->name('storecode');
Route::delete('/delete_code/{id}', [MailingListController::class, 'delete_code'])->name('deletecode');
Route::get('/regenerate_conut/{id}', [MailingListController::class, 'regenerate_conut'])->name('regeneratedcount');
Route::get('/video_server', [VideoServerController::class, 'video_server'])->name('videoserver');
Route::post('/store_video', [VideoServerController::class, 'store_video'])->name('storevideo');
Route::post('/store_trailer', [VideoServerController::class, 'store_trailer'])->name('storrtrailer');
Route::post('/verify_code', [VideoServerController::class, 'verify_code'])->name('verifycode');



/*
 | -----------------------------------------------------------
 | Profile Routes
 | -----------------------------------------------------------
 */

