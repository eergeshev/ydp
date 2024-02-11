@extends('layouts.app')

@section('content')
<div class="page">
    <div class="page__head">
        @include('layouts.navbar')
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h1 class="section-title">{{ $project->title }}</h1>
                    <p class="page__description">{{ $project->intro_text }}</p>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="page__head-img">
                        <img src="../../upload/{{ $project->image }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-articles">
        <div class="container">
            @foreach($project_details as $detail)
                <div class="about-article">
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <h3 class="section-title">{{ $detail->title }}</h3>
                        </div>
                        <div class="col-12 col-lg-7">
                            {!! $detail->description !!}
                        </div>
                    </div>
                </div>
            @endforeach
{{--            <div class="about-article">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12 col-lg-5">--}}
{{--                        <h3 class="section-title">Modern challenges</h3>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-lg-7">--}}
{{--                        <p>Nowadays, the industry is faced with a challenge of adequately responding to the needs and wants of the market. With rising standards of living in CIS countries, consumers are becoming “choosier” and marketplaces are gradually shifting from bazaars to shopping malls and e-commerce platforms, pushing clothing manufacturers to focus on the quality and design to add value to their products instead of manufacturing low quality cheaper products. Accordingly, there is a growing demand for qualified specialists in garment design and technology from manufacturers. But, on the other hand, the supply of such skilled labor in the country is drastically insufficient, making it a serious barrier for many apparel companies to properly and timely responding to market needs and surviving in a highly competitive environment.</p>--}}
{{--                        <p>When we delve into the core of this gap between the demand and the supply of skilled labor (especially, garment designers and technologists), we come across a small number of state-owned higher educational institutions and specialized technical schools where the quality of education is low and the technological base for teaching and learning, to generalize - highly underdeveloped. Having interviewed a number of undergraduate students in their senior year, we discovered that, in general, out of those, who begin in garment design and technology, a significant part drops out, and a very tiny fraction of those who graduate (whether successful or unsuccessful) continue to work in their fields. That shows that most of the students who choose these fields lose their confidence and interest over time, become demotivated and stop seeing themselves as future designers and technologists.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="about-article">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12 col-lg-5">--}}
{{--                        <h3 class="section-title">Our project</h3>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-lg-7">--}}
{{--                        <p>Nowadays, the industry is faced with a challenge of adequately responding to the needs and wants of the market. With rising standards of living in CIS countries, consumers are becoming “choosier” and marketplaces are gradually shifting from bazaars to shopping malls and e-commerce platforms, pushing clothing manufacturers to focus on the quality and design to add value to their products instead of manufacturing low quality cheaper products. Accordingly, there is a growing demand for qualified specialists in garment design and technology from manufacturers. But, on the other hand, the supply of such skilled labor in the country is drastically insufficient, making it a serious barrier for many apparel companies to properly and timely responding to market needs and surviving in a highly competitive environment.</p>--}}
{{--                        <p>When we delve into the core of this gap between the demand and the supply of skilled labor (especially, garment designers and technologists), we come across a small number of state-owned higher educational institutions and specialized technical schools where the quality of education is low and the technological base for teaching and learning, to generalize - highly underdeveloped. Having interviewed a number of undergraduate students in their senior year, we discovered that, in general, out of those, who begin in garment design and technology, a significant part drops out, and a very tiny fraction of those who graduate (whether successful or unsuccessful) continue to work in their fields. That shows that most of the students who choose these fields lose their confidence and interest over time, become demotivated and stop seeing themselves as future designers and technologists.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="about-article">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12 col-lg-5">--}}
{{--                        <h3 class="section-title">International Partners</h3>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-lg-7">--}}
{{--                        <a href="#" class="about-article__img"><img src="./content/partner2.png" alt=""></a>--}}
{{--                        <a href="#" class="about-article__img"><img src="./content/partner2.png" alt=""></a>--}}
{{--                        <a href="#" class="about-article__img"><img src="./content/partner2.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="about-article">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12 col-lg-5">--}}
{{--                        <h3 class="section-title">Local Partners</h3>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-lg-7">--}}
{{--                        <a href="#" class="about-article__logo-img"><img src="./content/partner2.png" alt=""></a>--}}
{{--                        <a href="#" class="about-article__logo-img"><img src="./content/partner2.png" alt=""></a>--}}
{{--                        <a href="#" class="about-article__logo-img"><img src="./content/partner2.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="about-article">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12 col-lg-5">--}}
{{--                        <h3 class="section-title">Designers</h3>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-lg-7">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12 col-md-6">--}}
{{--                                <a href="#" class="designer-card">--}}
{{--                                    <img src="./content/designer1.jpg" alt="">--}}
{{--                                    <strong>Zidan Zuis</strong>--}}
{{--                                    <span>Fashion designer, student</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-md-6">--}}
{{--                                <a href="#" class="designer-card">--}}
{{--                                    <img src="./content/designer1.jpg" alt="">--}}
{{--                                    <strong>Zidan Zuis</strong>--}}
{{--                                    <span>Fashion designer, student</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-md-6">--}}
{{--                                <a href="#" class="designer-card">--}}
{{--                                    <img src="./content/designer1.jpg" alt="">--}}
{{--                                    <strong>Zidan Zuis</strong>--}}
{{--                                    <span>Fashion designer, student</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-md-6">--}}
{{--                                <a href="#" class="designer-card">--}}
{{--                                    <img src="./content/designer1.jpg" alt="">--}}
{{--                                    <strong>Zidan Zuis</strong>--}}
{{--                                    <span>Fashion designer, student</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>

</div>
@endsection
