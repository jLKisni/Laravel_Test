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
    @if(count($employee)>0)
        @foreach($employee->all() as $row)

    
    <tr class="table-info">
      <td>#{{$row->id}}</td>
      <td>{{$row->firstname}}</td>
      <td>{{$row->lastname}}</td>
      <td>{{$row->position}}</td>
      <td>
        <a href="{{ url('') }}" class="btn btn-primary"> View </a>
        <a href="{{ url('') }}" class="btn btn-success"> Update </a>
        <a href="{{ url('') }}" class="btn btn-danger"> Delete </a>
      </td>
    </tr>

        @endforeach
    @endif
  </tbody>

  
</table> 



</div>
@endsection

