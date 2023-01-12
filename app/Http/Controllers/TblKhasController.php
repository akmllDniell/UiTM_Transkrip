<?php

namespace App\Http\Controllers;

use App\Models\TblKhas;
use Illuminate\Http\Request;

class TblKhasController extends Controller
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
        return view('profiling.khas.jeniskhas.create');
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
                'jeniskhas' => ['required', 'min:3', 'max:100'],
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'code.size' => 'code mestilah 3 aksara',
                'code.unique' => 'code telah wujud'
            ]
        );

        TblKhas::create([
            'khas' => $request->input('jeniskhas')
        ]);
        //redirect routes
        return redirect('/khas')->with('success', 'Data saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblKhas  $tblKhas
     * @return \Illuminate\Http\Response
     */
    public function show(TblKhas $tblKhas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblKhas  $tblJenisKhas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = TblKhas::find($id);
        return view('profiling.khas.jeniskhas.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblKhas  $tblJenisKhas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // Validation for required fields (and using some regex to validate our numeric value)
         $request->validate(
            //validation rules
            [
                'khas' => ['required', 'min:3', 'max:100']
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'singkatan.size' => 'code mestilah 3 aksara',
                'singkatan.unique' => 'code telah wujud'
            ]
        );

        TblKhas::find($id)->update($request->all());
        return redirect()->route('khas.index')->with('success', 'Jenis Anugerah/khas Kecemerlangan/Pingat updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblJenisKhas  $tblJenisKhas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblKhas::find($id)->delete();
        return redirect()->route('khas.index')
            ->with('success', 'User deleted successfully');
    }
}
