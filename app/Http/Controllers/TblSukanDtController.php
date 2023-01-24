<?php

namespace App\Http\Controllers;

use App\Models\TblProfilMarkah;
use App\Models\TblProfilTahapPencapaian;
use App\Models\TblSukan;
use App\Models\TblSukanDt;
use App\Models\TblSukanDtDt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TblSukanDtController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tbl_sukan_dts')   
         ->join('tbl_profil_tahap_pencapaians', 'tbl_sukan_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
         ->join('tbl_profil_markahs', 'tbl_sukan_dts.idmarkah', '=', 'tbl_profil_markahs.id') 
         ->select('tbl_sukan_dts.*','tbl_profil_tahap_pencapaians.*','tbl_profil_markahs.*','tbl_sukan_dts.id as sukanid','tbl_profil_markahs.id as markahid','tbl_profil_tahap_pencapaians.id as tpid')
         ->get();

        $jenissukan = TblSukan::all();
        $markah = TblProfilMarkah::all();
        $tahappencapaian = TblProfilTahapPencapaian::all();

        return view('profiling.sukan.index')
        ->with(compact('data'))
        ->with(compact('jenissukan'))
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

        return view('profiling.sukan.create',compact('markah'),compact('tahappencapaian'));
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
                'TP' => ['required','numeric'],
                'markah'=> 'required',
            ],
            //validation messages
            [
                'TP.required' => 'SIla pilih Tahap pencapaian anda',
                'TP.numeric' => 'Masukkan Data dengan betul!',
                'markah.required' => 'SIla pilih markah anda'
            ]
        );

        TblSukanDt::create([
            'idTP' => $request->input('TP'),
            'idmarkah' => $request->input('markah')
        ]);
        //redirect routes
        return redirect('/sukan')->with('success', 'Data succesfully saved.');
    }      

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblSukanDt  $TblSukanDt
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $data= DB::table('tbl_sukan_dts') 
        ->join('tbl_profil_tahap_pencapaians', 'tbl_sukan_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
        ->join('tbl_profil_markahs', 'tbl_sukan_dts.idmarkah', '=', 'tbl_profil_markahs.id') 
        ->select('*' , 'tbl_profil_markahs.id as idm', 'tbl_sukan_dts.id as ids', 'tbl_profil_tahap_pencapaians.id as idtp')
        ->where('tbl_sukan_dts.id','=',$id) 
        ->first();

        // $users = DB::table('users')
        //     ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
        //     ->get();
     
         $markah = TblProfilMarkah::all();
         $datas = TblSukanDt::find($id);
         $tahappencapaian = TblProfilTahapPencapaian::all();

        return view('profiling.sukan.edit')
        -> with(compact('data'))
        -> with(compact('datas'))
        -> with(compact('markah'))
        -> with(compact('tahappencapaian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblSukanDt  $TblSukanDt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
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

        TblSukanDt::find($id)->update([
            'idmarkah' => $request->input('idmarkah'),
            'idTP' => $request->input('idTP'),
        ]);
        return redirect()->route('sukan.index')->with('success', "Sukan updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblSukanDt  $TblSukanDt
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblSukanDt::find($id)->delete();
        return redirect('/sukan')
            ->with('delete', 'Data sukan deleted successfully');
    }
}
