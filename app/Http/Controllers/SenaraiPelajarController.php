<?php

namespace App\Http\Controllers;

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
          
        
        
                return view('pelajar.senaraipelajar')
                ->with(compact('data'))
                ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //user
        $user = DB::table('tbl_trys')
        ->join('users','tbl_trys.userid', '=', 'users.id')
        ->where('tbl_trys.userid','=',$id) 
        ->first();
        //user

        //sukan
        $sukan = DB::table('tbl_trys')
        ->leftJoin('tbl_sukan_dts','tbl_trys.idsukandt', '=', 'tbl_sukan_dts.id')
        ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_sukan_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
        ->leftJoin('tbl_profil_markahs', 'tbl_sukan_dts.idmarkah', '=', 'tbl_profil_markahs.id')
        ->leftJoin('tbl_sukans', 'tbl_trys.idsukan', '=', 'tbl_sukans.id')
        ->select
        (
            '*','tbl_trys.id as tryid'
        )
        ->where('tbl_trys.userid','=',$id) 
        ->first();
        //sukan

        //kelab
        $kelab = DB::table('tbl_trys')
        ->leftJoin('tbl_kelab_dts','tbl_trys.idkelabdt', '=', 'tbl_kelab_dts.id')
        ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_kelab_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
        ->leftJoin('tbl_profil_markahs', 'tbl_kelab_dts.idmarkah', '=', 'tbl_profil_markahs.id')
        ->leftJoin('tbl_profil_jawatans', 'tbl_kelab_dts.jawatanid', '=', 'tbl_profil_jawatans.id')
        ->leftJoin('tbl_kelabs', 'tbl_trys.idkelab', '=', 'tbl_kelabs.id')
        ->select
        (
            '*','tbl_trys.id as tryid'
        )
        ->where('tbl_trys.userid','=',$id) 
        ->first();
        //kelab

        //kebudayaan
        $kebudayaan = DB::table('tbl_trys')
        ->leftJoin('tbl_kebudayaan_dts','tbl_trys.idkebudayaandt', '=', 'tbl_kebudayaan_dts.id')
        ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_kebudayaan_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
        ->leftJoin('tbl_profil_markahs', 'tbl_kebudayaan_dts.idmarkah', '=', 'tbl_profil_markahs.id')
        ->leftJoin('tbl_kebudayaans', 'tbl_trys.idkebudayaan', '=', 'tbl_kebudayaans.id')
        ->select
        (
            '*','tbl_trys.id as tryid'
        )
        ->where('tbl_trys.userid','=',$id) 
        ->first();
        //kebudayaan

        //beruniform
        $beruniform = DB::table('tbl_trys')
        ->leftJoin('tbl_uniforms','tbl_trys.idberuniform', '=', 'tbl_uniforms.id')
        ->leftJoin('tbl_profil_jawatan_uniforms', 'tbl_uniforms.jwtuni', '=', 'tbl_profil_jawatan_uniforms.id')
        ->leftJoin('tbl_profil_markahs', 'tbl_uniforms.idmarkah', '=', 'tbl_profil_markahs.id')
        ->leftJoin('tbl_profil_badan_beruniforms', 'tbl_uniforms.bdnuni', '=', 'tbl_profil_badan_beruniforms.id')
        ->select
        (
            '*','tbl_trys.id as tryid'
        )
        ->where('tbl_trys.userid','=',$id) 
        ->first();
        //beruniform

        //sijil
        $sijil = DB::table('tbl_trys')
        ->leftJoin('tbl_sijil_dts','tbl_trys.idsijildt', '=', 'tbl_sijil_dts.id')
        ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_sijil_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
        ->leftJoin('tbl_profil_markahs', 'tbl_sijil_dts.idmarkah', '=', 'tbl_profil_markahs.id')
        ->leftJoin('tbl_sijils', 'tbl_trys.idsijil', '=', 'tbl_sijils.id')
        ->select
        (
            '*','tbl_trys.id as tryid'
        )
        ->where('tbl_trys.userid','=',$id) 
        ->first();
        //sijil

        //penerbitan
        $penerbitan = DB::table('tbl_trys')
        ->leftJoin('tbl_penerbitan_dts','tbl_trys.idpenerbitandt', '=', 'tbl_penerbitan_dts.id')
        ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_penerbitan_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
        ->leftJoin('tbl_profil_markahs', 'tbl_penerbitan_dts.idmarkah', '=', 'tbl_profil_markahs.id')
        ->leftJoin('tbl_profil_jawatans', 'tbl_penerbitan_dts.jawatanid', '=', 'tbl_profil_jawatans.id')
        ->leftJoin('tbl_penerbitans', 'tbl_trys.idpenerbitan', '=', 'tbl_penerbitans.id')
        ->select
        (
            '*','tbl_trys.id as tryid'
        )
        ->where('tbl_trys.userid','=',$id) 
        ->first();
        //penerbitan

        //padu
        $padu = DB::table('tbl_trys')
        ->leftJoin('tbl_padu_dts','tbl_trys.idpadudt', '=', 'tbl_padu_dts.id')
        ->leftJoin('tbl_profil_tahap_heps', 'tbl_padu_dts.idTH', '=', 'tbl_profil_tahap_heps.id')
        ->leftJoin('tbl_profil_markahs', 'tbl_padu_dts.idmarkah', '=', 'tbl_profil_markahs.id')
        ->leftJoin('tbl_padus', 'tbl_trys.idpadu', '=', 'tbl_padus.id')
        ->select
        (
            '*','tbl_trys.id as tryid'
        )
        ->where('tbl_trys.userid','=',$id) 
        ->first();
        //padu

        //program tertentu
        $programtertentu = DB::table('tbl_trys')
        ->leftJoin('tbl_program_tertentu_dts','tbl_trys.idprogramtertentudt', '=', 'tbl_program_tertentu_dts.id')
        ->leftJoin('tbl_profil_tahap_pencapaians', 'tbl_program_tertentu_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id')
        ->leftJoin('tbl_profil_markahs', 'tbl_program_tertentu_dts.idmarkah', '=', 'tbl_profil_markahs.id')
        ->leftJoin('tbl_program_tertentus', 'tbl_trys.idsijil', '=', 'tbl_program_tertentus.id')
        ->select
        (
            '*','tbl_trys.id as tryid'
        )
        ->where('tbl_trys.userid','=',$id) 
        ->first();
        //program tertentu

        return view('student.outputtranskrip')
        -> with(compact('user'))
        -> with(compact('sukan'))
        -> with(compact('kelab'))
        -> with(compact('kebudayaan'))
        -> with(compact('beruniform'))
        -> with(compact('sijil'))
        -> with(compact('penerbitan'))
        -> with(compact('padu'))
        -> with(compact('programtertentu'))

        ;
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
