<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function signup()
    {
        return view('login.signup');
    }

    public function session(Request $request)
    {
        $request->validate(
            //validation rules
            [
                'role' => 'required',
                'id'=> 'required|unique:users',
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                
            ],
            //validation messages
            [
                
            ]
            );

            User::create([
                'role' => $request->input('role'),                
                'name' => $request->input('name'),
                'username' => $request->input('id'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),    
                'passwordbackup' =>$request->input('password') 
            ]);
            //redirect routes          
         
        return redirect("/login")->with('success', 'Daftar telah berjaya, sila Sign In');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'role' => $data['role'],
        'id' => $data['id'],
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
}
