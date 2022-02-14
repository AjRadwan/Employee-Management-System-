<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller{
    
    public function index(){
         return view('admin.index');
    }

    public function login(){
        return view('admin.login');
    }

    public function store(Request $request){
         $request->validate([
           'password' => 'required',
           'username' => 'required',
         ]);

        $chkAdmin = Admin::where([
             'username' => $request->input('username'),
             'password' => $request->input('password')])->count();
         
      if($chkAdmin > 0){
          session(['adminLogin', true]);
          return redirect()->route('admin.index');
      }else{
        return redirect()->back()->with('e-msg', "Username  Or Password Invalid");
      }
    }

    public function logout(){
        session()->forget('adminLogin');
        return redirect()->route('admin.login');
    }

}