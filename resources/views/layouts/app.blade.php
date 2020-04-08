<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/bower_components/admin-lte/dist/css/adminlte.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <div id="app">
        <div class="wrapper">
            @include('inc.navbar')
            @include('inc.sidebar')

             <div class="content-wrapper">
                @include('inc.header')
                <div class="content">
                    <div class="container-fluid">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                            @include('partials.alerts')
                            @yield('content')

                    </div>
                </div>
              </div>

            @include('inc.control_sidebar')
            @include('inc.footer')
        </div>
    </div>
    <script src="/bower_components/admin-lte/plugins/jquery/jquery.min.js"></script>
    <script src="/bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/bower_components/admin-lte/dist/js/adminlte.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
