<?php

namespace App\Http\Controllers;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller{
    
    public function index(){
    $departments = Department::all();
        return view('department.index', compact('departments'));
    }

     
    public function create(){
        return view('department.create');
    }

    
    public function store(Request $request){
        //
    }

    
    public function show($id){
       return view('department.show');
    }

     
    public function edit($id){
      return view('department.edit');
    }

    
    public function update(Request $request, $id){
        //
    }

    
    public function destroy($id){
        //
    }
}