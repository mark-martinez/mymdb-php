@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="d-flex flex-lg-column">
        <div class="p-2" id="section-recommended">
            <h3>Recommended</h3>
            {{-- foreach card here --}}
            <div class="mt-md-3">
                <a href="{{url('recommended')}}" class="text-muted">See More</a>
            </div>
        <hr>
        </div>
        <div class="p-2" id="section-watchlist">
            <h3>Watchlist</h3>
            {{-- foreach card here --}}
            <div class="mt-md-3">
                <a href="{{url('watchlist')}}" class="text-muted">See More</a>
            </div>
        <hr>
        </div>
        <div class="p-2" id="section-trending">
            <h3>Trending</h3>
            {{-- foreach card here --}}
            <div class="mt-md-3">
                <a href="{{url('trending')}}" class="text-muted">See More</a>
            </div>
        <hr>
        </div>
    </div>    
</div>
@stop