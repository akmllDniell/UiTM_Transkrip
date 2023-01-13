<?php

namespace App\Http\Controllers;

use App\Models\TblPenerbitan;
use App\Models\TblPenerbitanDt;
use App\Models\TblProfilJawatan;
use App\Models\TblProfilMarkah;
use App\Models\TblProfilTahapPencapaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TblPenerbitanDtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= DB::table ('tbl_penerbitan_dts')   
        ->join('tbl_profil_tahap_pencapaians', 'tbl_penerbitan_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
        ->join('tbl_profil_markahs', 'tbl_penerbitan_dts.idmarkah', '=', 'tbl_profil_markahs.id') 
        ->join('tbl_profil_jawatans', 'tbl_penerbitan_dts.jawatanid', '=', 'tbl_profil_jawatans.id') 
        ->select('*')

     

     //->where('course.Cname','=','STA')  where statement
     ->get();

     $datacolumn1 = DB::table('tbl_penerbitan_dts')   
     ->join('tbl_profil_tahap_pencapaians', 'tbl_penerbitan_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
     ->join('tbl_profil_markahs', 'tbl_penerbitan_dts.idmarkah', '=', 'tbl_profil_markahs.id') 
     ->join('tbl_profil_jawatans', 'tbl_penerbitan_dts.jawatanid', '=', 'tbl_profil_jawatans.id')
     ->where ('tbl_penerbitan_dts.idTP', '=', '1')
      ->select('*')

      ->get();

      

     $jenispenerbitan = TblPenerbitan::all();      
     
     $tahappencapaian = TblProfilTahapPencapaian::all();

     $markah = TblProfilMarkah::all();

     $jawatan = TblProfilJawatan::all();
    



     
        return view('profiling.penerbitan.index')
        ->with(compact('data'))
        ->with(compact('jenispenerbitan'))
        ->with(compact('tahappencapaian'))
        ->with(compact('jawatan'))
        ->with(compact('markah'))
        ->with(compact('datacolumn1'));
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
        $jawatan = TblProfilJawatan::all();

        return view('profiling.penerbitan.create')
        ->with(compact('tahappencapaian'))
        ->with(compact('jawatan'))
        ->with(compact('markah'));
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
                'jawatan'=> 'required',
            ],
            //validation messages
            [
                'TP.required' => 'SIla pilih Tahap pencapaian anda',
                'markah.required' => 'SIla pilih markah anda',
                'jawatan.required' => 'SIla pilih jawatan anda'
            ]
            );

            TblPenerbitanDt::create([
                'idTP' => $request->input('TP'),
                'idmarkah' => $request->input('markah'),
                'jawatanid' => $request->input('jawatan')
            ]);
            //redirect routes
            return redirect('/penerbitan')->with('success', 'Data saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblPenerbitanDt  $tblPenerbitanDt
     * @return \Illuminate\Http\Response
     */
    public function show(TblPenerbitanDt $tblPenerbitanDt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblPenerbitanDt  $tblPenerbitanDt
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data= DB::table('tbl_penerbitan_dts') 
        ->join('tbl_profil_tahap_pencapaians', 'tbl_penerbitan_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
        ->join('tbl_profil_markahs', 'tbl_penerbitan_dts.idmarkah', '=', 'tbl_profil_markahs.id')
        ->join('tbl_profil_jawatans', 'tbl_penerbitan_dts.jawatanid', '=', 'tbl_profil_jawatans.id') 
        ->select('*')
        ->where('tbl_penerbitan_dts.id','=',$id) 
        ->first();

         $markah = TblProfilMarkah::all();
         $datas = TblPenerbitanDt::find($id);
         $tahappencapaian = TblProfilTahapPencapaian::all();
         $jawatan = TblProfilJawatan::all();

        return view('profiling.penerbitan.edit')
        -> with(compact('data'))
        -> with(compact('datas'))
        -> with(compact('markah'))
        -> with(compact('tahappencapaian'))
        -> with(compact('jawatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblPenerbitanDt  $tblPenerbitanDt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate(
            //validation rules
            [
                'idmarkah' => ['required'],
                'idTP' => ['required'],
                'jawatanid' => ['required'],
            ],
            //validation messages
            [
                'idmarkah.required' => 'Sila pilih markah',
                'idTP.required' => 'Sila pilih Tahap pencapaian',
                'jawatanid.required' => 'Sila pilih jawatan',
            ]
        );

        TblPenerbitanDt::find($id)->update([
            'idmarkah' => $request->input('idmarkah'),
            'idTP' => $request->input('idTP'),
            'jawatanid' => $request->input('jawatanid'),
        ]);
        return redirect()->route('penerbitan.index')->with('success', 'penerbitan updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblPenerbitanDt  $tblPenerbitanDt
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblPenerbitanDt::find($id)->delete();
        return redirect('/penerbitan')
            ->with('success', 'Data penerbitan deleted successfully');
    }
}
