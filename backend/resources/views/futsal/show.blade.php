@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                futsal detail
                <ul>
                    <li>id:{{ $futsal->id }}</li>
                    <li>name:{{ $futsal->name }}</li>
                    <li>place:{{ $futsal->place }}</li>
                    <li>url:{{ $futsal->url }}</li>
                </ul>
                <button class="btn btn-primary">レビューを投稿する</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
