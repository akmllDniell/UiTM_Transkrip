<?php

namespace App\Http\Controllers;

use App\Models\ModelJenisSukan;
use App\Models\TblJawatanUniform;
use App\Models\TblJenisSukan;
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
        $data = DB::table('tbl_sukans')   
         ->join('tbl_profil_tahap_pencapaians', 'tbl_sukans.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
         ->join('tbl_profil_markahs', 'tbl_sukans.idmarkah', '=', 'tbl_profil_markahs.id') 
         ->select('tbl_sukans.*','tbl_profil_tahap_pencapaians.*','tbl_profil_markahs.*','tbl_sukans.id as sukanid','tbl_profil_markahs.id as markahid','tbl_profil_tahap_pencapaians.id as tpid')
         ->get();

        $jenissukan = DB::table('tbl_jenis_sukans')->select('*')->get();
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
                'TP' => 'required',
                'markah'=> 'required',
            ],
            //validation messages
            [
                'TP.required' => 'SIla pilih Tahap pencapaian anda',
                'markah.required' => 'SIla pilih markah anda'
            ]
        );

        TblSukan::create([
            'idTP' => $request->input('TP'),
            'idmarkah' => $request->input('markah')
        ]);
        //redirect routes
        return redirect('/sukan')->with('success', 'Data saved.');
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
        $data= DB::table('tbl_sukans') 
        ->join('tbl_profil_tahap_pencapaians', 'tbl_sukans.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
        ->join('tbl_profil_markahs', 'tbl_sukans.idmarkah', '=', 'tbl_profil_markahs.id') 
        ->select('*')
        ->where('tbl_sukans.id','=',$id) 
        ->first();

        // $datasukan = DB::table('tbl_sukans')   
        //  ->join('tbl_profil_tahap_pencapaians', 'tbl_sukans.idTP', '=', 'tbl_profil_tahap_pencapaians.id') 
        //  ->join('tbl_profil_markahs', 'tbl_sukans.idmarkah', '=', 'tbl_profil_markahs.id') 
        //  ->select('tbl_sukans.*','tbl_profil_tahap_pencapaians.*','tbl_profil_markahs.*','tbl_sukans.id as sukanid','tbl_profil_markahs.id as markahid','tbl_profil_tahap_pencapaians.id as tpid')
        //  ->where('tbl_sukans.id','=','$id') 
        //  ->get();

         $markah = TblProfilMarkah::all();
         $datas = TblSukan::find($id);
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
     * @param  \App\Models\TblSukan  $tblSukan
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

        TblSukan::find($id)->update([
            'idmarkah' => $request->input('idmarkah'),
            'idTP' => $request->input('idTP'),
        ]);
        return redirect()->route('sukan.index')->with('success', 'Sukan updated.');
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

    public function storejenissukan(Request $request)
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
    
         TblJenisSukan::create([
            'jenissukan' => $request->input('jenissukan')]);

            return redirect('/sukan')->with('successsimpanjenissukan', "succesfully save jenis sukan ($JenisSukan) ");
    }

    public function editjenissukan($id)
    {
        $datas = TblJenisSukan::find($id);

        return view('profiling.sukan.editjenissukan',compact('datas'));
    }

    public function updatejenissukan(request $request ,$id) 
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
                

                TblJenisSukan::find($id)->update($request->all());
                return redirect()->route('sukan.index')->with('success', 'Jenis sukan updated.');
    }

    public function destroyjenissukan($id)
    {
        TblJenisSukan::find($id)->delete();
        return redirect('/sukan')
            ->with('success', 'Data sukan deleted successfully');
    }
}
