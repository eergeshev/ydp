@extends('layouts.app')

@section('content')
    <div class="page">
        <div class="page__head">
            @include('layouts.navbar')
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
{{--                        <h1 class="section-title">{{ $news->title }}</h1>--}}
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="page__head-img">
                            <img src="../upload/{{ $news->image }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="row">
                <div class="col-12 order-lg-2">
                    <div class="news-full">
                        <span class="date">{{ date('d.m.Y', strtotime($news->data)) }}</span>
                        <h1>{{ $news->title }}</h1>
                        {!! $news->description !!}
                    </div>
                </div>

            </div>
            <div class="row">
                @foreach($last_news as $last_new)
                    <div class="col-sm-6 col-md-4">
                        <a href="/news-detail/{{ $last_new->id }}" class="news-card">
                            <img src="../upload/{{ $last_new->image }}" alt="">
                            <strong>{{ $last_new->title }}</strong>
                            <span class="date">{{ date('d.m.Y', strtotime($last_new->data)) }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
