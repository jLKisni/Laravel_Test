@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
@include('layouts.messages')
    
<div class="card text-white bg-primary mb-12" >
  <div class="card-header">Fill Up Employee Information</div>
  <div class="card-body">


    <fieldset>
      <legend style="text-align:center"><h2>Fill Up Employee Information</h2></legend>
      {!! Form::open(['action'=> 'PostsController@store','method'=>'POST']) !!}
      <div class="form-group">

        {{Form::label('firstname','firstname')}}
        {{Form::text('firstname','',['class'=>'form-control','placeholder'=>'Enter firstname'])}}
       
      </div>
      <div class="form-group">

        {{Form::label('lastname','lastname')}}
        {{Form::text('lastname','',['class'=>'form-control','placeholder'=>'Enter lastname'])}}
       
      </div>
      <div class="form-group">
        
        {{Form::label('position','position')}}
        {{Form::text('position','',['class'=>'form-control','placeholder'=>'Enter position'])}}
       
      </div>
      
    <center>
      <button type="reset" class="btn btn-warning">Cancel</button>
        {{Form::submit('Submit',['class'=>'btn btn-success'])}}
      {!! Form::close() !!}
      
    </center>
    </fieldset>
 

  </div>
</div>


</div>
<div class="col-md-3"></div>
</div>
</div>

@endsection






