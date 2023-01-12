<?php

namespace App\Http\Controllers;

use App\Models\TblJenisKhas;
use App\Models\TblProfilMarkah;
use App\Models\TblProfilTahapPencapaian;
use App\Models\TblKhas;
use App\Models\TblKhasDt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TblKhasDtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tbl_khas_dts')   
         ->join('tbl_profil_tahap_pencapaians', 'tbl_khas_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
         ->join('tbl_profil_markahs', 'tbl_khas_dts.idmarkah', '=', 'tbl_profil_markahs.id') 
         ->select('tbl_khas_dts.*','tbl_profil_tahap_pencapaians.*','tbl_profil_markahs.*','tbl_khas_dts.id as khasdtid','tbl_profil_markahs.id as markahid','tbl_profil_tahap_pencapaians.id as tpid')
         ->get();

        $jeniskhas = TblKhas::all();
        $markah = TblProfilMarkah::all();
        $tahappencapaian = TblProfilTahapPencapaian::all();

        return view('profiling.khas.index')
        ->with(compact('data'))
        ->with(compact('jeniskhas'))
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

        return view('profiling.khas.create',compact('markah'),compact('tahappencapaian'));
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

            TblKhasDt::create([
                'idTP' => $request->input('TP'),
                'idmarkah' => $request->input('markah')
            ]);
            //redirect routes
            return redirect('/khas')->with('success', 'Data saved.');
        }


        

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblKhas  $tblKhas
     * @return \Illuminate\Http\Response
     */
    public function show(TblKhas $tblKhas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblKhas  $tblKhas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data= TblKhas::find($id);

        // $datasukan = DB::table('tbl_sukans')   
        //  ->join('tbl_profil_tahap_pencapaians', 'tbl_sukans.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
        //  ->join('tbl_profil_markahs', 'tbl_sukans.idmarkah', '=', 'tbl_profil_markahs.id') 
        //  ->select('tbl_sukans.*','tbl_profil_tahap_pencapaians.*','tbl_profil_markahs.*','tbl_sukans.id as sukanid','tbl_profil_markahs.id as markahid','tbl_profil_tahap_pencapaians.id as tpid')
        //  ->where('tbl_sukans.id','=','$id') 
        //  ->get();

        $data= DB::table('tbl_khas_dts') 
        ->join('tbl_profil_tahap_pencapaians', 'tbl_khas_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
        ->join('tbl_profil_markahs', 'tbl_khas_dts.idmarkah', '=', 'tbl_profil_markahs.id') 
        ->where('tbl_khas_dts.id','=', $id)
        ->select('*')        
        ->first();

        $datas = TblKhasDt::find($id);

         $markah = TblProfilMarkah::all();
         
         $tahappencapaian = TblProfilTahapPencapaian::all();

        return view('profiling.khas.edit')
        -> with(compact('data'))
        -> with(compact('datas'))
        -> with(compact('markah'))
        -> with(compact('tahappencapaian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblKhas  $tblKhas
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

        TblKhasDt::find($id)->update([
            'idmarkah' => $request->input('idmarkah'),
            'idTP' => $request->input('idTP'),
        ]);
        return redirect()->route('khas.index')->with('success', 'khas updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblKhas  $tblKhas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblKhasDt::find($id)->delete();
        return redirect('/khas')
            ->with('success', 'Data sukan deleted successfully');
    }
}
