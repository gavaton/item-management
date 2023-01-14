<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InquiryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/test', function () {
    return view('item.test');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('items', ItemsController::class)
->middleware('auth');

Route::resource('inquiry', InquiryController::class)
->middleware('auth');

Route::get('confirm', [InquiryController::class, 'showConfirm'])->name('confirm');
Route::post('confirm', [InquiryController::class, 'postConfirm'])->name('confirm');
Route::get('sent', [InquiryController::class, 'showSentMessage'])->name('sent');



Route::prefix('expired-items') //ソフトデリートのルーティング及び復元、削除
    ->middleware('auth')->group(function(){
        Route::get('index', [ItemsController::class, 'expiredItemIndex'])->name('expired-items.index');
        Route::post('restore/{item}', [ItemsController::class, 'expiredItemRestore'])->name('expired-items.restore');
        Route::post('destroy/{item}', [ItemsController::class, 'expiredItemDestroy'])->name('expired-items.destroy');
});


