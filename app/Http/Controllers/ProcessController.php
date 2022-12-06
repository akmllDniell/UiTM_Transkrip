<?php

namespace App\Http\Controllers;

use App\Models\ModelAktiviti;
use App\Models\ModelJenisSukan;
use App\Models\ModelMarkah;
use App\Models\ModelTP;
use App\Models\ModelTPdanMarkahSukan;
use Facade\FlareClient\View;
use App\Models\ModelJawatan;
use App\Models\Modeljawatansuksis;
use App\Models\ModelJenisAnugerah;
use App\Models\ModelJenisKhas;
use App\Models\ModelJenisPersatuan;
use App\Models\ModelJenisProgram;
use App\Models\ModelJKebudayaan;
use App\Models\ModelJPenerbitan;
use App\Models\ModelJwtDMPalapes;
use App\Models\ModelJwtDMPBSMM;
use App\Models\ModeljwtPalapes;
use App\Models\ModelJwtPBSMM;
use App\Models\ModelKebudayaan;
use App\Models\Modeltahaphepnama;
use App\Models\ModelThdanmarkahkhas;
use App\Models\ModelTPdanMarkahAnugerah;
use App\Models\ModelTPdanMPenerbitan;
use App\Models\ModelTPMarkahPersatuan;
use App\Models\ModelTPNMprogram;
use App\Models\SimpanJawatandanMarkahsuksis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\CssSelector\Node\FunctionNode;

class ProcessController extends Controller
{
    public function save(Request $req){
        $AktivitiCode = $req->AktivitiCode;
        $NamaAktiviti = $req->NamaAktiviti;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'AktivitiCode'=> 'required',
             'NamaAktiviti'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',
             'AktivitiCode.required' => 'Sila masukkan Code Aktiviti',
             'NamaAktiviti.required' => 'Sila masukkan Nama AKtiviti',         
             // 'checkbox2'
         ]);
    
     $newAktiviti = new ModelAktiviti();        
     $newAktiviti->AktivitiCode = $AktivitiCode;
     $newAktiviti->NamaAktiviti = $NamaAktiviti; 
     $newAktiviti->save();
    
     //echo "Data Saved";        
     $req->session()->flash('msg', "data succesfully saved [student Name: $NamaAktiviti $AktivitiCode]1");
     return redirect('/');
    
     
    }
    
    
    // public function buka($NamaAktiviti){
    //     $aktiviti = ModelAktiviti::find($NamaAktiviti);
    //     $data = [
    //         'NamaAktiviti' => $NamaAktiviti        
    //     ];
    //     return View("layout.sukan", $data);
    
    // }
    
    
    public function PageSukan(){
    
        
            // $user = Auth::user();
            $data = DB::table('sukan')   
            ->join('tahap', 'sukan.tahapid', '=', 'tahap.tahapid') 
            ->join('markah', 'sukan.markahid', '=', 'markah.markahid') 
             ->select('sukan.*','tahap.*','markah.*')
    
             //->where('course.Cname','=','STA')  where statement
             ->get();
    
             $jenissukan = DB::table('jenissukan')        
             ->select('*')
    
             //->where('course.Cname','=','STA')  where statement
             ->get();
    
             $tahappencapaian = DB::table('tahap')        
             ->select('*')
             ->get();
    
             $markah = DB::table('markah')        
             ->select('*')
    
             //->where('course.Cname','=','STA')  where statement
             ->get();
    
             
            return view('layout.sukan')
            ->with(compact('data'))
            ->with(compact('jenissukan'))
            ->with(compact('tahappencapaian'))
            ->with(compact('markah'));
    
    }
    
    public function PageTahapPencapaian(){
    
        $data = DB::table('tahap')
        ->select('*')
        ->get();
        return View('layout.TahapPencapaian',compact('data'));
    }
    
    public function saveTP(Request $req){
        $TahapPencapaianCode = $req->tahapid;
        $NamaTahap = $req->namatahap;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'namatahap'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'namatahap.required' => 'Sila masukkan Nama Tahap',         
             // 'checkbox2'
         ]);
    
     $newTp = new ModelTP();        
     $newTp->tahapid = $TahapPencapaianCode;
     $newTp->namatahap = $NamaTahap; 
     $newTp->save();
    
     return redirect('/TahapPencapaian');
    
     //echo "Data Saved";        
     
    }
    
    public function SimpanJSukan(Request $req)
    {
        $JenisSukan = $req->jenissukan;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'jenissukan'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'jenissukan.required' => 'Sila masukkan Nama Sukan',         
             // 'checkbox2'
         ]);
    
     $newJS = new ModelJenisSukan();        
     $newJS->jenissukan = $JenisSukan;
     $newJS->save();
    
     return redirect('/sukan');
    }
    
    public function PageMarkah(){
    
        $data = DB::table('markah')
        ->select('*')
        ->get();
        return View('layout.Markah',compact('data'));
    }
    
    
    public function SimpanMarkah(Request $req)
    {
        $Markah = $req->markah;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'markah'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'markah.required' => 'Sila masukkan Nama Sukan',         
             // 'checkbox2'
         ]);
    
     $newM = new ModelMarkah();        
     $newM->markah = $Markah;
     $newM->save();
    
     return redirect('/Markah');
    }
    
    public function SimpanTPdanMarkahSukan(Request $req)
    {
        $TP = $req->TPsukan;
        $Mark = $req->MarkahSukan;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'TPsukan'=> 'required',   
             'MarkahSukan'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'TPsukan.required' => 'Sila masukkan Nama Sukan',  
             'MarkahSukan.required' => 'Sila masukkan Nama Sukan',        
             // 'checkbox2'
         ]);
    
     $newM = new ModelTPdanMarkahSukan();        
     $newM->tahapid = $TP;
     $newM->markahid = $Mark;
     $newM->save();
    
     return redirect('/sukan');
    }

    public Function bukapageTPMsukan($sukanid)
    {
        $editTPMsukan = ModelTPdanMarkahSukan::find($sukanid);

        $dataTPMsukan =
        [            
            'busname'=>$editTPMsukan->tahapid,
            'busamount'=>$editTPMsukan->markahid

        ];

                    // $user = Auth::user();
                    $data = DB::table('sukan')   
                    ->join('tahap', 'sukan.tahapid', '=', 'tahap.tahapid') 
                    ->join('markah', 'sukan.markahid', '=', 'markah.markahid') 
                     ->select('sukan.*','tahap.*','markah.*')
            
                     //->where('course.Cname','=','STA')  where statement
                     ->get();

            
                     
                    return view('layout.editTPMsukan')
                    ->with(compact('dataTPMsukan'))
                    ->with(compact('data'));


        // return View('layout.editTPMsukan',$dataTPMsukan);
 
    }

    public function PageJawatan(){
    
        $data = DB::table('jawatan')
        ->select('*')
        ->get();
        return View('layout.jawatan',compact('data'));
    }

    public function Pagepersatuan(){

         // $user = Auth::user();
         $data = DB::table('persatuan')   
         ->join('tahap', 'persatuan.tahapid', '=', 'tahap.tahapid') 
         ->join('markah', 'persatuan.markahid', '=', 'markah.markahid') 
         ->join('jawatan', 'persatuan.jawatanid', '=', 'jawatan.jawatanid') 
          ->select('persatuan.*','tahap.*','markah.*','jawatan.*')

          
 
          //->where('course.Cname','=','STA')  where statement
          ->get();

          $datacolumn1 = DB::table('persatuan')   
          ->join('tahap', 'persatuan.tahapid', '=', 'tahap.tahapid') 
          ->join('markah', 'persatuan.markahid', '=', 'markah.markahid') 
          ->join('jawatan', 'persatuan.jawatanid', '=', 'jawatan.jawatanid')
          ->where ('persatuan.tahapid', '=', '1')
           ->select('persatuan.*','tahap.*','markah.*','jawatan.*')

           ->get();

           
 
          $jenispersatuan = DB::table('jenispersatuan')        
          ->select('*')
 
          //->where('course.Cname','=','STA')  where statement
          ->get();
 
          $tahappencapaian = DB::table('tahap')        
          ->select('*')
          ->get();
 
          $markah = DB::table('markah')        
          ->select('*')
 
          //->where('course.Cname','=','STA')  where statement
          ->get();

          $jawatan = DB::table('jawatan')        
          ->select('*')
          ->get();


 
          
         return view('layout.persatuan')
         ->with(compact('data'))
         ->with(compact('jenispersatuan'))
         ->with(compact('tahappencapaian'))
         ->with(compact('jawatan'))
         ->with(compact('markah'))
         ->with(compact('datacolumn1'));

    }

    public function simpanjawatan(Request $req)
    {
        
        $jwt = $req->jawatan;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'jawatan'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',          
             'jawatan.required' => 'Sila masukkan Nama Jawatamn',        
             // 'checkbox2'
         ]);
    
     $newM = new ModelJawatan();        
     $newM->jawatan = $jwt;
     $newM->save();

     return redirect('/jawatan');
    }


    public function simpanTPMarkahjawatan(Request $req){

        $TP = $req->TPpersatuan;
        $Mark = $req->MarkahPersatuan;
       $Jwt = $req->jawatanPersatuan;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'TPpersatuan'=> 'required',   
             'MarkahPersatuan'=> 'required',  
             'jawatanPersatuan'=> 'required',                      
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'TPpersatuan.required' => 'Sila masukkan Nama Sukan',  
             'MarkahPersatuan.required' => 'Sila masukkan Nama Sukan',     
             'jawatanPersatuan.required' => 'Sila masukkan Nama Sukan',     
             // 'checkbox2'
         ]);
    
     $newTPjwt = new ModelTPMarkahPersatuan();        
     $newTPjwt->tahapid = $TP;
     $newTPjwt->markahid = $Mark;
     $newTPjwt->jawatanid = $Jwt;
     $newTPjwt->save();
    
     return redirect('/persatuan');
    }


    public function SimpanJenisPersatuan(Request $req)
    {
        $pst = $req->persatuan;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'persatuan'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',          
             'persatuan.required' => 'Sila masukkan Nama Jawatamn',        
             // 'checkbox2'
         ]);
    
     $newP = new ModelJenisPersatuan();
     $newP->namapersatuan = $pst;
     $newP->save();

     return redirect('/persatuan');
    }


    public function Pagepenerbitan()
    {

         // $user = Auth::user();
         $data = DB::table('penerbitan')   
         ->join('tahap', 'penerbitan.tahapid', '=', 'tahap.tahapid') 
         ->join('markah', 'penerbitan.markahid', '=', 'markah.markahid') 
         ->join('jawatan', 'penerbitan.jawatanid', '=', 'jawatan.jawatanid') 
          ->select('penerbitan.*','tahap.*','markah.*','jawatan.*')

          
 
          //->where('course.Cname','=','STA')  where statement
          ->get();

          $datacolumn1 = DB::table('penerbitan')   
          ->join('tahap', 'penerbitan.tahapid', '=', 'tahap.tahapid') 
          ->join('markah', 'penerbitan.markahid', '=', 'markah.markahid') 
          ->join('jawatan', 'penerbitan.jawatanid', '=', 'jawatan.jawatanid') 
          ->where ('penerbitan.tahapid', '=', '1')
           ->select('penerbitan.*','tahap.*','markah.*','jawatan.*')

           ->get();

           
 
          $jenispenerbitan = DB::table('jenispenerbitan')        
          ->select('*')
 
          //->where('course.Cname','=','STA')  where statement
          ->get();
 
          $tahappencapaian = DB::table('tahap')        
          ->select('*')
          ->get();
 
          $markah = DB::table('markah')        
          ->select('*')
 
          //->where('course.Cname','=','STA')  where statement
          ->get();

          $jawatan = DB::table('jawatan')        
          ->select('*')
          ->get();


 
          
         return view('layout.penerbitan')
         ->with(compact('data'))
         ->with(compact('jenispenerbitan'))
         ->with(compact('tahappencapaian'))
         ->with(compact('jawatan'))
         ->with(compact('markah'))
         ->with(compact('datacolumn1'));

    
    }

    
    public function SimpanJenisPernebitan(Request $req)
    {
        $pst = $req->jenispenerbitan;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'jenispenerbitan'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',          
             'jenispenerbitan.required' => 'Sila masukkan Nama Jawatamn',        
             // 'checkbox2'
         ]);
    
     $newP = new ModelJPenerbitan();
     $newP->jenispenerbitan = $pst;
     $newP->save();

     return redirect('/penerbitan');
    }

    public function simpanTPMarkahjawatanPenerbitan(Request $req){

        $TP = $req->TPpenerbitan;
        $Mark = $req->MarkahPenerbitan;
       $Jwt = $req->jawatanPenerbitan;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'TPpenerbitan'=> 'required',   
             'MarkahPenerbitan'=> 'required',  
             'jawatanPenerbitan'=> 'required',                      
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'TPpenerbitan.required' => 'Sila masukkan Nama Sukan',  
             'MarkahPenerbitan.required' => 'Sila masukkan Nama Sukan',     
             'jawatanPenerbitan.required' => 'Sila masukkan Nama Sukan',     
             // 'checkbox2'
         ]);
    
     $newTPjwt = new ModelTPdanMPenerbitan();        
     $newTPjwt->tahapid = $TP;
     $newTPjwt->markahid = $Mark;
     $newTPjwt->jawatanid = $Jwt;
     $newTPjwt->save();
    
     return redirect('/penerbitan');
    }



    public function Pageprogramtertentu()
    {
        $data = DB::table('program')
        ->join('markah', 'program.markahid','=','markah.markahid')
        ->join('tahap', 'program.tahapid','=','tahap.tahapid')
        ->select('program.*','tahap.*','markah.*')
    
        //->where('course.Cname','=','STA')  where statement
        ->get();

        $jenisprogram = DB::table('jenisprogram')        
        ->select('*')

        //->where('course.Cname','=','STA')  where statement
        ->get();

        $tahappencapaian = DB::table('tahap')        
        ->select('*')
        ->get();

        $markah = DB::table('markah')        
        ->select('*')

        //->where('course.Cname','=','STA')  where statement
        ->get();

        
       return view('layout.program')
       ->with(compact('data'))
       ->with(compact('jenisprogram'))
       ->with(compact('tahappencapaian'))
       ->with(compact('markah'));

}


     public function Simpanjenisprogram(Request $req){

    $JenisProgram = $req->jenisprogram;
       
    $validateData = $req->validate([
        // 'id'=> 'required|unique:table, column, except,id'
         'jenisprogram'=> 'required',                       

     ],
     
     [
         // 'id.unique' => 'Number student sudah ada didalam sistem',
         // 'id.required' => 'Number Student harus diletakkan',         
         'jenisprogram.required' => 'Sila masukkan Nama program',         
         // 'checkbox2'
     ]);

     $newJP = new ModelJenisProgram();        
     $newJP->jenisprogram = $JenisProgram;
     $newJP->save();

     return redirect('/programtertentu');

     } 


     public function SimpanTPNMprogram(Request $req){
        $TP = $req->TPprogram;
        $Mark = $req->MarkahProgram;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'TPprogram'=> 'required',   
             'MarkahProgram'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'TPprogram.required' => 'Sila masukkan Nama Sukan',  
             'MarkahProgram.required' => 'Sila masukkan Nama Sukan',        
             // 'checkbox2'
         ]);
    
     $newM = new ModelTPNMprogram();       
     $newM->tahapid = $TP;
     $newM->markahid = $Mark;
     $newM->save();
    
     return redirect('/programtertentu');
     }

     public function PageKebudayaan(){
         
        
        // $user = Auth::user();
        $data = DB::table('kebudayaan')   
        ->join('tahap', 'kebudayaan.tahapid', '=', 'tahap.tahapid') 
        ->join('markah', 'kebudayaan.markahid', '=', 'markah.markahid') 
         ->select('kebudayaan.*','tahap.*','markah.*')
    
         //->where('course.Cname','=','STA')  where statement
         ->get();
    
         $jeniskebudayaan = DB::table('jeniskebudayaan')        
         ->select('*')
    
         //->where('course.Cname','=','STA')  where statement
         ->get();
    
         $tahappencapaian = DB::table('tahap')        
         ->select('*')
         ->get();
    
         $markah = DB::table('markah')        
         ->select('*')
    
         //->where('course.Cname','=','STA')  where statement
         ->get();
    
         
        return view('layout.kebudayaan')
        ->with(compact('data'))
        ->with(compact('jeniskebudayaan'))
        ->with(compact('tahappencapaian'))
        ->with(compact('markah'));
    
    }

    public function SimpanJKebudayaan(Request $req)
    {
        $jeniskebudayaan = $req->jeniskebudayaan;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'jeniskebudayaan'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'jeniskebudayaan.required' => 'Sila masukkan Nama Sukan',         
             // 'checkbox2'
         ]);
    
     $newJS = new ModelJKebudayaan();     
     $newJS->jeniskebudayaan = $jeniskebudayaan;
     $newJS->save();
    
     return redirect('/kebudayaan');
    }

    public function SimpanTPdanMarkahKebudayaan(Request $req)
    {
        $TP = $req->TPkebudayaan;
        $Mark = $req->MarkahKebudayaan;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'TPkebudayaan'=> 'required',   
             'MarkahKebudayaan'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'TPkebudayaan.required' => 'Sila masukkan Nama Sukan',  
             'MarkahKebudayaan.required' => 'Sila masukkan Nama Sukan',        
             // 'checkbox2'
         ]);
    
     $newM = new ModelKebudayaan();  
     $newM->tahapid = $TP;
     $newM->markahid = $Mark;
     $newM->save();
    
     return redirect('/kebudayaan');
    }


    public function Pagepbsmm()
    {
            
        
        // $user = Auth::user();
        $data = DB::table('pbsmm')   
        ->join('jawatanpbsmm', 'pbsmm.jawatanpbsmmid', '=', 'jawatanpbsmm.jawatanpbsmmid') 
        ->join('markah', 'pbsmm.markahid', '=', 'markah.markahid') 
         ->select('pbsmm.*','jawatanpbsmm.*','markah.*')
    
         //->where('course.Cname','=','STA')  where statement
         ->get();
    
         $jawatanpbsmm = DB::table('jawatanpbsmm')        
         ->select('*')
         ->get();
    
         $markah = DB::table('markah')        
         ->select('*')
    
         //->where('course.Cname','=','STA')  where statement
         ->get();
    
         
        return view('layout.pbsmm')
        ->with(compact('data'))
        ->with(compact('jawatanpbsmm'))
        ->with(compact('markah'));
    }


    public function SimpanJawatanPBSMM (Request $req)
    {
        $JenisJawatanPBSMM = $req->jenisjawatanpbsmm;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'jenisjawatanpbsmm'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'jenisjawatanpbsmm.required' => 'Sila masukkan Nama Sukan',         
             // 'checkbox2'
         ]);
    
     $newJS = new ModelJwtPBSMM();  
     $newJS->jawatanpbsmm = $JenisJawatanPBSMM;
     $newJS->save();
    
     return redirect('/pbsmm');

    }

    public function SimpanJawatandanMarkahPBSMM(Request $req)
    {
        $jwt = $req->jwtPBSMM;
        $Mark = $req->MarkahPBSMM;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'jwtPBSMM'=> 'required',   
             'MarkahPBSMM'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'jwtPBSMM.required' => 'Sila masukkan Nama Sukan',  
             'MarkahPBSMM.required' => 'Sila masukkan Nama Sukan',        
             // 'checkbox2'
         ]);
    
     $newM = new ModelJwtDMPBSMM();       
     $newM->jawatanpbsmmid = $jwt;
     $newM->markahid = $Mark;
     $newM->save();
    
     return redirect('/pbsmm');
    }


    public function PagePalapes()
    {
        $data = DB::table('palapes')   
        ->join('jawatanpalapes', 'palapes.jawatanpalapesid', '=', 'jawatanpalapes.jawatanpalapesid') 
        ->join('markah', 'palapes.markahid', '=', 'markah.markahid') 
         ->select('palapes.*','jawatanpalapes.*','markah.*')
    
         //->where('course.Cname','=','STA')  where statement
         ->get();
    
         $jawatanpalapes = DB::table('jawatanpalapes')        
         ->select('*')
         ->get();
    
         $markah = DB::table('markah')        
         ->select('*')
    
         //->where('course.Cname','=','STA')  where statement
         ->get();
    
         
        return view('layout.palapes')
        ->with(compact('data'))
        ->with(compact('jawatanpalapes'))
        ->with(compact('markah'));
    }

    public function SimpanJawatanPalapes (Request $req)
    {
        $JenisJawatanpalapes = $req->jenisjawatanpalapes;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'jenisjawatanpalapes'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'jenisjawatanpalapes.required' => 'Sila masukkan Nama Sukan',         
             // 'checkbox2'
         ]);
    
     $newJS = new ModeljwtPalapes();  
     $newJS->jawatanpalapes = $JenisJawatanpalapes;
     $newJS->save();
    
     return redirect('/palapes');

    }

    public function SimpanJawatandanMarkahPalapes(Request $req)
    {
        $jwt = $req->jwtpalapes;
        $Mark = $req->Markahpalapes;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'jwtpalapes'=> 'required',   
             'Markahpalapes'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'jwtpalapes.required' => 'Sila masukkan Nama Sukan',  
             'Markahpalapes.required' => 'Sila masukkan Nama Sukan',        
             // 'checkbox2'
         ]);
    
     $newM = new ModelJwtDMPalapes();      
     $newM->jawatanpalapesid = $jwt;
     $newM->markahid = $Mark;
     $newM->save();
    
     return redirect('/palapes');
    }

    public function Pageanugerah(){
    
        
        // $user = Auth::user();
        $data = DB::table('anugerah')   
        ->join('tahap', 'anugerah.tahapid', '=', 'tahap.tahapid') 
        ->join('markah', 'anugerah.markahid', '=', 'markah.markahid') 
         ->select('anugerah.*','tahap.*','markah.*')

         //->where('course.Cname','=','STA')  where statement
         ->get();

         $jenisanugerah = DB::table('jenisanugerah')        
         ->select('*')

         //->where('course.Cname','=','STA')  where statement
         ->get();

         $tahappencapaian = DB::table('tahap')        
         ->select('*')
         ->get();

         $markah = DB::table('markah')        
         ->select('*')

         //->where('course.Cname','=','STA')  where statement
         ->get();

         
        return view('layout.anugerah')
        ->with(compact('data'))
        ->with(compact('jenisanugerah'))
        ->with(compact('tahappencapaian'))
        ->with(compact('markah'));

}

public function SimpanJenisAnugerah(Request $req)
{
    $JenisAnugerah = $req->jenisanugerah;
   
    $validateData = $req->validate([
        // 'id'=> 'required|unique:table, column, except,id'
         'jenisanugerah'=> 'required',                       

     ],
     
     [
         // 'id.unique' => 'Number student sudah ada didalam sistem',
         // 'id.required' => 'Number Student harus diletakkan',         
         'jenisanugerah.required' => 'Sila masukkan Nama Anugerah',         
         // 'checkbox2'
     ]);

 $newJS = new ModelJenisAnugerah();   
 $newJS->jenisanugerah = $JenisAnugerah;
 $newJS->save();

 return redirect('/anugerah');
}


public function SimpanTPdanMarkahAnugerah(Request $req)
{
    $TP = $req->TPanugerah;
    $Mark = $req->MarkahAnugerah;
   
    $validateData = $req->validate([
        // 'id'=> 'required|unique:table, column, except,id'
         'TPanugerah'=> 'required',   
         'MarkahAnugerah'=> 'required',                       

     ],
     
     [
         // 'id.unique' => 'Number student sudah ada didalam sistem',
         // 'id.required' => 'Number Student harus diletakkan',         
         'TPanugerah.required' => 'Sila masukkan Nama Anugerah',  
         'MarkahAnugerah.required' => 'Sila masukkan Nama Anugerah',        
         // 'checkbox2'
     ]);

 $newM = new ModelTPdanMarkahAnugerah();        
 $newM->tahapid = $TP;
 $newM->markahid = $Mark;
 $newM->save();

 return redirect('/anugerah');
}


    //arif
    public function PageKhas(){
    
        
        // $user = Auth::user();
        $data = DB::table('khas')   
        ->join('tahaphep', 'khas.tahaphepid', '=', 'tahaphep.tahaphepid') ////
        ->join('markah', 'khas.markahid', '=', 'markah.markahid') 
         ->select('khas.*','tahaphep.*','markah.*')

         //->where('course.Cname','=','STA')  where statement
         ->get();

         $jeniskhas = DB::table('jeniskhas')        ////////////
         ->select('*')

         //->where('course.Cname','=','STA')  where statement
         ->get();

         $tahaphep = DB::table('tahaphep')        
         ->select('*')
         ->get();

         $markah = DB::table('markah')        
         ->select('*')

         //->where('course.Cname','=','STA')  where statement
         ->get();

         
        return view('layout.khas')
        ->with(compact('data'))
        ->with(compact('jeniskhas'))
        ->with(compact('tahaphep'))
        ->with(compact('markah'));

    }

    public function SimpanJKhas(Request $req)
    {
        $JenisKhasNama = $req->jeniskhasnama;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'jeniskhasnama'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'jeniskhasnama.required' => 'Sila masukkan Nama Modul',         
             // 'checkbox2'
         ]);
    
     $newJS = new ModelJenisKhas();        
     $newJS->jeniskhasnama = $JenisKhasNama;
     $newJS->save();
    
     return redirect('/khas');
    }



    public function PageTahaphep(){
    
        $data = DB::table('tahaphep')
        ->select('*')
        ->get();
        return view('layout.tahaphep',compact('data'));
    }
    
    public function SimpanTahaphepnama(Request $req)
    {
        $tahaphepnama = $req->tahaphepnama;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'tahaphepnama'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'tahaphepnama.required' => 'Sila masukkan Tahap HEP',         
             // 'checkbox2'
         ]);
    
     $newM = new Modeltahaphepnama();        
     $newM->tahaphepnama = $tahaphepnama;
     $newM->save();
    
     return redirect('/Tahaphep');
    }

    public function SimpanThdanmarkah(Request $req)
    {
        $Th = $req->Thkhas;
        $Markah = $req->MarkahKhas;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'Thkhas'=> 'required',   
             'MarkahKhas'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'Thkhas.required' => 'Sila masukkan Tahap HEP',  
             'MarkahKhas.required' => 'Sila masukkan Markah khas',        
             // 'checkbox2'
         ]);
    
     $newM = new ModelThdanmarkahkhas();        
     $newM->tahaphepid = $Th;
     $newM->markahid = $Markah;
     $newM->save();
    
     return redirect('/khas');
    }

    public function Pagesuksis()
    {
            
        
        // $user = Auth::user();
        $data = DB::table('suksis')   
        ->join('jawatansuksis', 'suksis.jawatansuksisid', '=', 'jawatansuksis.jawatansuksisid') 
        ->join('markah', 'suksis.markahid', '=', 'markah.markahid') 
         ->select('suksis.*','jawatansuksis.*','markah.*')
    
         //->where('course.Cname','=','STA')  where statement
         ->get();
    
         $jawatansuksis = DB::table('jawatansuksis')        
         ->select('*')
         ->get();
    
         $markah = DB::table('markah')        
         ->select('*')
    
         //->where('course.Cname','=','STA')  where statement
         ->get();
    
         
        return view('layout.suksis')
        ->with(compact('data'))
        ->with(compact('jawatansuksis'))
        ->with(compact('markah'));
    }

    

    public function SimpanJawatansuksis(Request $req)
    {
        $jawatansuksis = $req->jawatansuksis;
       
        $validateData = $req->validate(
            [
            // 'id'=> 'required|unique:table, column, except,id'
             'jawatansuksis'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'jawatansuksis.required' => 'Sila masukkan Jawatan SUKSIS',         
             // 'checkbox2'
         ]);
    
     $newJS = new Modeljawatansuksis();        
     $newJS->jawatansuksis = $jawatansuksis;
     $newJS->save();
    
     return redirect('/suksis');
    }


    public function SimpanJawatandanMarkahsuksis(Request $req)
    {
        $jwtsuksis = $req->TPjawatan;
        $Markahsuksis = $req->Markahsuksis;
       
        $validateData = $req->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'TPjawatan'=> 'required',   
             'Markahsuksis'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'TPjawatan.required' => 'Sila masukkan Jawatan SUKSIS',  
             'Markahsuksis.required' => 'Sila masukkan Markah SUKSIS',        
             // 'checkbox2'
         ]);
    
     $newM = new SimpanJawatandanMarkahsuksis();        
     $newM->jawatansuksisid = $jwtsuksis;
     $newM->markahid = $Markahsuksis;
     $newM->save();
    
     return redirect('/suksis');
    }

    

 

}

