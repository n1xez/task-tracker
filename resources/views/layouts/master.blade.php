<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.components.meta')

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    @include('layouts.components.styles')
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="header">
            <div class="col-md-9">
                <div class="navbar-header">
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
            </div>
            <div class="col-md-3 pull-right">
                @include('layouts.components.login')
            </div>
        </div>
    </div>
    <div class="row page-body">
        <div class="col-md-2">
            <div class="row navbar-left-menu">
                @include('layouts.components.navbar')
            </div>
        </div>
        <div class="col-md-10">
            <div class="widget-panel">
                @yield('content')
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="row">

        </div>
    </div>
</div>

@include('layouts.components.scripts')

</body>
</html>
