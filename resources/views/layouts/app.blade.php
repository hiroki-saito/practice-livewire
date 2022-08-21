<!DOCTYPE html>
<html lang="{{ $app->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    @vite(['resources/css/app.scss'])
    @section('contents-meta')
    @show
</head>
<body>
@include('elements.header')
<div class="container">
    @yield('contents')
</div>
@include('elements.footer')
@section('bottom')
    @vite(['resources/js/app.js'])
@show
</body>
</html>
