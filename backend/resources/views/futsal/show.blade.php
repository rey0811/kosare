@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <div>
                    <p>アクセス</p>
                    <a
                        href="{{url( $futsal->url )}}"
                        target="_blank"
                        rel="noopener noreferrer"
                    >{{ $futsal->url }}</a>
                </div>
                <!-- 口コミを最新順に並べる(=利用日の最新+作成日の最新) -->
                @forelse ($futsal->reviews()->orderBy('date', 'desc')->orderBy('created_at', 'desc')->get() as $review)
                    <p>{{ $review->user->name }} さん </p>
                    <p>{{ $review->date }} </p>
                    <star-rating rating="{{ $review->star }}"
                                star-size="20"
                                read-only="true"
                                :show-rating="false">
                    </star-rating>
                    <p>{!! nl2br(e($review->content)) !!}</p>
                    <hr>
                @empty
                    <p>口コミはありません</p>
                    <hr>
                @endforelse
                @if( Auth::check() )
                    <a href="/futsalplaces/detail/{{$futsal->id}}/review">レビュー</a>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
