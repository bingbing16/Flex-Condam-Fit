<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Flex Condam Fit</title>

        <!-- Scripts -->

        <!-- plugins:css -->
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/site.webmanifest">
        <link rel="stylesheet" href="{{ asset('/admin/vendors/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/admin/vendors/css/vendor.bundle.base.css') }}">
        <link rel="stylesheet" href="{{ asset('/admin/css/style.css') }}">

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">

        <div class="container-scroller">
            @include('layouts.inc.admin.navbar')

            <div class="container-fluid page-body-wrapper">
                @include('layouts.inc.admin.sidebar')

                <div class="main-panel">
                    <div class="content-wrapper">
                        @yield('content')
                    </div>
                </div>

            </div>
        </div>


        @stack('modals')

        <script src="{{ asset('/admin/js/dashboard.js') }}"></script>
        <script src="{{ asset('/admin/vendors/js/vendor.bundle.base.js') }}"></script>
        <script src="{{ asset('/admin/js/misc.js') }}"></script>
        <script src="{{ asset('/admin/js/jquery.cookie.js') }}"></script>
        <script src="{{ asset('/admin/text/javascript') }}"></script>
        <script src="{{ asset('/admin/js/off-canvas.js') }}"></script>
        <script src="{{ asset('/admin/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('/admin/js/todolist.js') }}"></script>

        @livewireScripts
        @stack('script')
    </body>
</html>