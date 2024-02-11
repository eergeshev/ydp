@extends('layouts.app')

@section('content')
<div class="page">
    <div class="page__head">
        @include('layouts.navbar')
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h1 class="section-title">База дизайнеров одежды</h1>
                    <p class="page__description">Дизайнер одежды – это далеко не профессия. Это настоящее призвание. Лучшие мировые кутюрье доказывают эту истину на собственном примере. У каждого из них есть дом моды со своими поклонниками и критиками, не одна линейка модных и стильных изделий, свой характер и видение мира моды в целом.</p>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="page__head-img">
                        <img src="./content/designers-page-head.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="designers container">
        @livewire('designers')
    </section>
</div>
@endsection
