<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('templates.index');
    }
    public function profilePage(){
        return view('templates/profile');
    }
    public function show(){
        return view('templates/edit-profile');
    }
}
