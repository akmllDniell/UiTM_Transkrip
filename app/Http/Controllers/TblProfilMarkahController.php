<?php

namespace App\Http\Controllers;

use App\Models\TblProfilMarkah;
use Illuminate\Http\Request;

class TblProfilMarkahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TblProfilMarkah::all();
        return view ('parameter.markah.index' , compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parameter.markah.create');
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
                'markah' => ['required','numeric']
            ],
             //validation messages
             [
                'required' => 'Medan : attribute diperlukan',
                'numeric' => 'Markah mesti dalam bentuk nombor',
                'code.size' => 'code mestilah 3 aksara',
                'code.unique' => 'code telah wujud'
            ]
      );

      TblProfilMarkah::create([
        'markah' => $request->input('markah')
      ]);
      //redirect routes
      return redirect('/markah')->with('success', 'Data saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblProfilMarkah  $tblProfilMarkah
     * @return \Illuminate\Http\Response
     */
    public function show(TblProfilMarkah $tblProfilMarkah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblProfilMarkah  $tblProfilMarkah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = TblProfilMarkah::find($id);
        return view('parameter.markah.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblProfilMarkah  $tblProfilMarkah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate(
            //validation rules
            [
                'markah' => ['required','numeric']
            ],

            //validation messages
            [
                'required' => 'Medan : attribute diperlukan',
                'numeric' => 'Markah mesti dalam bentuk nombor',
                'code.size' => 'code mestilah 3 aksara',
                'code.unique' => 'code telah wujud'
            ]
        );

        
        TblProfilMarkah::find($id)->update($request->all());
        return redirect()->route('markah.index')->with('success', 'Markah updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblProfilMarkah  $tblProfilMarkah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        TblProfilMarkah::find($id)->delete();
        return redirect()->route('markah.index')
            ->with('success', 'User deleted successfully');
    }
}
