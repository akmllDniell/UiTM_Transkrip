<?php

namespace App\Http\Controllers;

use App\Models\TblStudent;
use Illuminate\Http\Request;
use Illuminate\Routing\ViewController;

class TblStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.main');
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
     * @param  \App\Models\TblStudent  $tblStudent
     * @return \Illuminate\Http\Response
     */
    public function show(TblStudent $tblStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TblStudent  $tblStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(TblStudent $tblStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TblStudent  $tblStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TblStudent $tblStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TblStudent  $tblStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(TblStudent $tblStudent)
    {
        //
    }
}
