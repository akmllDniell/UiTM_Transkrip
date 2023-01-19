<?php

namespace App\Http\Controllers;

use App\Models\TblJenisPadu;
use App\Models\TblProfilMarkah;
use App\Models\TblProfilTahapPencapaian;
use App\Models\TblPadu;
use App\Models\TblPaduDt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TblPaduDtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tbl_padu_dts')   
         ->join('tbl_profil_tahap_pencapaians', 'tbl_padu_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
         ->join('tbl_profil_markahs', 'tbl_padu_dts.idmarkah', '=', 'tbl_profil_markahs.id') 
         ->select('tbl_padu_dts.*','tbl_profil_tahap_pencapaians.*','tbl_profil_markahs.*','tbl_padu_dts.id as padudtid','tbl_profil_markahs.id as markahid','tbl_profil_tahap_pencapaians.id as tpid')
         ->get();

        $padu = TblPadu::all();
        $markah = TblProfilMarkah::all();
        $tahappencapaian = TblProfilTahapPencapaian::all();

        return view('profiling.padu.index')
        ->with(compact('data'))
        ->with(compact('padu'))
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

        return view('profiling.padu.create',compact('markah'),compact('tahappencapaian'));
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

            TblPaduDt::create([
                'idTP' => $request->input('TP'),
                'idmarkah' => $request->input('markah')
            ]);
            //redirect routes
            return redirect('/padu')->with('success', 'Data saved.');
        }


        

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblPadu  $tblPadu
     * @return \Illuminate\Http\Response
     */
    public function show(TblPadu $tblPadu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblPadu  $tblPadu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data= TblPadu::find($id);

        // $datasukan = DB::table('tbl_sukans')   
        //  ->join('tbl_profil_tahap_pencapaians', 'tbl_sukans.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
        //  ->join('tbl_profil_markahs', 'tbl_sukans.idmarkah', '=', 'tbl_profil_markahs.id') 
        //  ->select('tbl_sukans.*','tbl_profil_tahap_pencapaians.*','tbl_profil_markahs.*','tbl_sukans.id as sukanid','tbl_profil_markahs.id as markahid','tbl_profil_tahap_pencapaians.id as tpid')
        //  ->where('tbl_sukans.id','=','$id') 
        //  ->get();

        $data= DB::table('tbl_padu_dts') 
        ->join('tbl_profil_tahap_pencapaians', 'tbl_padu_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
        ->join('tbl_profil_markahs', 'tbl_padu_dts.idmarkah', '=', 'tbl_profil_markahs.id') 
        ->where('tbl_padu_dts.id','=', $id)
        ->select('tbl_padu_dts.*','tbl_profil_tahap_pencapaians.*','tbl_profil_markahs.*','tbl_padu_dts.id as padudtid','tbl_profil_markahs.id as markahid','tbl_profil_tahap_pencapaians.id as tpid')        
        ->first();

        $datas = TblPaduDt::find($id);

         $markah = TblProfilMarkah::all();
         
         $tahappencapaian = TblProfilTahapPencapaian::all();

        return view('profiling.padu.edit')
        -> with(compact('data'))
        -> with(compact('datas'))
        -> with(compact('markah'))
        -> with(compact('tahappencapaian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblPadu  $tblPadu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
        $request->validate(
            //validation rules
            [
                'idmarkah' => ['required'],
                'idTP' => ['required'],
            ],
            //validation messages
            [
                'idmarkah.required' => 'Sila pilih markah',
                'idTP.required' => 'Sila pilih Tahap pencapaian',
            ]
        );

        TblPaduDt::find($id)->update([
            'idmarkah' => $request->input('idmarkah'),
            'idTP' => $request->input('idTP'),
        ]);
        return redirect()->route('padu.index')->with('success', 'Program Padu updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblPadu  $tblPadu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblPaduDt::find($id)->delete();
        return redirect('/padu')
            ->with('success', 'Data sukan deleted successfully');
    }
}
