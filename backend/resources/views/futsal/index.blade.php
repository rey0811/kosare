@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                futsal list
                <ul>
                @foreach ($futsals as $futsal)
                    <li>
                        <a href="/futsalplaces/{{$futsal->id}}">{{ $futsal->name }}</a>
                    </li>
                @endforeach
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
