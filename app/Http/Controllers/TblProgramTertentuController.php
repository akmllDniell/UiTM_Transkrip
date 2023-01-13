<?php

namespace App\Http\Controllers;

use App\Models\TblProgramTertentu;
use Illuminate\Http\Request;

class TblProgramTertentuController extends Controller
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
        return view('profiling.programtertentu.jenisprogramtertentu.create');
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
                'jenisprogramtertentu' => ['required', 'min:3', 'max:100'],
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'code.size' => 'code mestilah 3 aksara',
                'code.unique' => 'code telah wujud'
            ]
        );

        TblProgramTertentu::create([
            'programtertentu' => $request->input('jenisprogramtertentu')
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
     * @param  \App\Models\TblProgramTertentu  $tblJenisProgramTertentu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = TblProgramTertentu::find($id);
        return view('profiling.programtertentu.jenisprogramtertentu.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblProgramTertentu  $tblJenisProgramTertentu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // Validation for required fields (and using some regex to validate our numeric value)
         $request->validate(
            //validation rules
            [
                'programtertentu' => ['required', 'min:3', 'max:100']
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'singkatan.size' => 'code mestilah 3 aksara',
                'singkatan.unique' => 'code telah wujud'
            ]
        );

        TblProgramTertentu::find($id)->update($request->all());
        return redirect()->route('programtertentu.index')->with('success', 'Jenis Program Tertentu updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblJenisProgramTertentu  $tblJenisProgramTertentu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblProgramTertentu::find($id)->delete();
        return redirect()->route('programtertentu.index')
            ->with('success', 'User deleted successfully');
    }
}
