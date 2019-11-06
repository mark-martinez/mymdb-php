<!DOCTYPE HTML>
<html>
<head>
    @include ('includes.head')
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        @include('includes.header')
    </nav>

    <div class="row" id="body-row">
        <!-- sidebar -->
        <div class="sidebar-expanded collapse show" id="sidebar-container">
            @include('includes.sidebar')
        <!-- sidebar -->
        </div>
        
        <!-- page content -->
        <div class="col p-3">
            <div class="container-fluid p-0" id="page-content-wrapper">
                
                <div id="main" class="justify-content-center">
                    @yield('content')
                </div>
                <footer id="footer" class="container-fluid">
                    @include('includes.footer')
                </footer>
            </div>
        </div>
        <!-- page content -->
    </div>
</body>
</html>