<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Designers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
{{--    <link rel="stylesheet" href="../css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/navbar.css">
    @livewireStyles
</head>
<body class="page">

<main>
    @yield('content')
</main>

<div class="banner-section banner-section--dark">
    <div class="container">
        <div class="main-banner">
            <h3 class="main-banner__title section-title">Будь в списке наших дизайнеров</h3>
            <button class="button">Подать заявку</button>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <a href="#" class="footer__logo"><img src="../img/footer-logo.svg" alt=""></a>
            </div>
            <div class="col-12 col-lg-6">
                <div class="footer__inner">
                    <nav class="footer__menu">
                        <ul>
                            <li><a href="/projects">О проекте</a></li>
                            <li><a href="/news">НОВОСТИ</a></li>
                            <li><a href="/designers">База дизайнеров</a></li>
                            <li><a href="#">Онлайн магазин</a></li>
                        </ul>
                    </nav>
                    <small>© 2016 - {{ date('Y', strtotime(\Carbon\Carbon::now())) }}   Young Designers Platform. Все права защищены.</small>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="social-links">
                    <a href="{{ $about->facebook }}" class="social-link social-link--fb"></a>
                    <a href="{{ $about->instagram }}" class="social-link social-link--inst"></a>
                    <a href="{{ $about->youtube }}" class="social-link social-link--yout"></a>
                    <a href="{{ $about->tiktok }}" class="social-link social-link--tik"></a>
                </>
            </div>
        </div>
    </div>
</footer>

<script src="../js/main.js"></script>
<script src="../js/jquery-3.6.2.min.js"></script>
<script src="../js/slick.min.js"></script>
<script>
    const nav = document.querySelector(".header__nav");
    let lastScrollY = window.scrollY;

    window.addEventListener("scroll", () => {
        if(lastScrollY < window.scrollY) {
            nav.classList.add("header__nav_hidden")
        } else {
            nav.classList.remove("header__nav_hidden")
        }

        lastScrollY = window.scrollY;
    })
</script>
@livewireScripts
</body>
</html>
