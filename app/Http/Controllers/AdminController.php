<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Index(){
        return view('index');
    }

    public function Login(Request $request){
        dd('Bem Vindo');
    }

    public function Dashboard(){
        return view('Admin.index');
    }
}
