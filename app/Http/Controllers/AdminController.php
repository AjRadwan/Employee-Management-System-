<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Employee;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminController extends Controller{
    
    public function index(){
         $data = Employee::select('id', 'created_at')->get()->groupBy(function($data){
          return Carbon::parse($data->created_at)->format('M');
         });

      $months = [];
      $monthCount = [];

      foreach($data as $month => $value){
        $months[] = $month;
        $monthCount[] = count($value);
      }

         return view('admin.index',  compact('data', 'monthCount', 'months'));
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