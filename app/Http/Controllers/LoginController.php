<?php

namespace App\Http\Controllers;

use App\Models\ModelAktiviti;
use App\Models\ModelJenisSukan;
use App\Models\ModelMarkah;
use App\Models\ModelTP;
use App\Models\ModelTPdanMarkahSukan;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        if(Auth::user()){
            // if($user -> level == '1'){
            //     return redirect()->intended('admin');
            // }
            // elseif($user -> level == '2'){
            //     return redirect()->intended('seller');
            // }
            return redirect()->intended('home');
        }
        return View('login.view_login');
    }

    public function loginproses(Request $req){
        $req->validate([
            'username' => 'required',
            'password' => 'required'
        ],
        [
            'username.required' => 'username perlu diisi',
            'password.required' => 'password perlu diisi'
        ]
    );

    $betulketak = $req->only('username','password');

    if(Auth::attempt($betulketak)){
        $req->session()->regenerate();

        $user = Auth::user();
        // if($user -> level == '1'){
        //     return redirect()->intended('admin');
        // }
        // elseif($user -> level == '2'){
        //     return redirect()->intended('seller');
        // }
        
        if($user->username=="admin"){
            return redirect()->intended('home');
        }
        else if($user->username=="seller")
        {
            return redirect()->intended('/student');
        }
        else{
            return redirect()->intended('/'); 
        }
        
    

    }

        return back()->withErrors([
            'username'=> 'Maaf username atau password salah'
        ])->onlyInput('username');
    }

    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/login');
}

public function login2(){
    return View('login.view_login2');
}

public function studentpage(){
    return View('student.main');
}

public function signup(){
    return view('login.signup');
}

}