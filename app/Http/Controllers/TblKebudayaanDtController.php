<?php

namespace App\Http\Controllers;

use App\Models\TblJenisKebudayaan;
use App\Models\TblProfilMarkah;
use App\Models\TblProfilTahapPencapaian;
use App\Models\TblKebudayaan;
use App\Models\TblKebudayaanDt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TblKebudayaanDtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tbl_kebudayaan_dts')   
         ->join('tbl_profil_tahap_pencapaians', 'tbl_kebudayaan_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
         ->join('tbl_profil_markahs', 'tbl_kebudayaan_dts.idmarkah', '=', 'tbl_profil_markahs.id') 
         ->select('tbl_kebudayaan_dts.*','tbl_profil_tahap_pencapaians.*','tbl_profil_markahs.*','tbl_kebudayaan_dts.id as kebudayaandtid','tbl_profil_markahs.id as markahid','tbl_profil_tahap_pencapaians.id as tpid')
         ->get();

        $jeniskebudayaan = TblKebudayaan::all();
        $markah = TblProfilMarkah::all();
        $tahappencapaian = TblProfilTahapPencapaian::all();

        return view('profiling.kebudayaan.index')
        ->with(compact('data'))
        ->with(compact('jeniskebudayaan'))
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

        return view('profiling.kebudayaan.create',compact('markah'),compact('tahappencapaian'));
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

            TblKebudayaanDt::create([
                'idTP' => $request->input('TP'),
                'idmarkah' => $request->input('markah')
            ]);
            //redirect routes
            return redirect('/kebudayaan')->with('success', 'Data saved.');
        }


        

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblKebudayaan  $tblKebudayaan
     * @return \Illuminate\Http\Response
     */
    public function show(TblKebudayaan $tblKebudayaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblKebudayaan  $tblKebudayaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data= TblKebudayaan::find($id);

        // $datakebudayaan = DB::table('tbl_kebudayaan')   
        //  ->join('tbl_profil_tahap_pencapaians', 'tbl_kebudayaan.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
        //  ->join('tbl_profil_markahs', 'tbl_kebudayaan.idmarkah', '=', 'tbl_profil_markahs.id') 
        //  ->select('tbl_kebudayaan.*','tbl_profil_tahap_pencapaians.*','tbl_profil_markahs.*','tbl_kebudayaan.id as kebudayaanid','tbl_profil_markahs.id as markahid','tbl_profil_tahap_pencapaians.id as tpid')
        //  ->where('tbl_kebudayaan.id','=','$id') 
        //  ->get();

        $data= DB::table('tbl_kebudayaan_dts') 
        ->join('tbl_profil_tahap_pencapaians', 'tbl_kebudayaan_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
        ->join('tbl_profil_markahs', 'tbl_kebudayaan_dts.idmarkah', '=', 'tbl_profil_markahs.id') 
        ->where('tbl_kebudayaan_dts.id','=', $id)
        ->select('*')        
        ->first();

        $datas = TblKebudayaanDt::find($id);

         $markah = TblProfilMarkah::all();
         
         $tahappencapaian = TblProfilTahapPencapaian::all();

        return view('profiling.kebudayaan.edit')
        -> with(compact('data'))
        -> with(compact('datas'))
        -> with(compact('markah'))
        -> with(compact('tahappencapaian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblKebudayaan $tblKebudayaan
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

        TblKebudayaanDt::find($id)->update([
            'idmarkah' => $request->input('idmarkah'),
            'idTP' => $request->input('idTP'),
        ]);
        return redirect()->route('kebudayaan.index')->with('success', 'Kebudayaan updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblKebudayaan  $tblKebudayaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblKebudayaanDt::find($id)->delete();
        return redirect('/kebudayaan')
            ->with('success', 'Data kebudayaan deleted successfully');
    }
}
