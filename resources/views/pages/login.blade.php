@extends('layouts.default')
@section('content')
<div class="card p-5">
    <h1 class="card-title">I am a TMDb...</h1>
    
    @if ($errors->any())
    <div class="error mb-3">
        <span class="badge badge-warning">
            {{ implode('', $errors->all(':message'))  }}
        </span>
    </div>
    @endif
    <div class="col-auto mb-3">
        <div class="row justify-content-center">
            <div class="card-deck d-flex justify-content-center ">
                <div class="card p-2" style="border-width: 10px; border-color: #01d277; color:#01d277;">
                    <div class="card-body">
                        <h2 class="card-title text-center font-weight-bold">User</h4>
                        <h5 class="card-text text-nowrap">Sign in with my TMDb account</p>
                        <a href="login/user" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card p-2"  style="border-width: 10px; border-color: #081c24; color:#081c24;">
                    <div class="card-body">
                        <h2 class="card-title text-center font-weight-bold">Guest</h4>
                        <h5 class="card-text text-nowrap">Continue browsing as a guest</p>
                        <a href="login/guest" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop