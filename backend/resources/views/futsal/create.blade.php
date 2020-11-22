@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('futsal.store', ['id' => $futsal->id]) }}">
                        @csrf

                        <!-- フットサル場の名前 -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Futsal Place') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $futsal->name }}" readonly>
                            </div>
                        </div>

                        <!-- 利用日 -->
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('利用日') }}</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="<?php echo date('Y-m-d'); ?>" required>

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- おすすめ度 -->
                        <div class="form-group row">
                            <label for="star" class="col-md-4 col-form-label text-md-right">{{ __('おすすめ度') }}</label>

                            <div class="col-md-6">
                                <star-rating
                                    star-size="30"
                                    v-model="rating"
                                    :show-rating="false"
                                ></star-rating>
                                <input type="hidden" name="star" :value="rating"/>
                                @error('star')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- レビュー内容 -->
                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('レビュー内容') }}</label>

                            <div class="col-md-6">
                                <textarea id="content" type="content" class="form-control @error('content') is-invalid @enderror" name="content" rows="5" required></textarea>

                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('投稿する') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
