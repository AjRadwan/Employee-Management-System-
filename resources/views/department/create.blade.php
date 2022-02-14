@extends('layout')

@section('content')
@extends('layout')
@section('title', 'All Data')
@section('content')
<div class="card mb-4 my-5">
<div class="card-header">
<i class="fas fa-table me-1"></i>
DataTable Example
<a href="{{asset('department.index')}}" class="btn btn-primary float-end">View All</a>
</div>
<div class="card-body">
<table  class="table table-striped">
 
</table>
</div>
</div>
@endsection
@endsection