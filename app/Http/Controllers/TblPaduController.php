<?php

namespace App\Http\Controllers;

use App\Models\TblPadu;
use Illuminate\Http\Request;

class TblPaduController extends Controller
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
        return view('profiling.padu.jenispadu.create');
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
                'jenispadu' => ['required', 'min:3', 'max:100'],
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'code.size' => 'code mestilah 3 aksara',
                'code.unique' => 'code telah wujud'
            ]
        );

        TblPadu::create([
            'padu' => $request->input('jenispadu')
        ]);
        //redirect routes
        return redirect('/padu')->with('success', 'Data saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblPadu  $tblPadu
     * @return \Illuminate\Http\Response
     */
    public function show(TblPadu $tblPadu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblPadu  $tblJenisPadu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = TblPadu::find($id);
        return view('profiling.padu.jenispadu.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblPadu  $tblJenisPadu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // Validation for required fields (and using some regex to validate our numeric value)
         $request->validate(
            //validation rules
            [
                'padu' => ['required', 'min:3', 'max:100']
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'singkatan.size' => 'code mestilah 3 aksara',
                'singkatan.unique' => 'code telah wujud'
            ]
        );

        TblPadu::find($id)->update($request->all());
        return redirect()->route('padu.index')->with('success', 'Jenis Program Padu updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblJenisPadu  $tblJenisPadu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblPadu::find($id)->delete();
        return redirect()->route('padu.index')
            ->with('success', 'User deleted successfully');
    }
}
