<?php

namespace App\Http\Controllers;

use App\Models\TblProfilTahapHep;
use Illuminate\Http\Request;

class TblProfilTahapHepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = TblProfilTahapHep::all();
        return view('parameter.tahaphep.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parameter.tahaphep.create');
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
                'hep' => ['required', 'min:3', 'max:100'],
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'code.size' => 'code mestilah 3 aksara',
                'code.unique' => 'code telah wujud'
            ]
        );

        TblProfilTahapHep::create([
            'hep' => $request->input('hep')
        ]);
        //redirect routes
        return redirect('/tahaphep')->with('success', 'Data saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblProfilTahapHep  $tblProfilTahapHep
     * @return \Illuminate\Http\Response
     */
    public function show(TblProfilTahapHep $tblProfilTahapHep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblProfilTahapHep  $tblProfilTahapHep
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = TblProfilTahapHep::find($id);
        return view('parameter.tahaphep.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblProfilTahapHep  $tblProfilTahapHep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate(
            //validation rules
            [
                'hep' => ['required', 'min:3', 'max:100']
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'singkatan.size' => 'code mestilah 3 aksara',
                'singkatan.unique' => 'code telah wujud'
            ]
        );

        TblProfilTahapHep::find($id)->update($request->all());
        return redirect()->route('tahaphep.index')->with('success', 'Tahap Hep updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblProfilTahapHep  $tblProfilTahapHep
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblProfilTahapHep::find($id)->delete();
        return redirect()->route('tahaphep.index')
            ->with('success', 'User deleted successfully');
    }
}
