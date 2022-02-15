@extends('layout')
@section('title', 'All Data')
@section('content')
<div class="card mb-4 my-5">
<div class="card-header">
    @include('inculde.flash-message')
<i class="fas fa-table me-1"></i> 
Department DataTable  
<a href="{{route('department.create')}}" class="btn btn-primary float-end">Add New</a>
</div>
<div class="card-body">
<table id="datatablesSimple" class="table table-bordered">
<thead>
    <tr>
        <th>#</th>
        <th>Department</th>
        <th>Name</th>
        <th>Address</th>
      <th>Action</th>
    </tr>
</thead>
 
<tbody>
   @foreach ($employees as $employee)
    <tr>
        <td>{{$loop->iteration}}</td>
        {{-- geeting department title from department --}}
        <td>{{$employee->department->title}}</td>
        <td>{{$employee->name}}</td>
         <td>{{$employee->address}}</td>
         <td>{{$employee->created_at->diffForhumans()}}</td>
        <td>
     
<a href="{{route('employee.edit', $employee)}}" class="btn btn-primary">Edit</a>
<a href="{{route('employee.show', $employee)}}" class="btn btn-warning">Show</a>
 
<form action="{{route('employee.destroy', $employee)}}" method="post" class="btn btn-danger">
    @csrf
    @method('delete')
    <input type="submit" value="Delete">
  </form>
  
    </tr>
    @endforeach
</tbody>
</table>
</div>
</div>
@endsection