<?php

namespace App\Http\Controllers;

use App\Models\TblKebudayaan;
use App\Models\TblKebudayaanDt;
use Illuminate\Http\Request;

class TblKebudayaanController extends Controller
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
        return view('profiling.kebudayaan.jeniskebudayaan.create');
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
                'jeniskebudayaan' => ['required', 'min:3', 'max:100'],
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'code.size' => 'code mestilah 3 aksara',
                'code.unique' => 'code telah wujud'
            ]
        );

        TblKebudayaan::create([
            'jeniskebudayaan' => $request->input('jeniskebudayaan')
        ]);
        //redirect routes
        return redirect('/kebudayaan')->with('success', 'Data saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblKebudayaan  $tblkebudayaan
     * @return \Illuminate\Http\Response
     */
    public function show(TblKebudayaan $tblkebudayaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblKebudayaan $tblJenisKebudayaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = TblKebudayaan::find($id);
        return view('profiling.kebudayaan.jeniskebudayaan.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblKebudayaan  $tblJenisKebudayaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // Validation for required fields (and using some regex to validate our numeric value)
         $request->validate(
            //validation rules
            [
                'jeniskebudayaan' => ['required', 'min:3', 'max:100']
            ],
            //validation messages
            [
                'required' => 'hahah : attribute diperlukan',
                'singkatan.size' => 'code mestilah 3 aksara',
                'singkatan.unique' => 'code telah wujud'
            ]
        );

        TblKebudayaan::find($id)->update($request->all());
        return redirect()->route('kebudayaan.index')->with('success', 'Jenis Anugerah/Sijil Kecemerlangan/Pingat updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblJenisKebudayaan  $tblJenisKebudayaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblKebudayaan::find($id)->delete();
        return redirect()->route('kebudayaan.index')
            ->with('success', 'User deleted successfully');
    }
}
