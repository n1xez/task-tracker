<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    @include('layouts.components.styles')
</head>
<body>
<div class="row">
    <div class="col-md-3">
        @include('layouts.components.navbar')
    </div>
    <div class="col-md-9">
        @include('layouts.components.login')
        @yield('content')
    </div>
</div>
@include('layouts.components.scripts')
</body>
</html>
