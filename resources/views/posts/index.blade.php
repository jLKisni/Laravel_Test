 @extends('layouts.app')


@section('content')
<div class="container">
  @include('layouts.messages')
  <br><br>
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
      <td><?php echo ucfirst($row->firstname)?></td>
      <td>{{$row->lastname}}</td>
      <td>{{$row->position}}</td>
      <td>

        <div class="col-md-9">
          <div class="row">
            <div class="col-md-3">
            <a href="{{ url('posts') }}/{{$row->id }}" class="btn btn-primary"> View </a>
            </div>

            <div class="col-md-3">
            <a href="/posts/{{$row->id}}/edit" class="btn btn-success"> Update </a>
            </div>

            <div class="col-md-3">
        {!! Form::open(['action'=>['PostsController@destroy',$row->id],'method'=>'POST']) !!}
          {{ Form::hidden('_method','DELETE') }}

          {{ Form::submit('Delete',['class'=> 'btn btn-danger']) }}

        {!! Form::close() !!}
            </div>
        </div>
       </div>
      </td>
    </tr>
    
        @endforeach

    @endif
  </tbody>
</table> 

</div>


@endsection