@extends('layout')
@section('title', 'Employee')
 
@section('content')
 
<div class="card mb-4 my-5">
<div class="card-header">
@include('inculde.flash-message')

<i class="fas fa-table me-1"></i>
Add Employee
<a href="{{route('employee.index')}}" class="btn btn-primary float-end">View All</a>
</div>
<div class="card-body">
    <form action="{{route('employee.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Title</label>
            @error('title')
            <strong class="text-danger"> {{ $message }}</strong>
           @enderror
            <input type="title" class="form-control"  placeholder="title@example.com" name="title">
          </div>
         
            <button type="submit" class="btn btn-primary" value="Submit">Submit</button>    
       </form>
</div>
</div>
@endsection
 