<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function Index(){
        return view('index');
    }

    public function Login(Request $request){
        $check = $request->all();

        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            # code...
            return redirect()->route('admin.dashboard')->with('error', 'logado com sucesso');
        }else{
            return back()->with('error', 'email ou password inválido');
        }

    }

    public function Dashboard(){
        return view('Admin.index');
    }

    public function Logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login')->with('logout', 'Seção terminada com sucesso');
    }

    public function AdminRegister(Request $request){
        // dd($request->all());

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);

        return redirect()->route('login')->with('create',  "$request->name, cadastrado com sucesso");
    }
}
