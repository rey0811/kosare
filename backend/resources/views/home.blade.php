@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    マイページ
                    <img style="width:200px;" src="{{ \Auth::user()->image_path }}">
                    <a href="{{ route('home.edit', ['id' => \Auth::Id()]) }}">プロフィール更新</a>

                    <!-- 口コミを最新順に並べる(=利用日の最新+作成日の最新) -->
                    @forelse (\Auth::user()->reviews()->orderBy('date', 'desc')->orderBy('created_at', 'desc')->get() as $review)
                        <p>{{ $review->futsal->name }} さん </p>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
