<ul class="list-group">
    <button type="button" data-toggle="collapse" data-target="#sidebar-container" class="close" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <!-- Menu with submenu -->
    
    <a href="{{url('watchlist')}}" class="bg-dark list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="menu-collapsed">Watchlist</span>    
        </div>
    </a>
    <a href="{{url('showtime')}}" class="bg-dark list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="menu-collapsed">Showtime</span>    
        </div>
    </a>
    <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="menu-collapsed">TMDb</span>
        </div>
    </a>
</ul><!-- List Group END-->