<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LayoutController extends Controller
{
    public function index()
    {
        //$user = Auth::user();
        //$data = DB::table('tbl_aktiviti')        
        //  ->select('NamaAktiviti')
        //  //->where('course.Cname','=','STA')  where statement
        //  ->get();
        // $useradmin = DB::('users')->
        
        $userCount = User::count();
        return view('profiling.main',compact('userCount'))->with([
            'user' => Auth::user(),
        ]);
    }
}
