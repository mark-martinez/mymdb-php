@extends('layouts.default')
@section('content')

<div class="container-fluid">
    <div class="card m-5 p-5">
        <div class="card-body container-fluid">
        <h1 class="card-title display-3">
            @isset($results->original_title)
                {{ $results->original_title }}
            @endisset
            @isset($results->name)
                {{ $results->name }}
            @endisset
        </h1>
        @isset($results->tagline)
            <h5 class="card-subtitle mb-2 text-muted">            
                {{ $results->tagline }}
            </h5>
        @endisset
        @isset($results->genres)
        <h6 class="card-subtitle mb-2 text-muted">
            @foreach ($results->genres as $genre)
                {{ $genre['name']}}, 
            @endforeach
        </h6>
        @endisset
        @isset($results->overview)
        <p class="card-text pt-5">
            {{ $results->overview }}
        @endisset
        </p>
        </div>
    </div>
</div>

@stop