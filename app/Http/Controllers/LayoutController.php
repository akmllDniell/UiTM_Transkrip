<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LayoutController extends Controller
{
    public function index()
    {
        // $user = Auth::user();
        $data = DB::table('tbl_aktiviti')        
         ->select('NamaAktiviti')
         //->where('course.Cname','=','STA')  where statement
         ->get();
         
        return view('layout.main',compact('data'))->with([
            'user' => Auth::user(),
        ]);
    }
}
