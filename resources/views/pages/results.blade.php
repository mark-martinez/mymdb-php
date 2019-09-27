@extends('layouts.default')
@section('content')
<div class="container-fluid row justify-content-center p-3">
    <div class="card-deck mb-3">
        @foreach ($arr as $val)
        <div class="col-sm-3 py-2">      
            <div class="card h-100" style="overflow:hidden;">
            <form method="GET" action="{{url('request')}}">
                <input class="form-control" name="id" type="hidden" value="{{$val['id']}}">

                <a href="query/{{$val['media_type']}}/{{$val['id']}}" class="stretched-link"></a>
            </form>
                <div class="card-body">
                    <h4 class="card-title">
                        @isset($val['original_title'])
                            {{ $val['original_title'] }}
                        @endisset
                        @isset($val['name'])
                            {{ $val['name'] }}
                        @endisset
                    </h4>
                    <h6 class="card-subtitle mb-2 text-muted">
                        {{ $val['media_type'] }}
                    </h6>
                    <p class="card-text" style="word-wrap:break-word;">
                    @isset($val['overview'])
                        {{ $val['overview']}}
                    @endisset
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Search Youtube for...</small>    
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop