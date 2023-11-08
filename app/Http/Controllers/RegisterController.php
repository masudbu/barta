<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('templates.register');
    }

    public function addUser(Request $request){

        $validated = $request->validate([
            'username' => 'required|unique:users|max:50',
            'email' => 'required|unique:users',
            'name' => 'required|max:100',
            'password' =>'required'
        ]);

        $inserData = array(
            'name'=>$request['name'],
            'username'=>$request['username'],
            'email'=>$request['email'],
            'password'=>Hash::make($request['password']),
            'created_at'=>now(),
        );

        DB::table('users')->insert($inserData);

        return redirect()->back();
    }
}
