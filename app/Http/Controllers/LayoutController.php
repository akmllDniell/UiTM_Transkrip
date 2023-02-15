<?php

namespace App\Http\Controllers;

use App\Models\TblProfilBadanBeruniform;
use App\Models\TblSukan;
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
        $userCount = DB::table('users')         
        ->where('role','=','1') 
        ->count();        

        $studentcount= DB::table('users')         
        ->where('role','=','2') 
        ->count();

        $uniform = TblProfilBadanBeruniform::count();
        $sukan = TblSukan::count();
        

        return view('profiling.main')
        ->with(compact('userCount'))
        ->with(compact('studentcount'))
        ->with(compact('uniform'))
        ->with(compact('sukan'))
        ->with([
            'user' => Auth::user(),
        ]);
    }
}
