<div class="col-sm-2">
    <div class="card h-100">
        <img class="card-img" src="{{ $val->backdrop_path}}" alt="Card image">
        <div class="card-img-overlay">
        </div>
        <h6 class="card-title .d-none .d-md-block .d-lg-none">
        @isset($val->title)
            {{ $val->title }}
        @endisset
        @isset($val->name)
            {{ $val->name }}
        @endisset
    </h4>
    </div>   
</div>