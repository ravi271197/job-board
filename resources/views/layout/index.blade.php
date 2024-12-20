<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobs</title>
    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/dropzone/dropzone.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">

</head>
<body>
    @include('layout.header')
    @yield('content')
</body>
<script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('assets/js/jquery-3.7.1.min.js') !!}"></script>
<script src="{!! asset('assets/js/dropzone/dropzone.min.js') !!}"></script>
@yield('scripts')
</html>