<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('layouts.headcss')
</head>
@if ($message = Session::get('noaccess'))
    <body class="hold-transition sidebar-mini" onload="showAlert()">
@else
    <body class="hold-transition sidebar-mini">
@endif
    <!-- Site wrapper -->
    <div class="wrapper">
    @include('layouts.topbar')
    @include('layouts.sidebar')
    @yield('content')
    </div>

    @include('layouts.scripts')
         <script>
  function showAlert() {
    alert ("Role anda tiada access untuk ke page ini");
  }
  </script>  
</body>
</html>