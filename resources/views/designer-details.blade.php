@extends('layouts.app')

@section('content')
<div class="page">
    <div class="page__head">
        @include('layouts.navbar')
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h1 class="section-title">{{ $designer->first_name }}  {{ $designer->last_name }}</h1>
                    <p class="page__description">{{ $designer->intro_text }}</p>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="page__head-img">
                        <img src="../upload/{{ $designer->photo }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-4">
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="designer-info">
                    <div class="designer-info__logo">
                        <h1>{{ $designer->first_name }}</h1>
{{--                        <img src="../content/designer1-logo.png" alt="">--}}
                    </div>
                    <div class="designer-info__descr">
                        <p>{{ $designer->description }}</p>
                    </div>
                    <ul class="designer-info__list">
                        <li>
                            <strong class="designer-info__list-label">МЕСТО РАСПОЛОЖЕНИЯ</strong>
                            <span class="designer-info__list-value">{{ $designer->address }}</span>
                        </li>
                        <li>
                            <strong class="designer-info__list-label">УНИВЕРСИТЕТ</strong>
                            <span class="designer-info__list-value">{{ $designer->education }}</span>
                        </li>
                        <li>
                            <strong class="designer-info__list-label">ОСНОВНЫЕ СТРАНЫ-ПРОИЗВОДИТЕЛИ</strong>
                            <span class="designer-info__list-value">{{ $designer->production_countries }}</span>
                        </li>
                    </ul>
                    <div class="social-links">
                        <a href="{{ $designer->facebook }}" class="social-link social-link--fb"></a>
                        <a href="{{ $designer->instagram }}" class="social-link social-link--inst"></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="designer-slider-for">
                    @for($x = 0; $x < $len_gallery; $x++)
                        <div>
                            <img src="../upload/{{ $gallery[$x] }}" alt="">
                        </div>
                    @endfor
            </div>
            <div class="col-12">
                <div class="designer-slider-nav">
                    @for($x = 0; $x < $len_gallery; $x++)
                    <div>
                        <img src="../upload/{{ $gallery[$x] }}" alt="">
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
