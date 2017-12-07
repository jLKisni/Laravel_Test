<html>
<head>
  <title>{{config('app.name')}}  @if(isset($title)) | {{  $title}}@endif </title>
  <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">


  <script type="text/javascript" src="{{ url('js/jquery-3.1.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>

</head>
<body>
 
@include('layouts.nav')

@yield('content')


</body>
</html>