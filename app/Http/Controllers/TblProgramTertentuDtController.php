<?php

namespace App\Http\Controllers;

use App\Models\TblJenisProgramTertentu;
use App\Models\TblProfilMarkah;
use App\Models\TblProfilTahapPencapaian;
use App\Models\TblProgramTertentu;
use App\Models\TblProgramTertentuDt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TblProgramTertentuDtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tbl_program_tertentu_dts')   
         ->join('tbl_profil_tahap_pencapaians', 'tbl_program_tertentu_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
         ->join('tbl_profil_markahs', 'tbl_program_tertentu_dts.idmarkah', '=', 'tbl_profil_markahs.id') 
         ->select('tbl_program_tertentu_dts.*','tbl_profil_tahap_pencapaians.*','tbl_profil_markahs.*','tbl_program_tertentu_dts.id as program_tertentudtid','tbl_profil_markahs.id as markahid','tbl_profil_tahap_pencapaians.id as tpid')
         ->get();

        $programtertentu = TblProgramTertentu::all();
        $markah = TblProfilMarkah::all();
        $tahappencapaian = TblProfilTahapPencapaian::all();

        return view('profiling.programtertentu.index')
        ->with(compact('data'))
        ->with(compact('programtertentu'))
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

        return view('profiling.programtertentu.create',compact('markah'),compact('tahappencapaian'));
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

            TblProgramTertentuDt::create([
                'idTP' => $request->input('TP'),
                'idmarkah' => $request->input('markah')
            ]);
            //redirect routes
            return redirect('/programtertentu')->with('success', 'Data saved.');
        }


        

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblProgramTertentu  $tblProgramTertentu
     * @return \Illuminate\Http\Response
     */
    public function show(TblProgramTertentu $tblProgramTertentu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblProgramTertentu  $tblProgramTertentu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        

        $data= DB::table('tbl_program_tertentu_dts') 
        ->join('tbl_profil_tahap_pencapaians', 'tbl_program_tertentu_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
        ->join('tbl_profil_markahs', 'tbl_program_tertentu_dts.idmarkah', '=', 'tbl_profil_markahs.id') 
        ->where('tbl_program_tertentu_dts.id','=', $id)
        ->select('tbl_program_tertentu_dts.*','tbl_profil_tahap_pencapaians.*','tbl_profil_markahs.*','tbl_program_tertentu_dts.id as program_tertentudtid','tbl_profil_markahs.id as markahid','tbl_profil_tahap_pencapaians.id as tpid')       
        ->first();

        $datas = TblProgramTertentuDt::find($id);

         $markah = TblProfilMarkah::all();
         
         $tahappencapaian = TblProfilTahapPencapaian::all();

        return view('profiling.programtertentu.edit')
        -> with(compact('data'))
        -> with(compact('datas'))
        -> with(compact('markah'))
        -> with(compact('tahappencapaian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblProgramTertentu  $tblProgramTertentu
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

        TblProgramTertentuDt::find($id)->update([
            'idmarkah' => $request->input('idmarkah'),
            'idTP' => $request->input('idTP'),
        ]);
        return redirect()->route('programtertentu.index')->with('success', 'Program Tertentu updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblProgramTertentu  $tblProgramTertentu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblProgramTertentuDt::find($id)->delete();
        return redirect('/programtertentu')
            ->with('success', 'Data sukan deleted successfully');
    }
}
