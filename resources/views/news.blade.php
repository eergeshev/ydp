@extends('layouts.app')

@section('content')
<div class="page">
    <div class="page__head">
        @include('layouts.navbar')
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h1 class="section-title">
                        <a href="/news-detail/{{ $latestNews->id }}" class="news-top">
                            {{ $latestNews->title }}
                        </a>
                    </h1>
                    <p class="page__description">{!! substr($latestNews->description, 0, 250) !!} ...</p>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="page__head-img">
                        <img src="./upload/{{ $latestNews->image }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="designers container">
        @livewire('news')
    </section>
</div>
@endsection
