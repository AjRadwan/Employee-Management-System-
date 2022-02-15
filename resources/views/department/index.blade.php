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
        <th>Title</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
</thead>
 
<tbody>
   @foreach ($departments as $dep)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$dep->title}}</td>
        <td>{{$dep->created_at->diffForhumans()}}</td>
        <td>
     
<a href="{{route('department.edit', $dep)}}" class="btn btn-primary">Edit</a>
 
<form action="{{route('department.destroy', $dep)}}" method="post" class="btn btn-danger">
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