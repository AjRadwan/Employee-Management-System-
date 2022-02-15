<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller{
    
    public function index(){
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

   
    public function create(){
        //
    }

   
    public function store(Request $request){
        //
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
