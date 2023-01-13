<?php

namespace App\Http\Controllers;

use App\Models\TblPenerbitan;
use Illuminate\Http\Request;

class TblPenerbitanController extends Controller
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
        return view('profiling.penerbitan.jenispenerbitan.create');
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
                'jenispenerbitan' => ['required', 'min:3', 'max:100'],
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'code.size' => 'code mestilah 3 aksara',
                'code.unique' => 'code telah wujud'
            ]
        );

        TblPenerbitan::create([
            'jenispenerbitan' => $request->input('jenispenerbitan')
        ]);
        //redirect routes
        return redirect('/penerbitan')->with('success', 'Data saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblPenerbitan  $tblPenerbitan
     * @return \Illuminate\Http\Response
     */
    public function show(TblPenerbitan $tblPenerbitan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblPenerbitan  $tblPenerbitan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = TblPenerbitan::find($id);
        return view('profiling.penerbitan.jenispenerbitan.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblPenerbitan  $tblPenerbitan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // Validation for required fields (and using some regex to validate our numeric value)
         $request->validate(
            //validation rules
            [
                'jenispenerbitan' => ['required', 'min:3', 'max:100']
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'singkatan.size' => 'code mestilah 3 aksara',
                'singkatan.unique' => 'code telah wujud'
            ]
        );

        TblPenerbitan::find($id)->update($request->all());
        return redirect()->route('penerbitan.index')->with('success', 'Jenis Penerbitan/Majalah updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblPenerbitan  $tblPenerbitan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblPenerbitan::find($id)->delete();
        return redirect()->route('penerbitan.index')
            ->with('success', 'User deleted successfully');
    }
}
