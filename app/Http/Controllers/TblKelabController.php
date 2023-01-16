<?php

namespace App\Http\Controllers;

use App\Models\TblKelab;
use Illuminate\Http\Request;

class TblKelabController extends Controller
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
        return view('profiling.kelab.jeniskelab.create');
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
                'jeniskelab' => ['required', 'min:3', 'max:100'],
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'code.size' => 'code mestilah 3 aksara',
                'code.unique' => 'code telah wujud'
            ]
        );

        TblKelab::create([
            'jeniskelab' => $request->input('jeniskelab')
        ]);
        //redirect routes
        return redirect('/kelab')->with('success', 'Data saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblKelab  $tblkelab
     * @return \Illuminate\Http\Response
     */
    public function show(TblKelab $tblKelab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblKelab $tblKelab
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = TblKelab::find($id);
        return view('profiling.kelab.jeniskelab.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblKelab $tblKelab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // Validation for required fields (and using some regex to validate our numeric value)
         $request->validate(
            //validation rules
            [
                'jeniskelab' => ['required', 'min:3', 'max:100']
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'singkatan.size' => 'code mestilah 3 aksara',
                'singkatan.unique' => 'code telah wujud'
            ]
        );

        TblKelab::find($id)->update($request->all());
        return redirect()->route('kelab.index')->with('success', 'Jenis Persatuan/Kelab updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblKelab  $tblKelab
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblKelab::find($id)->delete();
        return redirect()->route('kelab.index')
            ->with('success', 'User deleted successfully');
    }
}
