@extends('layouts.app')


@section('content')
<div class="container">

	<h2>Tables</h2>


	<table class="table table-striped table-hover table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>#id</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Position</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>

    <tr class="table-info">
      <td>#{{$employee->id}}</td>
      <td>{{$employee->firstname}}</td>
      <td>{{$employee->lastname}}</td>
      <td>{{$employee->position}}</td>
      <td>
        <a href="{{ url('/') }}" class="btn btn-primary"> Back </a>
        <a href="{{ url('') }}" class="btn btn-success"> Update </a>
        <a href="{{ url('') }}" class="btn btn-danger"> Delete </a>
      </td>
    </tr>

  </tbody>
</table> 

</div>


@endsection