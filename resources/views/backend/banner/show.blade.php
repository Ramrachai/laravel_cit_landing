@extends('backend.index')
@section('contents')
    <div class="row">
        <div class="col-md-8 col-12 mx-auto">
            <div class="card">
                <div class="card-header card-header-border-bottom">
                    {{ $info->image }}
                </div>
                
                <div class="card-body">
                    <img src="{{ asset('images/'.$info->image) }}" alt="" class = 'w-100'>
                </div>
            </div>
        </div>
    </div>

@endsection