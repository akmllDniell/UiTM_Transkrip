<?php

namespace App\Http\Controllers;


use App\Models\TblSukan;
use Illuminate\Http\Request;

class TblSukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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

            return redirect('/sukan')->with('successjenissukan', "succesfully save jenis sukan ($JenisSukan) ");
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

        return view('profiling.sukan.jenissukan.edit',compact('datas'));
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
        $JenisSukan = $request->jenissukan;
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
        return redirect()->route('sukan.index')->with('successjenissukan', "Jenis sukan updated to $JenisSukan ");
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
            ->with('deletejenisukan', 'Data Jenis sukan deleted successfully');
    }

}