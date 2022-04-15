@extends('layout')

@section('content')
<div class="first-screen">
    <div class="first-screen__description first-screen__item">
        <h1 class="first-screen__title title">Find the Best Courses and Amazing Mentor</h1>
        <p class="first-screen__subtitle subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus</p>
        <form action="#" class="search-form search-form_large">
            <div class="search-form__body search-form__body_with_icon">
                <input class="search-form__input  search-form__input_large" placeholder="Шукати тут..."></input>
            </div>
        </form>
        <div class="achievement">
            <div class="achievement__body">
                <div class="achievement__item">
                    <img src="{{asset('storage/img/front/time.png')}}" alt="clock" class="achievement__img">
                    <span class="achievement__text">Постійний доступ</span>
                </div>
                <div class="achievement__item">
                    <img src="{{asset('storage/img/front/small_mentor.png')}}" alt="mentor" class="achievement__img">
                    <span class="achievement__text">Допомога менторів</span>
                </div>
                <div class="achievement__item">
                    <img src="{{asset('storage/img/front/play.png')}}" alt="play" class="achievement__img">
                    <span class="achievement__text">100К+ курсів</span>
                </div>
            </div>
        </div>
    </div>
    <div class="first_screan__img firs-screen__item">
        <img src="{{asset('storage/img/front/fs__img.png')}}" alt="" class="img-responsive">
    </div>
    
</div>
<div class="trending-courses">
    <div class="container">
        <div class="trending-courses__body">
            <div class="title title_purple">Трендові курси</div>
            <div class="trending-courses__link-list">
                <button class="trending-courses__link btn is_active">Усі</button>
                <button class="trending-courses__link btn ">Розробка</button>
                <button class="trending-courses__link btn">Маркетинг</button>
                <button class="trending-courses__link btn">Бізнес</button>
                <button class="trending-courses__link btn">Арт та Дизайн</button>
            </div>  
            <div class="courses-list">
                @foreach ($courses as $course)
                    @include('components.course-card' , ['course' => $course ])
                @endforeach                  
            </div>
            <div class="trending-courses__more">
                <a href="{{route('courses.index')}}"class="btn btn_bg_pink">Більше курсів</a>
            </div>
        </div>
    </div>
</div>
<div class="categories font_rubik">
    <div class="container">
        <div class="title title_purple">Топ категорії</div>
        <div class="categories__body">
            @foreach ($categories as $category)
                @include('components.category-card', ['category', $category])
            @endforeach
        </div>
    </div>
</div>
<div class="achievements font_rubik achievement_margin_top">
    <div class="container">
        <div class="achievements__body">
            <div class="achievements__item">
                <img src="{{asset('storage/img/front/courses.png')}}" alt="" class="achievements__icon">
                <div class="achievements__number">10 000+</div>
                <div class="achievements__title"> Курсів</div>
            </div>
            <div class="achievements__item">
                <img src="{{asset('storage/img/front/person.png')}}" alt="" class="achievements__icon">
                <div class="achievements__number">1000+</div>
                <div class="achievements__title"> Студентів</div>
            </div>
            <div class="achievements__item">
                <img src="{{asset('storage/img/front/mentor.png')}}" alt="" class="achievements__icon">
                <div class="achievements__number">700+</div>
                <div class="achievements__title">Менторів</div>
            </div>
            <div class="achievements__item">
                <img src="{{asset('storage/img/front/countries.png')}}" alt="" class="achievements__icon">
                <div class="achievements__number">50+</div>
                <div class="achievements__title">Країн</div>
            </div>
        </div>
    </div>

    <div class="become-mentor become-mentor_margin">
        <div class="container">
            <div class="become-mentor__body">
                <div class="become-mentor__img">
                    <img class="img-responsive img_border_radius" src="{{asset('storage/img/front/become-mentor.png')}}" alt="">
                </div>
                <div class="become-mentor__content">
                    <div class="title title_purple">Стати викладачем</div>
                    <p class="subtitle subitle_color_gray">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quis nemo ad nostrum natus esse totam necessitatibus, fuga facilis accusamus dignissimos rerum aspernatur minima sint distinctio enim cumque ab laboriosam!
                    Consequuntur non nulla veritatis dolor aspernatur cumque qui, iste voluptate repudiandae distinctio, quidem alias modi delectus cum, quia in hic itaque amet tenetur? Illum aspernatur debitis alias, veniam voluptates cupiditate.</p>
               
                    <p class="subtitle subitle_color_gray">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quis nemo ad nostrum natus esse totam necessitatibus, fuga facilis accusamus dignissimos rerum aspernatur minima sint distinctio enim cumque ab laboriosam!
                        Consequuntur non nulla veritatis dolor aspernatur cumque qui, iste voluptate repudiandae distinctio, quidem alias modi delectus cum, quia in hic itaque amet tenetur? Illum aspernatur debitis alias, veniam voluptates cupiditate.</p>
                        
                        <div class="become-mentor__link">
                            <a href="#" class="btn btn_bg_pink"> Почати викладати </a>
                        </div>
                        
                 </div>
            </div>
        </div>
    </div>
    
</div>
@endsection