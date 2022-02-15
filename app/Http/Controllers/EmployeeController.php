<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller{
    
    public function index(){
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

   
    public function create(){
      $departments = Department::all();
       return view('employee.create', compact('departments'));
    }

   
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'image' => 'required | image',
            'address' => 'required',
            'department_id' => 'required',
            'mobile' => 'required',
            'status' => 'required',
            
        ]);

        $name = $request->input('name');
        $department_id = $request->input('department_id');
        $mobile = $request->input('mobile');
        $address = $request->input('address');
        $status = $request->input('status');

        // File Upload
        $imagePath = 'storage/' . $request->file('image')->store('EmployeeImages', 'public');

       $employee = new Employee();
       $employee->name = $name;
       $employee->department_id = $department_id;
       $employee->imagePath = $imagePath;
       $employee->mobile = $mobile;
       $employee->address = $address;
       $employee->status = $status;
       $employee->save();
       return redirect()->back()->with('message', "Employee Added Successfully");
//return redirect()->route('index')->with('message', "Employee AddedSuccessFully!");
    }

  
    public function show(Employee $employee){
        //
    }

  
    public function edit(Employee $employee){
        //
    }

   
    public function update(Request $request, Employee $employee){
        //
    }

  
    public function destroy(Employee $employee){
        //
    }
}
