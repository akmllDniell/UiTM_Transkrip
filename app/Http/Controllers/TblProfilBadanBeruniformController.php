<?php

namespace App\Http\Controllers;

use App\Models\TblProfilBadanBeruniform;
use Illuminate\Http\Request;

class TblProfilBadanBeruniformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TblProfilBadanBeruniform::all();
        return view('parameter.badanuniform.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parameter.badanuniform.create');
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
            [
                'uniform' => ['required','min:3','max:100'],
                'singkatanuniform' => ['required','max:20']
            ],
            [
                'uniform.required' => 'Sila Masukkan Nama Uniform',
                'singkatanuniform.required' => 'Sila Masukkan Nama Singkatan Uniform',
            ]
            );

            TblProfilBadanBeruniform::create([
                'badanuniform'=>$request->input('uniform'),
                'singkatan'=>$request->input('singkatanuniform'),
            ]);

            return redirect('/badanuniform')->with('success', 'Data saved.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblProfilBadanBeruniform  $tblProfilBadanBeruniform
     * @return \Illuminate\Http\Response
     */
    public function show(TblProfilBadanBeruniform $tblProfilBadanBeruniform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblProfilBadanBeruniform  $tblProfilBadanBeruniform
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataid = TblProfilBadanBeruniform::find($id);
        return view('parameter.badanuniform.edit',compact('dataid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblProfilBadanBeruniform  $tblProfilBadanBeruniform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'uniform' => ['required','min:3','max:100'],
                'singkatanuniform' => ['required','max:20']
            ],
            [
                'uniform.required' => 'Sila Masukkan Nama Uniform',
                'singkatanuniform.required' => 'Sila Masukkan Nama Singkatan Uniform',
            ]
            );

       

        TblProfilBadanBeruniform::find($id)->update([
            'badanuniform'=>$request->input('uniform'),
            'singkatan'=>$request->input('singkatanuniform'),
        ]);
        return redirect()->route('badanuniform.index')->with('success', 'uniform updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblProfilBadanBeruniform  $tblProfilBadanBeruniform
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TblProfilBadanBeruniform::find($id)->delete();
        return redirect()->route('badanuniform.index')
            ->with('success', 'User deleted successfully');
    }
}
