<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@if(!@empty($title)){{$title}} @else home @endif</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    {{$style??''}}
</head>
<body class="header">
    <x-navbar/>
    
    {{-- <div class="container-fluid vh-100">
         --}}
        {{$slot}}
    {{-- </div> --}}
{{--     
    @if(!Route::currentRouteName()=='home') --}}
    <x-footer/>
    {{-- @endif --}}
</body>




</html>