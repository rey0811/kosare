@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <p>このページはご利用いただけません。</p>
                <p>リンクに問題があるか、ページが削除された可能性があります。</p>
                <a href="{{ route('top') }}">トップに戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
