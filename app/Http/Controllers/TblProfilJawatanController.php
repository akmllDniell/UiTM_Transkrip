<?php

namespace App\Http\Controllers;

use App\Models\TblProfilJawatan;
use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;

class TblProfilJawatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        $data = TblProfilJawatan::all();
        return view('parameter.jawatan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parameter.jawatan.create');
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
                'singkatan' => ['required', 'min:3', 'max:10']
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'code.size' => 'code mestilah 3 aksara',
                'code.unique' => 'code telah wujud'
            ]
        );

        TblProfilJawatan::create([
            'jawatan' => $request->input('name'),
            'singkatan' => $request->input('singkatan'),
        ]);
        //redirect routes
        return redirect('/jawatan')->with('success', 'Stock saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblProfilJawatan  $tblProfilJawatan
     * @return \Illuminate\Http\Response
     */
    public function show(TblProfilJawatan $tblProfilJawatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblProfilJawatan  $tblProfilJawatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = TblProfilJawatan::find($id);
        return view('parameter.jawatan.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblProfilJawatan  $tblProfilJawatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate(
            //validation rules
            [
                'name' => ['required', 'min:3', 'max:100'],
                'singkatan' => ['required', 'min:3', 'max:10']
            ],
            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'singkatan.size' => 'code mestilah 3 aksara',
                'singkatan.unique' => 'code telah wujud'
            ]
        );

        TblProfilJawatan::find($id)->update($request->all());
        return redirect()->route('jawatan.index')->with('success', 'Jawatan updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblProfilJawatan  $tblProfilJawatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblProfilJawatan::find($id)->delete();
        return redirect()->route('jawatan.index')
            ->with('success', 'User deleted successfully');
    }
}
