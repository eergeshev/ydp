<header class="header">
    <div class="container">
        <nav class="header__nav">
            <a href="/" class="header__logo">
                <img src="../img/header-logo.svg" alt="Платформа молодых дизайнеров">
            </a>
            <ul>
                <li><a href="/about-us" class="nav-custom {{ (request()->is('about-us')) ? 'nav-custom-active' : '' }}">О нас</a></li>
                <li><a href="/projects" class="nav-custom {{ (request()->is('projects')) ? 'nav-custom-active' : '' }}">Проекты</a></li>
                <li><a href="/news" class="nav-custom {{ (request()->is('news')) ? 'nav-custom-active' : '' }}">Новости</a></li>
                <li><a href="/designers" class="nav-custom {{ (request()->is('designers')) ? 'nav-custom-active' : '' }}">База дизайнеров</a></li>
                <li><a href="#" class="nav-custom">Онлайн магазин</a></li>
                <li class="social-links">
                    <a href="{{ $about->facebook }}" class="social-link social-link--fb"></a>
                    <a href="{{ $about->instagram }}" class="social-link social-link--inst"></a>
                    <a href="{{ $about->youtube }}" class="social-link social-link--yout"></a>
                    <a href="{{ $about->tiktok }}" class="social-link social-link--tik"></a>
                </li>
            </ul>
            <div class="menu-btn not-active" id="menu-btn"><span></span></div>
        </nav>
    </div>
</header>


