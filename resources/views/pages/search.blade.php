@extends('layouts.default')
@section('content')
@if ($errors->any())
    <div class="error mb-3">
        <span class="badge badge-warning">
            {{ implode('', $errors->all(':message'))  }}
        </span>
    </div>
@endif

<form class="container-fluid" method="GET" action="{{url('search')}}">
    <div class="form-group m-5">
        <input type="text" name="query" class="form-control form-control-lg" id="formGroupInput" placeholder="Search for a movie or show">
    </div>
</form>

@stop