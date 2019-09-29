<!DOCTYPE HTML>
<html>
<head>
    @include ('includes.head')
</head>
<body class="container-fluid bg-dark p-0">
    <div class="container-fluid p-0">
        <header class="container-header">
            @include('includes.header')
        </header>
        <div id="main" class="justify-content-center">
            @yield('content')
            @yield('script')
        </div>
        <footer id="footer" class="container-fluid">
            @include('includes.footer')
        </footer>
    </div>
</body>
</html>