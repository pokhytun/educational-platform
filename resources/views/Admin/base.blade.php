<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('storage/style/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Адмін панель</title>
</head>
<body>
    <div class="admin-wrapper">
        <aside class="admin-aside font_rubik">
            <nav class="admin-navigation admin-navigation_margin">
                <ul class="admin-navigation__list">
                    <li class="admin-navigation__item ">
                        <a href="#" class="admin-navigation__link">
                            <img class="admin__photo" src="{{asset('storage')}}/{{$user->photo}}">
                            <span class="admin-navigation__title">{{$user->first_name}}</span>  
                        </a>
                    </li>
                    <li class="admin-navigation__item" id="users">
                        <a href="{{route('admin.users.home')}}" class="admin-navigation__link">
                            <i class='bx bx-user bx-md admin-navigation__icon'></i>
                            <span class="admin-navigation__title">Користувачі</span>  
                        </a>
                    </li>
                    <li class="admin-navigation__item ">
                        <a href="#" class="admin-navigation__link">
                            <i class='bx bxs-book-content bx-md admin-navigation__icon'></i>
                            <span class="admin-navigation__title">Курси</span>  
                        </a>
                    </li>
                    <li class="admin-navigation__item admin-logout">
                        <a href="#" class="admin-navigation__link">
                            <i class='bx bxs-exit bx-md admin-navigation__icon'></i>
                            <span class="admin-navigation__title">Вихід</span>  
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <div class="admin-contetn">
            @yield('info-blocks')
            @yield('content')
        </div>
    </div>
    <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
    <script src="{{asset('storage/script/admin.js')}}"></script>
</body>
</html>