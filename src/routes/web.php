<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\QrcodeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UpLoadController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\FormController;

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

Route::get('/', function () {
    return view('welcome');
});


//個人勉強用のコンテナ

//           ----------------------------ルーティング------------------------------------
//
// 自己学習ルート管理ページ
Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/route_check', [RouteController::class, 'index']);


// ルートリダイレクト、/hereで検索した場合に/thereのサイトにリダイレクトする
Route::view('/here', 'redirect_here');
Route::view('/there', 'redirect_there');
// Route::redirect('/here', '/there');         //  先にhereやthereのルートを定義しておかないとredirectできない
Route::redirect('/here', '/there', 301);      //   301を指定しないときは302になる。302は一時的、301は恒久的なリダイレクト

// パラメータ制約
Route::get('/paramate_vali/{id}', [RouteController::class, 'paramete_varidation'])
    ->where('id', '[0-9]+')->name('paramete_varidation');

// ミドルウェア用の基礎
Route::get('/home', [RouteController::class, 'home'])->name('home');
Route::get('/route_check', [RouteController::class, 'middleware_practice'])->middleware('HogeMiddleware')->name('middleware.validation');

// Qrコード
// WebカメラによるQRコード読み込み
Route::get('/qrcode_form', [QrcodeController::class, 'qr_form'])->name('qr_video');
//ファイルアップロードによるQRコード読み込み
Route::get('/qrcode_file', [QrcodeController::class, 'qr_file'])->name('qr_file');
Route::post('/qr_result/submit', [QrcodeController::class, 'qr_result'])->name('qr.store');

// メール
Route::get('/mail/send', [MailController::class, 'send'])->name('mail.send');
// アップロード画像の表示
Route::get('/up_file', [UploadController::class, 'index'])->name('up_file');

//*****---------------
// PDF
//******--------------
Route::get('/pdf/entry', [PdfController::class, 'entry'])->name('pdf.entry');
Route::get('/pdf/entry/thanks', [PdfController::class, 'thanks'])->name('pdf.thanks');
Route::post('/pdf/entry/thanks', [PdfController::class, 'post'])->name('pdf.post');
Route::get('/pdf/entry/thanks/download', [PdfController::class, 'downloadPdf'])->name('pdf.download');

//*****---------------
// LiveWire - TypingGame
//******--------------
Route::get('/livewire/typing', function () {
    return view('TypingGame.index');
});

// ベーシック認証
Route::group(['middleware' => 'basicauth'], function() {
    Route::get('/sample/form', [FormController::class, 'index'])->name('form.index');
    Route::get('/sample', [FormController::class, 'sample'])->name('sample.index');  
});

// Reactのサンプルコード
Route::get('/react', function () {
    return view('react_study');
 });
