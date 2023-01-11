<?php

namespace App\Http\Controllers;

use App\Models\ModelJenisSukan;
use App\Models\TblJawatanUniform;
use App\Models\TblProfilBadanBeruniform;
use App\Models\TblProfilMarkah;
use App\Models\TblProfilTahapPencapaian;
use App\Models\TblSukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\String\b;

class TblSukanController extends Controller
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
        return view('profiling.sukan.jenissukan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $JenisSukan = $request->jenissukan;
       
        $request->validate([
            // 'id'=> 'required|unique:table, column, except,id'
             'jenissukan'=> 'required',                       
    
         ],
         
         [
             // 'id.unique' => 'Number student sudah ada didalam sistem',
             // 'id.required' => 'Number Student harus diletakkan',         
             'jenissukan.required' => 'Sila masukkan Nama Sukan',         
             // 'checkbox2'
         ]);
    
         TblSukan::create([
            'jenissukan' => $request->input('jenissukan')]);

            return redirect('/sukan')->with('successsimpanjenissukan', "succesfully save jenis sukan ($JenisSukan) ");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblSukan  $tblSukan
     * @return \Illuminate\Http\Response
     */
    public function show(TblSukan $tblSukan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblSukan  $tblSukan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $datas = TblSukan::find($id);

        return view('profiling.sukan.editjenissukan',compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblSukan  $tblSukan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate(
            //validation rules
            [
                'jenissukan' => ['required']
            ],

            //validation messages
            [
                'required' => 'sila masukkan jenis sukan', 
            ]
        );
        

        TblSukan::find($id)->update($request->all());
        return redirect()->route('sukan.index')->with('success', 'Jenis sukan updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblSukan  $tblSukan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblSukan::find($id)->delete();
        return redirect('/sukan')
            ->with('success', 'Data sukan deleted successfully');
    }

}