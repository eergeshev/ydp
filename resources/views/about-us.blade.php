@extends('layouts.app')

@section('content')
<div class="page">
    <div class="page__head">
        @include('layouts.navbar')
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h1 class="section-title">Платформа Молодых Дизайнеров (YDP)</h1>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="page__head-img">
                        <img src="./content/about-page-head.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-articles">
        <div class="container">
            @foreach($abouts as $about)
            <div class="about-article">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h3 class="section-title">{{ $about->title }}</h3>
                    </div>
                    <div class="col-12 col-lg-7">
                        {!! $about->description !!}
                    </div>
                </div>
            </div>
            @endforeach

            <div class="about-article">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h3 class="section-title">International Partners</h3>
                    </div>
                    <div class="col-12 col-lg-7">
                        @foreach($inter_partners as $partner)
                            <a href="#" class="about-article__img"><img src="../upload/{{ $partner->image }}" alt=""></a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="about-article">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h3 class="section-title">Local Partners</h3>
                    </div>
                    <div class="col-12 col-lg-7">
                        @foreach($local_partners as $partner)
                            <a href="#" class="about-article__img"><img src="../upload/{{ $partner->image }}" alt=""></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section dark-bg">
        <div class="container">
            <h2 class="section-title section-title--light text-center">Новости</h2>
            <div class="row">
                @foreach($news as $new)
                <div class="col-12 col-lg-4">
                    <div class="news-section__item">
                        <strong><a href="/news-detail/{{ $new->id }}">{{ $new->title }}</a></strong>
                        <p>{!! substr($new->description, 0, 200) !!} ...</p>
                        <p>{{ date('d.m.Y', strtotime($new->data)) }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection

