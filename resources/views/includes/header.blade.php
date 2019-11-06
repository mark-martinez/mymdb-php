<div class="collapse navbar-collapse" id="navbarNavDropdown">
    <button class="navbar-toggle navbar-toggle-right custom-toggler" type="button" data-toggle="collapse" data-target="#sidebar-container" aria-controls="sidebar-container" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">MyMDB</a>
    <form class="form-inline my-2 my-lg-0 ml-auto mr-auto" method="GET" action="{{url('search')}}">
        <input class="form-control input-large" name="query" type="text" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-out-like-success my-2 my-sm-0" type="Submit">Search</button>
        </div>
    </form>
    <div class="btn-group">
        <button class="btn btn-outline-dark btn-sm" type="button">
            Username here
        </button>
        <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu dropdown-primary dropdown-menu-right">
            <a href="#" class="btn btn-default dropdown-item">Profile</a>
            <a href="/logout" class="btn btn-default dropdown-item">Logout</a>
        </div>
    </div>
</div>