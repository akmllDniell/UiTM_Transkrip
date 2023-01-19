<?php

namespace App\Http\Controllers;

use App\Models\TblSijil;
use Illuminate\Http\Request;

class TblSijilController extends Controller
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
        return view('profiling.sijil.jenisSijil.create');
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
                'jenissijil' => ['required', 'min:3', 'max:100'],
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'code.size' => 'code mestilah 3 aksara',
                'code.unique' => 'code telah wujud'
            ]
        );

        TblSijil::create([
            'sijil' => $request->input('jenissijil')
        ]);
        //redirect routes
        return redirect('/sijil')->with('success', 'Data saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblSijil  $tblSijil
     * @return \Illuminate\Http\Response
     */
    public function show(TblSijil $tblSijil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblSijil  $tblJenisSijil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = TblSijil::find($id);
        return view('profiling.sijil.jenissijil.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblSijil  $tblJenisSijil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // Validation for required fields (and using some regex to validate our numeric value)
         $request->validate(
            //validation rules
            [
                'jenissijil' => 'required'
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',                
            ]
        );

        TblSijil::find($id)->update([
            'sijil' => $request->input('jenissijil'),
        ]);
        return redirect()->route('sijil.index')->with('successjenissukan', "Jenis sukan succesfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblJenisSijil  $tblJenisSijil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblSijil::find($id)->delete();
        return redirect()->route('sijil.index')
            ->with('success', 'User deleted successfully');
    }
}
