<?php

namespace App\Http\Controllers;

use App\Models\TblProfilBadanBeruniform;
use App\Models\TblProfilJawatanUniform;
use App\Models\TblProfilMarkah;
use App\Models\TblUniform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TblUniformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TblProfilJawatanUniform::all();
        $uniform = TblProfilBadanBeruniform::all();

        return view('profiling.uniform.index',compact('data'),compact('uniform'));
    }

   
    public function create($iduni)
    {
        $markah = TblProfilMarkah::all();            
        $uni = TblProfilBadanBeruniform::find($iduni);


        $jawatanuniform= DB::table('tbl_profil_jawatan_uniforms')                         
        ->select('*','tbl_profil_jawatan_uniforms.id as idjwt')
        ->where('tbl_profil_jawatan_uniforms.idBadanUniform','=',$iduni,) 
        ->get();  
        
        return view('profiling.uniform.create')        
        ->with(compact('jawatanuniform'))
        ->with(compact('markah'))
        ->with(compact('uni'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uniform = $request->uni;

        $request->validate(
            //validation rules
            [                
                'markah'=> 'required',
                'jwt'=> 'required',
                'uni'=>'required',
            ],
            //validation messages
            [                
                'markah.required' => 'SIla pilih markah anda',
                'jwt.required' => 'SIla pilih jawatan anda',
                'uni.required'=>'sila '
            ]
            );

            TblUniform::create([                                
                'idmarkah' => $request->input('markah'),
                'jwtuni' => $request->input('jwt'),
                'bdnuni' => $request->input('uni')
            ]);
            //redirect routes
            return redirect("/uniform/show/$uniform")->with('success', 'Data saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblUniform  $tblUniform
     * @return \Illuminate\Http\Response
     */
    public function show($iduni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblUniform  $tblUniform
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        

        $data= DB::table('tbl_uniforms')         
        ->join('tbl_profil_markahs', 'tbl_uniforms.idmarkah', '=', 'tbl_profil_markahs.id') 
        ->join('tbl_profil_badan_beruniforms', 'tbl_uniforms.bdnuni', '=', 'tbl_profil_badan_beruniforms.id') 
        ->join('tbl_profil_jawatan_uniforms','tbl_uniforms.jwtuni','=','tbl_profil_jawatan_uniforms.id')
        ->select('*' , 'tbl_profil_markahs.id as idm', 'tbl_uniforms.id as iduniform','tbl_profil_badan_beruniforms.id as idbadanberuniform','tbl_profil_jawatan_uniforms.id as idjawatan')
        ->where('tbl_uniforms.id','=',$id,) 
        ->first(); 

         $markah = TblProfilMarkah::all();
         $datas = TblUniform::find($id);         
         $jawatanuniform = TblProfilJawatanUniform::all();

        return view('profiling.uniform.edit')
        -> with(compact('data'))
        -> with(compact('datas'))
        -> with(compact('markah'))        
        -> with(compact('jawatanuniform'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblUniform  $tblUniform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $uniform = $request->uni;
        $request->validate(
            //validation rules
            [
                'idmarkah' => ['required'],
                'jawatanid' => ['required'],
                'uni'=>'required',
            ],
            //validation messages
            [
                'idmarkah.required' => 'Sila pilih markah',
                'jawatanid.required' => 'Sila pilih Jawatan Anda',
                'uni.required'=>'sila '
            ]
        );

        TblUniform::find($id)->update([
            'idmarkah' => $request->input('idmarkah'),
            'jwtuni' => $request->input('jawatanid'),
            'bdnuni' => $request->input('uni')
        ]);
        return redirect("/uniform/show/$uniform")->with('success', "uniform updated");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblUniform  $tblUniform
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        TblUniform::find($id)->delete();
        return redirect()->back()
            ->with('delete', 'Data uniform deleted successfully');
    }

    public function showiduni($iduni)
    {
        $data= DB::table('tbl_uniforms')         
        ->join('tbl_profil_markahs', 'tbl_uniforms.idmarkah', '=', 'tbl_profil_markahs.id') 
        ->join('tbl_profil_badan_beruniforms', 'tbl_uniforms.bdnuni', '=', 'tbl_profil_badan_beruniforms.id') 
        ->join('tbl_profil_jawatan_uniforms','tbl_uniforms.jwtuni','=','tbl_profil_jawatan_uniforms.id')
        ->select('*' , 'tbl_profil_markahs.id as idm', 'tbl_uniforms.id as iduniform','tbl_profil_badan_beruniforms.id as idbadanuniform','tbl_profil_jawatan_uniforms.id as idjawatan')
        ->where('tbl_profil_badan_beruniforms.id','=',$iduni,) 
        ->get();              

        $uni = TblProfilBadanBeruniform::find($iduni);

        return view('profiling.uniform.show')
        ->with(compact('data'))        
        ->with(compact('uni')); 
    }
}
