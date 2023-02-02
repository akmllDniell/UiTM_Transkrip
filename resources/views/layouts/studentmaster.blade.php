<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('layouts.studentheadcss')
</head>
@if ($message = Session::get('noaccess'))
<body onload="showAlert()" class="g-sidenav-show  bg-gray-100" >
    @else
    <body class="g-sidenav-show  bg-gray-100">   
    @endif     
        @include('layouts.studentsidebar')
        <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
            @include('layouts.studenttopsidebar')
            @yield('content')
        </main>
        @yield('configuration')
        <script>
            function showAlert() {
              alert ("Role anda tiada access untuk ke page ini");
            }
            </script>  
        @include('layouts.studentscript')       
    </body>
</html>