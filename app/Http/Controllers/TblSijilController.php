<?php

namespace App\Http\Controllers;

use App\Models\TblJenisSijil;
use App\Models\TblProfilMarkah;
use App\Models\TblProfilTahapPencapaian;
use App\Models\TblSijil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TblSijilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tbl_sijils')   
         ->join('tbl_profil_tahap_pencapaians', 'tbl_sijils.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
         ->join('tbl_profil_markahs', 'tbl_sijils.idmarkah', '=', 'tbl_profil_markahs.id') 
         ->select('tbl_sijils.*','tbl_profil_tahap_pencapaians.*','tbl_profil_markahs.*','tbl_sijils.id as sijilid','tbl_profil_markahs.id as markahid','tbl_profil_tahap_pencapaians.id as tpid')
         ->get();

        $jenissijil = TblJenisSijil::all();
        $markah = TblProfilMarkah::all();
        $tahappencapaian = TblProfilTahapPencapaian::all();

        return view('profiling.sijil.index')
        ->with(compact('data'))
        ->with(compact('jenissijil'))
        ->with(compact('tahappencapaian'))
        ->with(compact('markah'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $markah = TblProfilMarkah::all();
        $tahappencapaian = TblProfilTahapPencapaian::all();

        return view('profiling.sijil.create',compact('markah'),compact('tahappencapaian'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            //validation rules
            [
                'TP' => 'required',
                'markah'=> 'required',
            ],
            //validation messages
            [
                'TP.required' => 'SIla pilih Tahap pencapaian anda',
                'markah.required' => 'SIla pilih markah anda'
            ]
            );

            TblSijil::create([
                'idTP' => $request->input('TP'),
                'idmarkah' => $request->input('markah')
            ]);
            //redirect routes
            return redirect('/sijil')->with('success', 'Data saved.');
        }


        

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblSijil  $tblSijil
     * @return \Illuminate\Http\Response
     */
    public function show(TblSijil $tblSijil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblSijil  $tblSijil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= TblSijil::find($id);

        // $datasukan = DB::table('tbl_sukans')   
        //  ->join('tbl_profil_tahap_pencapaians', 'tbl_sukans.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
        //  ->join('tbl_profil_markahs', 'tbl_sukans.idmarkah', '=', 'tbl_profil_markahs.id') 
        //  ->select('tbl_sukans.*','tbl_profil_tahap_pencapaians.*','tbl_profil_markahs.*','tbl_sukans.id as sukanid','tbl_profil_markahs.id as markahid','tbl_profil_tahap_pencapaians.id as tpid')
        //  ->where('tbl_sukans.id','=','$id') 
        //  ->get();

         $markah = TblProfilMarkah::all();
         
         $tahappencapaian = TblProfilTahapPencapaian::all();

        return view('profiling.sijil.edit')
        -> with(compact('data'))
        // -> with(compact('datasukan'))
        -> with(compact('markah'))
        -> with(compact('tahappencapaian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblSijil  $tblSijil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TblSijil $tblSijil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblSijil  $tblSijil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblSijil::find($id)->delete();
        return redirect('/sijil')
            ->with('success', 'Data sukan deleted successfully');
    }
}
