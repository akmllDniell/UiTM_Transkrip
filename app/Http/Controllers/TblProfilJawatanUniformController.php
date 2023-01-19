<?php

namespace App\Http\Controllers;

use App\Models\TblJawatanUniform;
use App\Models\TblProfilBadanBeruniform;
use App\Models\TblProfilJawatanUniform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TblProfilJawatanUniformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tbl_profil_jawatan_uniforms')   
         ->join('tbl_profil_badan_beruniforms', 'tbl_profil_jawatan_uniforms.idBadanUniform', '=', 'tbl_profil_badan_beruniforms.id')          
         ->select('*', 'tbl_profil_jawatan_uniforms.id as idju')
         ->get();
        
        

        return view('parameter.jawatanuniform.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = TblProfilBadanBeruniform::all();

        return view('parameter.jawatanuniform.create',compact('data'));
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
                'jawatanuniform' => ['required', 'min:3', 'max:100'],
                'BU' => 'required',
            ],
            //validation messages
            [
                'jawatanuniform.required' => 'Sila Masukkan Nama Jawatan Badan Beruniform',
                'BU.required' => 'Sila Pilih Nama Badan Beruniform',                
            ]
        );

        TblProfilJawatanUniform::create([
            'jawatanuniform' => $request->input('jawatanuniform'),
            'idBadanUniform' => $request->input('BU'),
        ]);
        //redirect routes
        return redirect('/jawatanuniform')->with('success', 'Data saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblProfilJawatanUniform  $tblProfilJawatanUniform
     * @return \Illuminate\Http\Response
     */
    public function show(TblProfilJawatanUniform $tblProfilJawatanUniform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblProfilJawatanUniform  $tblProfilJawatanUniform
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= DB::table('tbl_profil_jawatan_uniforms') 
        ->join('tbl_profil_badan_beruniforms', 'tbl_profil_jawatan_uniforms.idBadanUniform', '=', 'tbl_profil_badan_beruniforms.id')       
        ->select('*' , 'tbl_profil_badan_beruniforms.id as idbu', 'tbl_profil_jawatan_uniforms.id as idju')
        ->where('tbl_profil_jawatan_uniforms.id','=',$id) 
        ->first();

        // $datasukan = DB::table('tbl_sukan_dts')   
        //  ->join('tbl_profil_tahap_pencapaians', 'tbl_sukan_dts.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
        //  ->join('tbl_profil_markahs', 'tbl_sukan_dts.idmarkah', '=', 'tbl_profil_markahs.id') 
        //  ->select('tbl_sukan_dts.*','tbl_profil_tahap_pencapaians.*','tbl_profil_markahs.*','tbl_sukan_dts.id as sukanid','tbl_profil_markahs.id as markahid','tbl_profil_tahap_pencapaians.id as tpid')
        //  ->where('tbl_sukan_dts.id','=','$id') 
        //  ->get();

         $badanuniform = TblProfilBadanBeruniform::all();
         $datas = TblProfilJawatanUniform::find($id);

        return view('parameter.jawatanuniform.edit')
        -> with(compact('data'))
        -> with(compact('datas'))
        -> with(compact('badanuniform'));
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblProfilJawatanUniform  $tblProfilJawatanUniform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            //validation rules
            [
                'jawatanuniform' => ['required'],
                'badanuniform' => ['required'],
            ],
            //validation messages
            [
                'jawatanuniform.required' => 'Sila pilih markah',
                'badanuniform.required' => 'Sila pilih Tahap pencapaian',
            ]
        );

        TblProfilJawatanUniform::find($id)->update([
            'jawatanuniform' => $request->input('jawatanuniform'),
            'idBadanUniform' => $request->input('badanuniform'),
        ]);
        return redirect()->route('jawatanuniform.index')->with('success', "jawatan uniform  updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblProfilJawatanUniform  $tblProfilJawatanUniform
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            TblProfilJawatanUniform::find($id)->delete();
            return redirect()->route('jawatanuniform.index')
                ->with('success', 'jawatan uniform deleted successfully');
        }
    }
}
