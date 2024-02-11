@extends('layouts.app')

@section('content')
 <div class="page dark-bg">
    @include('layouts.navbar')

    <section class="promo">
        <div class="container">
            <div class="promo__inner">
                <div class="promo__txt">
                    <h1 class="promo__title">конкурсный отбор <span>молодых</span> дизайнеров одежды. 2022-2023</h1>
                    <p class="promo__descr">Кыргызско-Турецкий Центр Развития Текстиля при поддержке ОФ «JACAFA Foundation» обявляет конкурсный отбор молодых дизайнеров одежды для участия в проекте «Платформа молодых дизайнеров»</p>
                    <div class="promo__bottom">
                        <button class="button button--light">Подать заявку</button>
                        <span>Крайний срок подачи: <strong>27 ноября 2022 г.</strong></span>
                        <span>Будут отобраны 15 <strong>креативных участников</strong></span>
                    </div>
                </div>
                <div class="promo__img">
                    <img src="./img/promo-img.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="project-slider">
            @foreach($projects as $project)
                <div class="project project--light">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div class="project__img">
                                <img src="/upload/{{ $project->image }}" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="project__body">
                                <h3 class="project__title">{{ $project->title }}</h3>
                                <p class="project__descr">{{ $project->intro_text }}</p>
                                <a href="/project-detail/{{ $project->id }}" class="button button--light">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <section class="about-section">
        <div class="about-section__inner">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h2 class="section-title section-title--light">{{ $about->title }}</h2>
                        <p class="about-section__descr">{{ $about->description }}</p>
                        <a href="/about-us" class="button button--light">Подробнее</a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="about-section__img">
                            <img src="/upload/{{ $about->image }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section">
        <div class="container">
            <h2 class="section-title section-title--light text-center">Новости</h2>
            <div class="row">
                @foreach($last_news as $new)
                    <div class="col-12 col-lg-4">
                        <div class="news-index">
                            <div class="news-section__item">
                                <div>
                                    <strong>
                                        <a href="/news-detail/{{ $new->id }}">{{ $new->title }}</a>
                                    </strong>
                                </div>
                                <div>
                                    <p>{!! substr($new->description, 0, 200) !!} ...</p>
                                </div>
                                <div>
                                    <p>{{ date('d.m.Y', strtotime($new->data)) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="designers-section mt-5">
        <div class="container">
            <h2 class="section-title section-title--light text-center">База дизайнеров</h2>
            <div class="row">
                @foreach($designers as $designer)
                <div class="col-12 col-lg-4 col-md-4">
                    <a href="/designer-detail/{{ $designer->id }}" class="designer-card designer-card--light">
                        <div class="designer-img-box">
                            <img src="/upload/{{ $designer->photo }}" alt="">
                        </div>
                        <strong>{{ $designer->first_name }} {{ $designer->last_name }}</strong>
                        <span>{{ $designer->position }}</span>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="text-center pt-4">
                <a href="/designers" class="button button--light">База всех дизайнеров</a>
            </div>

        </div>
    </section>

    <section class="partners-section">
        <div class="container">
            <h2 class="section-title section-title--light text-center">Спонсоры и<br>партнеры проекта</h2>
            <div class="parners-slider">
                @foreach($sponsors_partners as $partner)
                    <div class="partner-slide">
                        <img src="/upload/{{ $partner->image }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
