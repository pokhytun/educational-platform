<div class="error-body">
    <div class="error__info">
        <p class="title error">{{$title}}</p>
        <img class=" error__img "src="{{asset('storage/img/front/ghost.png')}}" alt="">
    </div>
    <div class="error__btn">
        <a class="btn btn_bg_transparent" href="{{route('home.index')}}">На головну</a>
        <a class="btn btn_bg_transparent" href="{{route('catalog.index')}}">До каталогу</a>
    </div>
</div>
