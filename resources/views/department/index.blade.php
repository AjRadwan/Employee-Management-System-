@extends('layout')
@section('title', 'All Data')
@section('content')
<div class="card mb-4 my-5">
<div class="card-header">
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
    </tr>
</thead>
 
<tbody>
   @foreach ($departments as $dep)
       
 
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$dep->title}}</td>
        <td>   {{$dep->created_at->diffForhumans()}}</td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
</div>
@endsection