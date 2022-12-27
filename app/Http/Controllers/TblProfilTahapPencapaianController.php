<?php

namespace App\Http\Controllers;

use App\Models\TblProfilTahapPencapaian;
use Illuminate\Http\Request;

class TblProfilTahapPencapaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = TblProfilTahapPencapaian::all();
        return view('parameter.tahappencapaian.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parameter.tahappencapaian.create');
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
                'name' => ['required', 'min:3', 'max:100'],
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'code.size' => 'code mestilah 3 aksara',
                'code.unique' => 'code telah wujud'
            ]
        );

        TblProfilTahapPencapaian::create([
            'pencapaian' => $request->input('name')
        ]);
        //redirect routes
        return redirect('/tahappencapaian')->with('success', 'Data saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblProfilTahapPencapaian  $tblProfilTahapPencapaian
     * @return \Illuminate\Http\Response
     */
    public function show(TblProfilTahapPencapaian $tblProfilTahapPencapaian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblProfilTahapPencapaian  $tblProfilTahapPencapaian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = TblProfilTahapPencapaian::find($id);
        return view('parameter.tahappencapaian.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblProfilTahapPencapaian  $tblProfilTahapPencapaian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate(
            //validation rules
            [
                'name' => ['required', 'min:3', 'max:100']
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'singkatan.size' => 'code mestilah 3 aksara',
                'singkatan.unique' => 'code telah wujud'
            ]
        );

        TblProfilTahapPencapaian::find($id)->update($request->all());
        return redirect()->route('tahappencapaian.index')->with('success', 'Tahap Pencapaian updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblProfilTahapPencapaian  $tblProfilTahapPencapaian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblProfilTahapPencapaian::find($id)->delete();
        return redirect()->route('tahappencapaian.index')
            ->with('success', 'User deleted successfully');
    }
}
