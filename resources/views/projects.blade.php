@extends('layouts.app')

@section('content')
<div class="page">
    <div class="page__head">
        @include('layouts.navbar')
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h1 class="section-title">Кыргызстан в четыре раза нарастил поставки в Россию</h1>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="page__head-img">
                        <img src="./content/project1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <section class="projects container">--}}
    @livewire('projects')
{{--        <div class="project">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 col-lg-7">--}}
{{--                    <div class="project__img">--}}
{{--                        <img src="./content/project2.jpg" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-lg-5">--}}
{{--                    <div class="project__body">--}}
{{--                        <h3 class="project__title">Кыргызстан в четыре раза нарастил поставки швейных изделий в Россию</h3>--}}
{{--                        <p class="project__descr">Первый бренд для людей с синдромом Дауна. Разработан кураторами и выпускниками Британской высшей школы дизайна в коллаборации с AliExpress.</p>--}}
{{--                        <a href="#" class="button">Подробнее</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="project">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 col-lg-7 order-lg-2">--}}
{{--                    <div class="project__img">--}}
{{--                        <img src="./content/project2.jpg" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-lg-5">--}}
{{--                    <div class="project__body">--}}
{{--                        <h3 class="project__title">Кыргызстан в четыре раза нарастил поставки швейных изделий в Россию</h3>--}}
{{--                        <p class="project__descr">Первый бренд для людей с синдромом Дауна. Разработан кураторами и выпускниками Британской высшей школы дизайна в коллаборации с AliExpress.</p>--}}
{{--                        <a href="#" class="button">Подробнее</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="project">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 col-lg-7">--}}
{{--                    <div class="project__img">--}}
{{--                        <img src="./content/project2.jpg" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-lg-5">--}}
{{--                    <div class="project__body">--}}
{{--                        <h3 class="project__title">Кыргызстан в четыре раза нарастил поставки швейных изделий в Россию</h3>--}}
{{--                        <p class="project__descr">Первый бренд для людей с синдромом Дауна. Разработан кураторами и выпускниками Британской высшей школы дизайна в коллаборации с AliExpress.</p>--}}
{{--                        <a href="#" class="button">Подробнее</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="text-center">--}}
{{--            <button class="button">Еще</button>--}}
{{--        </div>--}}
{{--    </section>--}}
</div>
@endsection
