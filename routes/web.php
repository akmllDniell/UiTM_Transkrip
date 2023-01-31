<?php

use App\Http\Controllers\Beranda;
use App\Http\Controllers\Kasir;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\SenaraiPelajarController;
use App\Http\Controllers\SignupController;
use App\Http\Middleware\CekUserLogin;
use App\Http\Controllers\TblJawatanUniformController;
use App\Http\Controllers\TblProfilBadanBeruniformController;
use App\Http\Controllers\TblStudentController;
use App\Http\Controllers\TblSukanController;
use App\Http\Controllers\TblSukanDtController;
use App\Http\Controllers\TblUniformController;
use App\Models\TblProfilBadanBeruniform;
use App\Models\TblStudent;
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

//LOGIN PROCESS


Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login/loginproses', 'loginproses');
    Route::get('logout', 'logout');
    Route::get('login/login2', 'login2')->name('login2');
    Route::get('student/main', 'studentpage');    
});
//END LOGIN PROCESS
Route::controller(SignupController::class)->group(function () {
    Route::get('/signup', 'signup');
    Route::post('/session','session');

});




Route::group(['middleware'=> ['auth','CheckUser:admin']],function(){
//PARAMETERS
Route::get('/', [LayoutController::class, 'index']);
Route::get('/home', [LayoutController::class, 'index'])->name('home');
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
//End badan beruniform
// Jawatan Badan Beruniform
Route::get('/jawatanuniform', [App\Http\Controllers\TblProfilJawatanUniformController::class, 'index']);
Route::resource('jawatanuniform', App\Http\Controllers\TblProfilJawatanUniformController::class);
// End Badan Beruniform
//END PARAMETERS







//jawatan uniform
Route::get('/uniform',[\App\Http\Controllers\TblUniformController::class,'index']);
Route::get('/uniform/add/{iduni}',[\App\Http\Controllers\TblUniformController::class,'create']);
Route::get('/uniform/show/{iduni}', [App\Http\Controllers\TblUniformController::class,'showiduni']);
Route::resource('uniform', App\Http\Controllers\TblUniformController::class);

//sukan
Route::get('/sukan',[\App\Http\Controllers\TblSukanDtController::class,'index']);
Route::resource('sukan', App\Http\Controllers\TblSukanDtController::class);
Route::get('/jenissukan',[\App\Http\Controllers\TblSukanController::class,'index']);
Route::resource('jenissukan', App\Http\Controllers\TblSukanController::class);

//sijil
Route::get('/sijil',[\App\Http\Controllers\TblSijilDtController::class,'index']);
Route::resource('sijil', App\Http\Controllers\TblSijilDtController::class);
Route::get('/jenissijil', [App\Http\Controllers\TblSijilController::class, 'index']);
Route::resource('jenissijil', App\Http\Controllers\TblSijilController::class);

//kebudayaan
Route::get('/kebudayaan',[\App\Http\Controllers\TblKebudayaanDtController::class,'index']);
Route::resource('kebudayaan', App\Http\Controllers\TblKebudayaanDtController::class);
Route::get('/jeniskebudayaan',[\App\Http\Controllers\TblKebudayaanController::class,'index']);
Route::resource('jeniskebudayaan', App\Http\Controllers\TblKebudayaanController::class);

//Program PADU
Route::get('/padu',[\App\Http\Controllers\TblPaduDtController::class,'index']);
Route::resource('padu', App\Http\Controllers\TblPaduDtController::class);
Route::get('/jenispadu',[\App\Http\Controllers\TblPaduController::class,'index']);
Route::resource('jenispadu', App\Http\Controllers\TblPaduController::class);

//Program Tertentu
Route::get('/programtertentu',[\App\Http\Controllers\TblProgramTertentuDtController::class,'index']);
Route::resource('programtertentu', App\Http\Controllers\TblProgramTertentuDtController::class);
Route::get('/jenisprogramtertentu',[\App\Http\Controllers\TblProgramTertentuController::class,'index']);
Route::resource('jenisprogramtertentu', App\Http\Controllers\TblProgramTertentuController::class);

//kelab
Route::get('/kelab',[\App\Http\Controllers\TblKelabDtController::class,'index']);
Route::resource('kelab', App\Http\Controllers\TblKelabDtController::class);
Route::get('/jeniskelab', [App\Http\Controllers\TblKelabController::class, 'index']);
Route::resource('jeniskelab', App\Http\Controllers\TblKelabController::class);

//penerbitan
Route::get('/penerbitan',[\App\Http\Controllers\TblPenerbitanDtController::class,'index']);
Route::resource('penerbitan', App\Http\Controllers\TblPenerbitanDtController::class);
Route::get('/jenispenerbitan', [App\Http\Controllers\TblPenerbitanController::class, 'index']);
Route::resource('jenispenerbitan', App\Http\Controllers\TblPenerbitanController::class);
});
//try and error (mostly error)
// Route::get
// (
//     '/try', 
//     function () 
//     {
//         return view('student.try.try');
//     }
// );
Route::get('/try', [App\Http\Controllers\TblTrysController::class, 'index']);
Route::resource('try', App\Http\Controllers\TblTrysController::class);

// Route::get('/finduniform', function () 
//     {
//         return view('student.try.try');
//     }
// );

Route::get('/student',[\App\Http\Controllers\TblStudentController::class,'index'])->name('student');

//SENARAI PELAJAR admin

Route::get('/senaraipelajar',[\App\Http\Controllers\SenaraiPelajarController::class,'index']);
Route::get('/show/{id}',[\App\Http\Controllers\SenaraiPelajarController::class,'show'])->name('showstudent');
//SENARAI PELAJAR

Route::get('/transkrip',[\App\Http\Controllers\TblStudentController::class,'transkrip']);
Route::get('/studentform',[\App\Http\Controllers\TblStudentController::class,'multiform']);
Route::resource('simpan',App\Http\Controllers\TblStudentController::class);
Route::get('/minitranskrip',[\App\Http\Controllers\TblStudentController::class,'output'])->name('output');
Route::get('/profil',[\App\Http\Controllers\TblStudentController::class,'profilstudent']);
Route::get('/editprofil',[\App\Http\Controllers\TblStudentController::class,'editprofil']);
Route::patch('/updatestudent',[\App\Http\Controllers\TblStudentController::class,'updateprofil']);
Route::get('/semakan',[\App\Http\Controllers\TblStudentController::class,'semakantranskrip']);

