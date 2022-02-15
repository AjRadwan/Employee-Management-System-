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
        $request->validate([
            'title' => 'required | unique:departments',
        ]);
        $title = $request->input('title');
        $dep = New Department();
        $dep->title = $title;
        $dep->save();
        return redirect()->back()->with('success-msg', "Title Created Successfully");

    }

    
    public function show(Department $department){
       return view('department.show');
    }

     
    public function edit(Department $department){
    return view('department.edit', compact('department'));
    }

    
    public function update(Request $request, Department $department){
        $request->validate([
            'title' => 'required | unique:departments',
        ]);
        $title = $request->input('title');
        $department->title = $title;
        $department->save();
        return redirect()->back()->with('success-msg', "Title Updated Successfully");
    }

    
    public function destroy(Department $department){
        $department->delete();
        return redirect()->back()->with('success-msg', "Title Deleted Successfully");

    }
}
