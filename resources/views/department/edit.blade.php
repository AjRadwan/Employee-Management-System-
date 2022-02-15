@extends('layout')
@section('title', 'All Data')
 
@section('content')
 
<div class="card mb-4 my-5">
<div class="card-header">
@include('inculde.flash-message')

<i class="fas fa-table me-1"></i>
Update Data
<a href="{{route('department.index')}}" class="btn btn-primary float-end">View All</a>
</div>
<div class="card-body">
    <form action="{{route('department.update', $department)}}" method="POST">
        @method('put')
        @csrf
         <div class="mb-3">
            <label  class="form-label">Title</label>
            @error('title')
            <strong class="text-danger"></strong>
           @enderror
            <input type="title" class="form-control"  placeholder="title@example.com" name="title"  value="{{$department->title}}">
          </div>
          <button type="submit" class="btn btn-primary" value="Submit">Update</button>    
       </form>
</div>
</div>
@endsection
 