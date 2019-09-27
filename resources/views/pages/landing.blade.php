@extends('layouts.default')
@section('content')
<div class="card m-5 p-5">
    <h1 class="card-title">TMDb API Key</h1>
    <p class="card-text">Your API key will be stored in a cookie during your session.</p>
    <p class="card-text">Key: 1a9755b22a226ad22bb40fc91e9ed04a </p>
    @if ($errors->any())
    <div class="error mb-3">
        <span class="badge badge-warning">
            {{ implode('', $errors->all(':message'))  }}
        </span>
    </div>
    @endif
    <div class="form-group">
        <form method="POST" action="{{url('login')}}">
        {{ csrf_field() }}            
            <input type="text" name="apiKey" class="form-control"><br>
            <input class="btn btn-primary" type="submit">
        </form>
    </div>
</div>
@stop