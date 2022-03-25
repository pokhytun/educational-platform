<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('storage/style/style.css')}}">
    <title> @yield('title', 'Головна сторінка')</title>
</head>
<body>
    <header class="header">
        <a href="{{route('home.index')}}" class="logo"><img src="{{asset('storage/img/front/logo.png')}}" alt="Logoipsum"></a>
        <form action="{{route('catalog.index')}}" class="search-form">
            <div class="search-form__body search-form__body_with_icon">
                <input class="search-form__input" name="search_field" laceholder="Шукати тут..."></input>
            </div>
        </form>
        <nav class="navigation">
            <ul class="navigation__list">
                <a href="#" class="navigation__item link link_color_purple">Стати викладачем</a>
                <a href="#" class="navigation__item btn btn_bg_transparent">Увійти</a>
                <a href="#" class="navigation__item btn btn_bg_pink">Зареєструватись</a>
            </ul>
        </nav>
    </header>
    <main class="site-main">
        @yield('content')
    </main>
    <footer class="footer font_montserat">
        <div class="container">
            <div class="footer__body">
                <div class="footer__content footer__item">
                    <div class="footer__logo">
                        <a href="#" class="logo"><img src="{{asset('storage/img/front/footer__logo.png')}}" alt="Logoipsum"></a>
                    </div>
                    <p class="subtitle subtitle_color_white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore accusamus eum ipsum illo possimus veritatis quos neque similique corrupti commodi blanditiis id minus quibusdam, non, nobis aut facilis praesentium dignissimos.
                   natus hic optio ipsa soluta?</p>
                </div>
                <div class="footer__links footer__item">
                     <ul class="links__body">
                        <li class="links__title" >Контакти</li>
                        <li class="links__item"><a class="link  link_color_white" href="#">Про нас</a></li>
                        <li class="links__item"><a class="link  link_color_white" href="#"> Питання що до купівлі курсів </a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright ">
                <a href="#" class="copyright__link">&copy; Pokhytun Andrii</a>
           </div>
        </div>
    </footer>

    <script src="{{asset('storage/script/script.js')}}"></script>
</body>
</html>