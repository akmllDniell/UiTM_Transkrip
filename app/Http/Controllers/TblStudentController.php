<?php

namespace App\Http\Controllers;

use App\Models\TblStudent;
use App\Models\TblKebudayaan;
use App\Models\TblKebudayaanDt;
use App\Models\TblKelab;
use App\Models\TblKelabDt;
use App\Models\TblPadu;
use App\Models\TblPenerbitan;
use App\Models\TblPenerbitanDt;
use App\Models\TblProfilBadanBeruniform;
use App\Models\TblProfilMarkah;
use App\Models\TblProfilTahapPencapaian;
use App\Models\TblProgramTertentu;
use App\Models\TblSijil;
use App\Models\TblSijilDt;
use App\Models\TblSukan;
use App\Models\TblSukanDt;
use App\Models\TblTrys;
use App\Models\TblUniform;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;use Illuminate\Routing\ViewController;
use Illuminate\Support\Facades\Auth;

class TblStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->faculty == null && Auth::user()->course == null )
        {
            return view('student.main')->with('lengkapprofil','lengkapkan profile pelajar terlebih dahulu');
        }
        else{
            return view('student.main');
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $jenisuniform = $request->unifomjeni; 
        TblTrys::create([
            'idsukandt' => $request->input('idsukandt'),
            'idsukan' => $request->input('idsukan'),
            'idkelab' => $request->input('idkelab'),
            'idkelabdt' => $request->input('idkelabdt'), 
            'idkebudayaan' => $request->input('idkebudayaan'),
            'idkebudayaandt' => $request->input('idkebudayaandt'),
             'idberuniform' =>  $request->input('unifomjeni'),
         //    'idjenisuniform' => $request->input('idjenisuniform'),
            'idsijildt' => $request->input('idsijildt'),
            'idsijil' => $request->input('idsijil'),
            'idpenerbitandt' => $request->input('idpenerbitandt'),
            'idpenerbitan' => $request->input('idpenerbitan'),
            'idpadudt' => $request->input('idpadudt'),
            'idpadu' => $request->input('idpadu'),
            'idprogramtertentudt' => $request->input('idprogramtertentudt'),
            'idprogramtertentu' => $request->input('idprogramtertentu'),
            'userid' => $request->input('userid')
         ]);
         //redirect routes
         $id = Auth::user()->id;
         $count = Auth::user()->countreq + 1;
         // $date = TblTrys::find($id)->userid;
         User::find($id)->update([
            'countreq' => $count]);
         
         return redirect('/minitranskrip');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblStudent  $tblStudent
     * @return \Illuminate\Http\Response
     */
    public function show(TblStudent $tblStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblStudent  $tblStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(TblStudent $tblStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblStudent  $tblStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TblStudent $tblStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblStudent  $tblStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(TblStudent $tblStudent)
    {
        //
    }

    public function transkrip()
    {
        if (Auth::user()->faculty == null && Auth::user()->course == null )
        {
            return redirect('/editprofil')->with('lengkapprofil','lengkapkan profile pelajar terlebih dahulu sebelum memohon transkrip');
        }
        else{
            return view('student.transkrip');
        }
        
    }

    public function multiform()
    {
       //sukan
       $idsukandt = DB::table('tbl_sukan_dts')
       ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_sukan_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
       ->leftJoin('tbl_profil_markahs', 'tbl_sukan_dts.idmarkah', '=', 'tbl_profil_markahs.id')
       ->get();

       $idsukan = TblSukan::all();
       //sukan
       
       //kelab
       // $idkelabdt = TblKelabDt::all(); 
       $idkelabdt = DB::table('tbl_kelab_dts')
       ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_kelab_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
       ->leftJoin('tbl_profil_jawatans', 'tbl_kelab_dts.jawatanid', '=', 'tbl_profil_jawatans.id')
       ->get();  

       $idkelab = TblKelab::all();
       //kelab 

       //kebudayaan
       // $idkebudayaandt = TblKebudayaanDt::all();  
       $idkebudayaandt = DB::table('tbl_kebudayaan_dts')
       ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_kebudayaan_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
       ->leftJoin('tbl_profil_markahs', 'tbl_kebudayaan_dts.idmarkah', '=', 'tbl_profil_markahs.id')
       ->get();

       $idkebudayaan = TblKebudayaan::all();
       //kebudayaan

       //uniform
       // $idberuniform = TblUniform::all();
       $badanuniform = DB::table('tbl_profil_badan_beruniforms')
       ->get();
       //uniform

       //sijil
       // $idsijildt = TblSijilDt::all();
       $idsijildt = DB::table('tbl_sijil_dts')
       ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_sijil_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
       ->leftJoin('tbl_profil_markahs', 'tbl_sijil_dts.idmarkah', '=', 'tbl_profil_markahs.id')
       ->get();      
       $idsijil = TblSijil::all();
       //sijil

       //  penerbitan
       // idpenerbitandt= TblPenerbitanDt::all();
       $idpenerbitandt = DB::table('tbl_penerbitan_dts')
       ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_penerbitan_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
       ->leftJoin('tbl_profil_jawatans', 'tbl_penerbitan_dts.jawatanid', '=', 'tbl_profil_jawatans.id')
       ->select('*','tbl_penerbitan_dts.id as penerbitanid')
       ->get();   
       $idpenerbitan =TblPenerbitan::all();
       //penerbitan

       //padu
       $idpadudt = DB::table('tbl_padu_dts')
       ->leftJoin('tbl_profil_tahap_heps', 'tbl_padu_dts.idTH', '=', 'tbl_profil_tahap_heps.id')
       ->leftJoin('tbl_profil_markahs', 'tbl_padu_dts.idmarkah', '=', 'tbl_profil_markahs.id')
       ->select('*','tbl_padu_dts.id as paduid')
       ->get();      
       $idpadu = TblPadu::all();
       //padu

       //program tertentu
       // idprogramtertentudt
       $idprogramtertentudt = DB::table('tbl_program_tertentu_dts')
       ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_program_tertentu_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
       ->leftJoin('tbl_profil_markahs', 'tbl_program_tertentu_dts.idmarkah', '=', 'tbl_profil_markahs.id')
       ->select('*','tbl_program_tertentu_dts.id as tertentuid')
       ->get();   
       $idprogramtertentu =TblProgramTertentu::all();       
       //program tertentu

       //user
       $userid =User::all();
       //user


       return view('student.multiform')
       ->with(compact('idsukandt'))
       ->with(compact('idsukan'))
       ->with(compact('idkelab'))
       ->with(compact('idkelabdt'))
       ->with(compact('idkebudayaan'))
       ->with(compact('idkebudayaandt'))
       ->with(compact('badanuniform'))       
       ->with(compact('idsijildt'))
       ->with(compact('idsijil'))
       ->with(compact('idpenerbitandt'))
       ->with(compact('idpenerbitan'))
       ->with(compact('idpadudt'))
       ->with(compact('idpadu'))
       ->with(compact('idprogramtertentudt'))
       ->with(compact('idprogramtertentu'))
       ->with(compact('userid'))
       ;
    }

    /**`
     * return states list.
     *
     * @return json
     */
    public function getUniform(Request $request)
    {
        $states = DB::table('tbl_uniforms')
            ->join('tbl_profil_jawatan_uniforms','tbl_profil_jawatan_uniforms.id','=','tbl_uniforms.jwtuni')          
            ->where('bdnuni', $request->bdnuni)
            ->select('*')
            ->get();
        
        if (count($states) > 0) {
            return response()->json($states);
        }
    }

    /**
     * return cities list
     *
     * @return json
     */
    public function getmarkah(Request $request)
    {
        $cities= DB::table('tbl_uniforms')
        ->join('tbl_profil_markahs','tbl_profil_markahs.id','=','tbl_uniforms.idmarkah')     
        ->select('*','tbl_uniforms.id as uniid')     
        ->where('jwtuni', $request->jwt_id)
        ->get();
        
       
        if (count($cities) > 0) {
            return response()->json($cities);
        }
       


    }

    public function output()
    {
        return view('student.minitranskrip');

        
    }

    public function profilstudent()
    {
        if(Auth::user()->BOD == null)
        {
            $years = "";
        }
        else{
        $dateOfBirth = Auth::user()->BOD;
        $years = Carbon::parse($dateOfBirth)->age;
    }

        return view('student.profilstudent')
        ->with(compact('years'));
    }

    public function editprofil()
    {
        if(Auth::user()->BOD == null)
        {
            $years = "";
        }
        else{
        $dateOfBirth = Auth::user()->BOD;
        $years = Carbon::parse($dateOfBirth)->age;
    }

        return view('student.editprofilstudent')->with(compact('years'));
    }

    public function updateprofil(Request $req)
    {     
           
        $id = Auth::user()->id;

        $req->validate(
            //validation rules
            [
                'name' => [''],
                'course' => [''],
                'faculty' => [''],
                'phone' => [''],
                'address' => [''],
                'email' => [''], 
                'date' => [''],               
            ],
        );


        User::find($id)->update([
            'name' => $req->input('name'),
            'course' => $req->input('course'),
            'faculty' => $req->input('faculty'),
            'phone' => $req->input('phone'),
            'address' => $req->input('address'),
            'email' => $req->input('email'),
            'BOD' => $req->input('date')
        ]);
        
        return redirect('/profil')->with('message','student succesfully updated');
    }

    public function semakantranskrip()
    {        
        $id = Auth::user()->id;
        // $date = TblTrys::find($id)->userid;
        $data= DB::table('tbl_trys')         
        ->select('*','tbl_trys.userid as userid')
        ->where('tbl_trys.userid','=',$id) 
        ->first();

        
        return view('student.semaktranskrip')->with(compact('data'));
    }

    public function tolakpermohonan(Request $req, $id)
    {
        $nama =$req->nama;   

        TblTrys::find($id)->update([
            'status' => "rejected"
        ]);

        return redirect('/senaraipelajar')->with('decline',"Permohonan Telah Ditolak untuk $nama");
    }

    public function terimapermohonan(Request $req, $id)
    {
        $nama =$req->nama;    

        TblTrys::find($id)->update([
            'status' => "completed"
        ]);

        return redirect('/senaraipelajar')->with('accept',"Permohonan Telah Diterima $nama");
    }
}
