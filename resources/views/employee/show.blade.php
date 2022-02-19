@extends('layout')
@section('title', 'All Data')
 
@section('content')
 
<div class="card mb-4 my-5">
<div class="card-header">
@include('inculde.flash-message')

<i class="fas fa-table me-1"></i>
Employee Data
<a href="{{route('employee.index')}}" class="btn btn-primary float-end">View All</a>
</div>
<div class="card-body">
  <form>

<div class="mb-3">
    <label  class="form-label">Name</label>
     <input readonly class="form-control"  value="{{$employee->name}}" name="name">
  </div>
  <div class="mb-3">
    <label  class="form-label">Photo</label>
    <p>
      <img src="{{asset($employee->imagePath)}}" alt="Image" width="300px"/>
    </p>
  </div>
<div class="mb-3">
    <label  class="form-label">Department</label>
  
<select readonly name="department_id" class="form-control">
      @foreach ($department as $dep)
      <option @if ($dep->id == $employee->department_id) selected @endif
     >{{$dep->title}}</option>
    @endforeach
      
</select>
    
</div>
    <div class="mb-3">
        <label  class="form-label">Address</label>
       
        <input readonly class="form-control" value="{{$employee->address}}">
      </div>
    <div class="mb-3">
        <label  class="form-label">Mobile</label>
      
        <input readonly class="form-control" value="{{$employee->mobile}}" >
      </div>

<div class="mb-3">
    <label  class="form-label">Status</label> <br>

    @if($employee->status == 1) Activate @else Deactivate @endif

  </div>
       
   </form>
</div>
</div>
@endsection
 