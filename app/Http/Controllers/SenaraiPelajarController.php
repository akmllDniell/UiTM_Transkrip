<?php

namespace App\Http\Controllers;

use App\Models\TblKebudayaan;
use App\Models\TblKelab;
use App\Models\TblPadu;
use App\Models\TblPenerbitan;
use App\Models\TblProfilBadanBeruniform;
use App\Models\TblProgramTertentu;
use App\Models\TblSijil;
use App\Models\TblSukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SenaraiPelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            //data
            $data = DB::table('tbl_trys')
            ->join('users','tbl_trys.userid', '=', 'users.id')
            ->select('*','tbl_trys.id as tryid')
            ->get();
            //data
                // //sukan
                // $idsukandt = DB::table('tbl_trys')
                // ->leftJoin('tbl_sukan_dts', 'tbl_trys.idsukandt', '=', 'tbl_sukan_dts.id')
                // ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_sukan_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
                // ->leftJoin('tbl_profil_markahs', 'tbl_sukan_dts.idmarkah', '=', 'tbl_profil_markahs.id')
                // ->get();
        
                // $idsukan = TblSukan::all();
                // //sukan
                
                // //kelab
                // // $idkelabdt = TblKelabDt::all(); 
                // $idkelabdt = DB::table('tbl_kelab_dts')
                // ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_kelab_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
                // ->leftJoin('tbl_profil_jawatans', 'tbl_kelab_dts.jawatanid', '=', 'tbl_profil_jawatans.id')
                // ->get();  
        
                // $idkelab = TblKelab::all();
                // //kelab 
        
                // //kebudayaan
                // // $idkebudayaandt = TblKebudayaanDt::all();  
                // $idkebudayaandt = DB::table('tbl_kebudayaan_dts')
                // ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_kebudayaan_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
                // ->leftJoin('tbl_profil_markahs', 'tbl_kebudayaan_dts.idmarkah', '=', 'tbl_profil_markahs.id')
                // ->get();
        
                // $idkebudayaan = TblKebudayaan::all();
                // //kebudayaan
        
                // //uniform
                // // $idberuniform = TblUniform::all();
                // $iduniform = DB::table('tbl_uniforms')
                // ->leftJoin('tbl_profil_badan_beruniforms', 'tbl_uniforms.bdnuni', '=', 'tbl_profil_badan_beruniforms.id')
                // ->leftJoin('tbl_profil_jawatans', 'tbl_uniforms.jwtuni', '=', 'tbl_profil_jawatans.id')
                // ->get();
        
                // $idjenisuniform = TblProfilBadanBeruniform::all();
                // //uniform
        
                // //sijil
                // // $idsijildt = TblSijilDt::all();
                // $idsijildt = DB::table('tbl_sijil_dts')
                // ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_sijil_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
                // ->leftJoin('tbl_profil_markahs', 'tbl_sijil_dts.idmarkah', '=', 'tbl_profil_markahs.id')
                // ->get();      
                // $idsijil = TblSijil::all();
                // //sijil
        
                // //  penerbitan
                // // idpenerbitandt= TblPenerbitanDt::all();
                // $idpenerbitandt = DB::table('tbl_penerbitan_dts')
                // ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_penerbitan_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
                // ->leftJoin('tbl_profil_jawatans', 'tbl_penerbitan_dts.jawatanid', '=', 'tbl_profil_jawatans.id')
                // ->select('*','tbl_penerbitan_dts.id as penerbitanid')
                // ->get();   
                // $idpenerbitan =TblPenerbitan::all();
                // //penerbitan
        
                // //padu
                // $idpadudt = DB::table('tbl_padu_dts')
                // ->leftJoin('tbl_profil_tahap_heps', 'tbl_padu_dts.idTH', '=', 'tbl_profil_tahap_heps.id')
                // ->leftJoin('tbl_profil_markahs', 'tbl_padu_dts.idmarkah', '=', 'tbl_profil_markahs.id')
                // ->select('*','tbl_padu_dts.id as paduid')
                // ->get();      
                // $idpadu = TblPadu::all();
                // //padu
        
                // //program tertentu
                // // idprogramtertentudt
                // $idprogramtertentudt = DB::table('tbl_program_tertentu_dts')
                // ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_program_tertentu_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
                // ->leftJoin('tbl_profil_markahs', 'tbl_program_tertentu_dts.idmarkah', '=', 'tbl_profil_markahs.id')
                // ->select('*','tbl_program_tertentu_dts.id as tertentuid')
                // ->get();   
                // $idprogramtertentu =TblProgramTertentu::all();       
                // //program tertentu
        
                // user
                // $userid =User::all();
                // $idprogramtertentudt = DB::table('tbl_program_tertentu_dts')
                // ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_program_tertentu_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
                // ->leftJoin('tbl_profil_markahs', 'tbl_program_tertentu_dts.idmarkah', '=', 'tbl_profil_markahs.id')
                // ->select('*','tbl_program_tertentu_dts.id as tertentuid')
                // ->get();  

                // //user
        
        
                return view('layouts.pelajar.senaraipelajar')
                // ->with(compact('idsukandt'))
                // ->with(compact('idsukan'))
                // ->with(compact('idkelab'))
                // ->with(compact('idkelabdt'))
                // ->with(compact('idkebudayaan'))
                // ->with(compact('idkebudayaandt'))
                // ->with(compact('iduniform'))
                // ->with(compact('idjenisuniform'))
                // ->with(compact('idsijildt'))
                // ->with(compact('idsijil'))
                // ->with(compact('idpenerbitandt'))
                // ->with(compact('idpenerbitan'))
                // ->with(compact('idpadudt'))
                // ->with(compact('idpadu'))
                // ->with(compact('idprogramtertentudt'))
                // ->with(compact('idprogramtertentu'))
                // ->with(compact('userid'))
                ->with(compact('data'))
                ;
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
       //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblTrys  $tblTrys
     * @return \Illuminate\Http\Response
     */
    // public function show(TblTrys $tblTrys)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblTrys  $tblTrys
     * @return \Illuminate\Http\Response
     */
    // public function edit(TblTrys $tblTrys)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblTrys  $tblTrys
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, TblTrys $tblTrys)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblTrys  $tblTrys
     * @return \Illuminate\Http\Response
     */
    // public function destroy(TblTrys $tblTrys)
    // {
    //     //
    // }
}
