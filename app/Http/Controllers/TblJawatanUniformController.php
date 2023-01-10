<?php

namespace App\Http\Controllers;

use App\Models\TblJawatanUniform;
use App\Models\TblProfilBadanBeruniform;
use Database\Seeders\TblJawatanUniformSeeder;
use Illuminate\Http\Request;

class TblJawatanUniformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TblJawatanUniform::all();
        $uniform = TblProfilBadanBeruniform::all();

        return view('profiling.uniform',compact('data'),compact('uniform'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TblJawatanUniform  $tblJawatanUniform
     * @return \Illuminate\Http\Response
     */
    public function show(TblJawatanUniform $tblJawatanUniform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblJawatanUniform  $tblJawatanUniform
     * @return \Illuminate\Http\Response
     */
    public function edit(TblJawatanUniform $tblJawatanUniform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblJawatanUniform  $tblJawatanUniform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TblJawatanUniform $tblJawatanUniform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblJawatanUniform  $tblJawatanUniform
     * @return \Illuminate\Http\Response
     */
    public function destroy(TblJawatanUniform $tblJawatanUniform)
    {
        //
    }
}
