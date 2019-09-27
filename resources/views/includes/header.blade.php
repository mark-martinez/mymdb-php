<nav class="container-fluid navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">MyMDB</a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Temp</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="GET" action="{{url('search')}}">
            <input class="form-control mr-sm-2" name="query" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-out-like-success my-2 my-sm-0" type="Submit">Search</button>
        </form>
    </div>
</nav>