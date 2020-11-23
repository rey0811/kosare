@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                futsal review site
                <a href="/futsalplaces/tokyo">東京</a>
                <a href="/futsalplaces/kanagawa">神奈川</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
