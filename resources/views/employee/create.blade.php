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
    <form action="{{route('employee.store')}}" method="POST" eenctype="multipart/form-data">
        @csrf
    <div class="mb-3">
        <label  class="form-label">name</label>
        @error('name')
        <strong class="text-danger"> {{ $message }}</strong>
        @enderror
        <input type="name" class="form-control"  placeholder="name@example.com" name="name">
      </div>
    <div class="mb-3">
        <label  class="form-label">Department</label>
        @error('department')
        <strong class="text-danger"> {{ $message }}</strong>
        @enderror
       <select name="department" class="form-control">
          <option value="">--Select Department--</option>
   @foreach ($departments as $department)
       <option value="{{$department->id}}">{{$department->title}}</option>
         @endforeach
   </select>

      </div>
        <div class="mb-3">
            <label  class="form-label">Image</label>
            @error('image')
            <strong class="text-danger"> {{ $message }}</strong>
           @enderror
            <input type="file" class="form-control"  placeholder="image@example.com" name="image">
          </div>
        <div class="mb-3">
            <label  class="form-label">Address</label>
            @error('address')
            <strong class="text-danger"> {{ $message }}</strong>
           @enderror
            <input type="address" class="form-control"  placeholder="address@example.com" name="address">
          </div>
        <div class="mb-3">
            <label  class="form-label">Mobile</label>
            @error('mobile')
            <strong class="text-danger"> {{ $message }}</strong>
           @enderror
            <input type="mobile" class="form-control"  placeholder="mobile@example.com" name="mobile">
          </div>

        <div class="mb-3">
            <label  class="form-label">Status</label> <br>
            <input type="radio"   name="status" value="1"> Activate <br>
            <input type="radio" checked="checked"   name="status" value="0"> Deactivate
          </div>
         

            <button type="submit" class="btn btn-primary" value="Submit">Submit</button>    
       </form>
</div>
</div>
@endsection
 