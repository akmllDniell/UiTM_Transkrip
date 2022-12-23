<?php

use App\Http\Controllers\Beranda;
use App\Http\Controllers\Kasir;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProcessController;
use App\Http\Middleware\CekUserLogin;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/jawatan', [App\Http\Controllers\TblProfilJawatanController::class, 'index']);


Route::resource('jawatan', App\Http\Controllers\TblProfilJawatanController::class);



Route::get('/', [LayoutController::class, 'index'])->middleware('auth');
Route::get('/home', [LayoutController::class, 'index'])->middleware('auth');

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login/loginproses', 'loginproses');
    Route::get('logout', 'logout');
    Route::get('login/login2', 'login2')->name('login2');
    Route::get('student/main', 'studentpage');
});

// Route::group(['middleware' => [ 'auth' ]],function(){
//     Route::group(['middleware'=>['cekUserLogin:1']],function(){
//         Route::resource('beranda',Beranda::class);
//         });

//         Route::group(['middleware'=>['cek:2']],function(){
//             Route::resource('kasir',Kasir::class);
//             });
//     });




// general jangan usik

Route::controller(ProcessController::class)->group(function () {
    Route::post('Simpan', 'save')->middleware('auth');
    // Route::get('{NamaAktiviti}','buka');
    Route::get('TahapPencapaian', 'PageTahapPencapaian')->middleware('auth');
    Route::post('SimpanTahapPencapaian', 'saveTP');
    Route::get('Markah', 'PageMarkah')->middleware('auth');
    Route::post('SimpanMarkah', 'SimpanMarkah');
    Route::get('editTPMsukan/{sukanid}', 'bukapageTPMsukan');
    //Route::get('jawatan','PageJawatan')->middleware('auth');
    route::post('SimpanJawatan', 'simpanjawatan');

    //arif cuba



});

//BAHAGIAN DANIEL SUKAN
Route::controller(ProcessController::class)->group(function () {
    Route::get('sukan', 'PageSukan')->middleware('auth');
    Route::post('SimpanSukan', 'SimpanTPdanMarkahSukan');
    Route::post('SimpanJenisSukan', 'SimpanJSukan');
});
//habis BAHAGIAN DANIEL SUKAN

//BAHAGIAN DANIEL PERSATUAN/KELAB
Route::controller(ProcessController::class)->group(function () {
    Route::get('persatuan', 'Pagepersatuan')->middleware('auth');
    Route::post('Simpanjawatan', 'simpanTPMarkahjawatan');
    Route::post('SimpanJenisPersatuan', 'SimpanJenisPersatuan');
});
//HABIS BAHAGIAN DANIEL PERSATUAN/KELAB


//ARIF
Route::controller(ProcessController::class)->group(function () {
    Route::get('penerbitan', 'Pagepenerbitan')->middleware('auth');
    Route::post('SimpanjawatanPenerbitan', 'simpanTPMarkahjawatanPenerbitan');
    Route::post('SimpanJenisPenerbitan', 'SimpanJenisPernebitan');
});


//FARED
Route::controller(ProcessController::class)->group(function () {
    Route::get('anugerah', 'Pageanugerah')->middleware('auth');
    Route::post('Simpananugerah', 'simpanTPdanMarkahAnugerah');
    Route::post('SimpanJenisAnugerah', 'SimpanJenisAnugerah');
});



//DANIEL PROGRAM TERTENTU
Route::controller(ProcessController::class)->group(function () {
    Route::get('programtertentu', 'Pageprogramtertentu')->middleware('auth');
    Route::post('Simpanjenisprogram', 'Simpanjenisprogram');
    Route::post('SimpanProgram', 'SimpanTPNMprogram');
});
//END DANIEL PROGRAM TERTENTU


//ismi kebudayaan
Route::controller(ProcessController::class)->group(function () {
    Route::get('kebudayaan', 'PageKebudayaan')->middleware('auth');
    Route::post('SimpanKebudayaan', 'SimpanTPdanMarkahKebudayaan');
    Route::post('SimpanJenisKebudayaan', 'SimpanJKebudayaan');
});

//Daniel pbsmm
Route::controller(ProcessController::class)->group(function () {
    Route::get('pbsmm', 'Pagepbsmm')->middleware('auth');
    Route::post('SimpanJawatanPBSMM', 'SimpanJawatanPBSMM');
    Route::post('SimpanPBSMM', 'SimpanJawatandanMarkahPBSMM');
});


//DANIEL PALAPES
Route::controller(ProcessController::class)->group(function () {
    Route::get('palapes', 'PagePalapes')->middleware('auth');
    Route::post('SimpanJawatanpalapes', 'SimpanJawatanpalapes');
    Route::post('Simpanpalapes', 'SimpanJawatandanMarkahPalapes');
});


// DANIEL PERTAHANAN AWAM
Route::controller(ProcessController::class)->group(function () {
    Route::get('APM', 'PageAPM')->middleware('auth');
    Route::post('SimpanJawatanAPM', 'SimpanJawatanAPM');
    Route::post('SimpanAPM', 'SimpanJawatandanMarkahAPM');
});

//arif
Route::controller(ProcessController::class)->group(function () {
    Route::get('khas', 'PageKhas')->middleware('auth');
    Route::post('SimpanKhas', 'SimpanTPdanMarkahKhas');
    Route::post('SimpanJenisKhas', 'SimpanJKhas');
});

Route::controller(ProcessController::class)->group(function () {
    Route::get('suksis', 'Pagesuksis')->middleware('auth');
    Route::post('SimpanJawatansuksis', 'SimpanJawatansuksis');
    Route::post('SimpanJawatandanMarkahsuksis', 'SimpanJawatandanMarkahsuksis');
});

//arif

Route::controller(ProcessController::class)->group(function () {
    Route::get('Tahaphep', 'PageTahaphep')->middleware('auth');
    Route::post('SimpanTahaphepnama', 'SimpanTahaphepnama');
    Route::post('SimpanThdanmarkah', 'SimpanThdanmarkah');
});
