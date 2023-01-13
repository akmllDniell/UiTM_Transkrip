<?php

use App\Http\Controllers\Beranda;
use App\Http\Controllers\Kasir;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProcessController;

use App\Http\Middleware\CekUserLogin;
use App\Http\Controllers\TblJawatanUniformController;
use App\Http\Controllers\TblProfilBadanBeruniformController;
use App\Http\Controllers\TblSukanController;
use App\Http\Controllers\TblSukanDtController;
use App\Models\TblProfilBadanBeruniform;
use App\Models\TblSukan;
use App\Models\TblSukanDt;
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

// Jawatan
Route::get('/jawatan', [App\Http\Controllers\TblProfilJawatanController::class, 'index']);
Route::resource('jawatan', App\Http\Controllers\TblProfilJawatanController::class);
// End Jawatan


// Tahap Pencapaian
Route::get('/tahappencapaian', [App\Http\Controllers\TblProfilTahapPencapaianController::class, 'index']);
Route::resource('tahappencapaian', App\Http\Controllers\TblProfilTahapPencapaianController::class);
// End tahap pencapaian


// Tahap hep
Route::get('/tahaphep', [App\Http\Controllers\TblProfilTahapHepController::class, 'index']);
Route::resource('tahaphep', App\Http\Controllers\TblProfilTahapHepController::class);
// End tahap hep


//markah
Route::get('/markah', [App\Http\Controllers\TblProfilMarkahController::class, 'index']);
Route::resource('markah', App\Http\Controllers\TblProfilMarkahController::class);
// End markah


//badan beruniform
Route::get('/badanuniform',[\App\Http\Controllers\TblProfilBadanBeruniformController::class, 'index']);
Route::resource('badanuniform', App\Http\Controllers\TblProfilBadanBeruniformController::class);
//Route::resource('badanuniform',[\App\Http\Controllers\TblProfilBadanBeruniformController::class]);
//End badan beruniform






//jawatan uniform
Route::get('/uniform',[\App\Http\Controllers\TblJawatanUniformController::class,'index']);







//sukan
Route::get('/sukan',[\App\Http\Controllers\TblSukanDtController::class,'index']);
Route::resource('sukan', App\Http\Controllers\TblSukanDtController::class);
Route::get('/jenissukan',[\App\Http\Controllers\TblSukanController::class,'index']);
Route::resource('jenissukan', App\Http\Controllers\TblSukanController::class);
// Route::post('jenissukan',[\App\Http\Controllers\TblSukanController::class, 'storejenissukan'])->name('simpanjenissukan');
// Route::get('editejenissukan/{id}',[\App\Http\Controllers\TblSukanController::class,'editjenissukan'])->name('editjsukan');
// Route::patch('updatejenissukan/{id}',[\App\Http\Controllers\TblSukanController::class,'updatejenissukan'])->name('updatejenissukan');
// Route::delete('destroyjenissukan/{id}',[\App\Http\Controllers\TblSukanController::class,'destroyjenissukan'])->name('destroyjenissukan');
//end sukan

//sijil
Route::get('/sijil',[\App\Http\Controllers\TblSijilDtController::class,'index']);
Route::resource('sijil', App\Http\Controllers\TblSijilDtController::class);
//Jenis sijil
    Route::get('/jenissijil', [App\Http\Controllers\TblSijilController::class, 'index']);
    Route::resource('jenissijil', App\Http\Controllers\TblSijilController::class);
//Jenis sijil
//end sijil

//kebudayaan
Route::get('/kebudayaan',[\App\Http\Controllers\TblKebudayaanDtController::class,'index']);
Route::resource('kebudayaan', App\Http\Controllers\TblKebudayaanDtController::class);
Route::get('/jeniskebudayaan',[\App\Http\Controllers\TblKebudayaanController::class,'index']);
Route::resource('jeniskebudayaan', App\Http\Controllers\TblKebudayaanController::class);
// Route::post('jeniskebudayaan',[\App\Http\Controllers\TblKebudayaanController::class, 'storejeniskebudayaan'])->name('simpanjeniskebudayaan');
// Route::get('editejeniskebudayaan/{id}',[\App\Http\Controllers\TblKebudayaanController::class,'editjeniskebudayaan'])->name('editjkebudayaan');
// Route::patch('updatejeniskebudayaan/{id}',[\App\Http\Controllers\TblKebudayaanController::class,'updatejenisKebudayaan'])->name('updatejeniskebudayaan');
// Route::delete('destroyjeniskebudayaan/{id}',[\App\Http\Controllers\TblKebudayaanController::class,'destroyjeniskebudayaan'])->name('destroyjeniskebudayaan');
//end kebudayaan



//Program PADU
Route::get('/padu',[\App\Http\Controllers\TblPaduDtController::class,'index']);
Route::resource('padu', App\Http\Controllers\TblPaduDtController::class);
Route::get('/jenispadu',[\App\Http\Controllers\TblPaduController::class,'index']);
Route::resource('jenispadu', App\Http\Controllers\TblPaduController::class);
//end program PADU

//Program Tertentu
Route::get('/programtertentu',[\App\Http\Controllers\TblProgramTertentuDtController::class,'index']);
Route::resource('programtertentu', App\Http\Controllers\TblProgramTertentuDtController::class);
Route::get('/jenisprogramtertentu',[\App\Http\Controllers\TblProgramTertentuController::class,'index']);
Route::resource('jenisprogramtertentu', App\Http\Controllers\TblProgramTertentuController::class);
//end program tertentu











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
    // Route::get('TahapPencapaian', 'PageTahapPencapaian')->middleware('auth');
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
    Route::get('sukan2', 'PageSukan')->middleware('auth');
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
// Route::controller(ProcessController::class)->group(function () {
//     Route::get('penerbitan', 'Pagepenerbitan')->middleware('auth');
//     Route::post('SimpanjawatanPenerbitan', 'simpanTPMarkahjawatanPenerbitan');
//     Route::post('SimpanJenisPenerbitan', 'SimpanJenisPernebitan');
// });


//penerbitan
Route::get('/penerbitan',[\App\Http\Controllers\TblPenerbitanDtController::class,'index']);
Route::resource('penerbitan', App\Http\Controllers\TblPenerbitanDtController::class);
//Jenis penerbitan
    Route::get('/jenispenerbitan', [App\Http\Controllers\TblPenerbitanController::class, 'index']);
    Route::resource('jenispenerbitan', App\Http\Controllers\TblPenerbitanController::class);
//Jenis penerbitan
//end penerbitan




//FARED
// Route::controller(ProcessController::class)->group(function () {
//     Route::get('anugerah', 'Pageanugerah')->middleware('auth');
//     Route::post('Simpananugerah', 'simpanTPdanMarkahAnugerah');
//     Route::post('SimpanJenisAnugerah', 'SimpanJenisAnugerah');
// });



//DANIEL PROGRAM TERTENTU
//Route::controller(ProcessController::class)->group(function () {
//    Route::get('programtertentu', 'Pageprogramtertentu')->middleware('auth');
//    Route::post('Simpanjenisprogram', 'Simpanjenisprogram');
//    Route::post('SimpanProgram', 'SimpanTPNMprogram');
//});
//END DANIEL PROGRAM TERTENTU


//ismi kebudayaan
//Route::controller(ProcessController::class)->group(function () {
 //   Route::get('kebudayaan', 'PageKebudayaan')->middleware('auth');
  //  Route::post('SimpanKebudayaan', 'SimpanTPdanMarkahKebudayaan');
 //   Route::post('SimpanJenisKebudayaan', 'SimpanJKebudayaan');
//});

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
//Route::controller(ProcessController::class)->group(function () {
//    Route::get('khas', 'PageKhas')->middleware('auth');
//    Route::post('SimpanKhas', 'SimpanTPdanMarkahKhas');
//    Route::post('SimpanJenisKhas', 'SimpanJKhas');
//});

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
