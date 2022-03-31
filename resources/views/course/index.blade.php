@extends('layout')

@section('content')
<div class="container course_container">
    <div class="aboute-course aboute-course_wrapper">
        <div class="course-info">
            <div class="title title_purple">What you’ll learn from this course</div>
            <p class="description desc_margin font_montserat">Lorem ipsum dolor sit amet, consectetur adipiscing e
            lit. Feugiat eu in orci, nunc amet libero. Nam scelerisque vestibulum bibendum a turpis. Ante feugiat lectus massa, odio amet. Auctor sit mattis non id proin elit placerat. Lectus morbi amet et aliquam magna mauris. Proin pulvinar fringilla nunc, tristique urna, massa, tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat eu in orci, nunc amet libero. Nam scelerisque vestibulum bibendum a turpis. Ante feugiat lectus massa, odio amet. Auctor sit mattis non id proin elit placerat. Lectus morbi amet et aliquam magna mauris. Proin pulvinar fringilla nunc, tristique urna, massa, tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat eu in orci, nunc amet libero. Nam scelerisque vestibulum bibendum a turpis. Ante feugiat lectus massa, odio amet. Auctor sit mattis non id proin elit placerat. Lectus morbi amet et aliquam magna mauris. Proin pulvinar fringilla nunc, tristique urna, massa, tincidunt. </p>
        </div>
        <div class="title title_purple course_margin">objectives-features</div>
        <div class="objectives-features font_montserat">
            <ul class="objectives-features__list">
                <li class="objectives-features__item">
                    <p class="objectives-features__text">
                        Build fully websites and web apps for your startup or business.
                    </p>
                </li>
                <li class="objectives-features__item">
                    <p class="objectives-features__text">
                        Build fully websites and web apps for your startup or business.
                    </p>
                </li>
                
            </ul>
        </div>
        <div class="course-structure font_montserat">
            <div class="course-structure__head">
                <div class="title title_purple module-title_margin">Модулі курсів</div>
                <div class="course-structure__size">
                    24 модуля - 124 лекції 24 години
                </div>
            </div>
            
            @include('components.course-module')

        </div>
        <div class="title title_purple course_margin">Ментор</div>
        <div class="about-mentor">
            <div class="mentro-img__wrapper">
                <img src="{{asset('storage/img/users/default.png')}}" alt="" class="mentor__img img-responsive">
            </div>
            <div class="mentor__info font_montserat">
                <div class="mentor__name font_rubik">Afrek Pretik</div>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat eu in orci, nunc amet libero. Nam scelerisque vestibulum bibendum a turpis.</p>
                <nav class="additional-info">
                    <ul>
                        <li class="additional-info__item">13 курсів</li>
                        <li class="additional-info__item">247 студентів</li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="title title_purple course_margin">Оцінки користувачів</div>
        <div class="feedback">
            <div class="feedback__overall font_rubik">
                <div class="feadback__rating">5.0</div>
                <span class="star_5 star_big"></span>
            </div>
            <div class="rating-strips font_montserat">
                <nav class="rating-strips__list">
                    <ul>
                        <li class="rating-strips__item">
                            <div class="strip strip_margin">
                                <div class="strip_fill"></div>
                            </div>
                            <span class="star_5 star_middle"></span>
                            <span class="rating-stiprs__count-review">233 відгуки</span>
                        </li>
                        <li class="rating-strips__item">
                            <div class="strip strip_margin">
                                <div class="strip_fill"></div>
                            </div>
                            <span class="star_4 star_middle"></span>
                            <span class="rating-stiprs__count-review">233 відгуки</span>
                        </li>
                        <li class="rating-strips__item">
                            <div class="strip strip_margin">
                                <div class="strip_fill"></div>
                            </div>
                            <span class="star_3 star_middle"></span>
                            <span class="rating-stiprs__count-review">233 відгуки</span>
                        </li>
                        <li class="rating-strips__item">
                            <div class="strip strip_margin">
                                <div class="strip_fill"></div>
                            </div>
                            <span class="star_2 star_middle"></span>
                            <span class="rating-stiprs__count-review">233 відгуки</span>
                        </li>
                        <li class="rating-strips__item">
                            <div class="strip strip_margin">
                                <div class="strip_fill"></div>
                            </div>
                            <span class="star_1 star_middle"></span>
                            <span class="rating-stiprs__count-review">233 відгуки</span>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="reviews font_montserat">
            <div class="title title_purple module-title_margin">Відгуки</div>
            <nav class="reviews__list">
                <ul>
                    <li class="reviews__item">
                        <div class="review__head">
                            <div class="comentatator-info">
                                <img src="{{asset('storage/img/users/default.png')}}" alt="" class="comentator__photo">
                                <div class="review-info font_rubik">
                                    <div class="comentator__name">Hlyboka Hlotka</div>
                                    <span class="star_5 reviews_star"></span>
                                    <div class="review__data">2 дні назад</div>
                                </div>
                            </div>
                            <div class="review__rating_icon">
                                <div class="icon_like">+1</div>
                                <div class="icon_dislike">-1</div>
                            </div>
                        </div>
                        <p class="review__text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae non id interdum massa enim posuere. Tempus, risus varius rhoncus ipsum, sed egestas nisi pellentesque. Sapien quam varius euismod in velit diam posuere netus nec. A consectetur nec ac sed convallis adipiscing. Aenean enim cursus a
                        </p>
                    </li>
                    <li class="reviews__item">
                        <div class="review__head">
                            <div class="comentatator-info">
                                <img src="{{asset('storage/img/users/default.png')}}" alt="" class="comentator__photo">
                                <div class="review-info font_rubik">
                                    <div class="comentator__name">Hlyboka Hlotka</div>
                                    <span class="star_5 reviews_star"></span>
                                    <div class="review__data">2 дні назад</div>
                                </div>
                            </div>
                            <div class="review__rating_icon">
                                <div class="icon_like">+1</div>
                                <div class="icon_dislike">-1</div>
                            </div>
                        </div>
                        <p class="review__text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae non id interdum massa enim posuere. Tempus, risus varius rhoncus ipsum, sed egestas nisi pellentesque. Sapien quam varius euismod in velit diam posuere netus nec. A consectetur nec ac sed convallis adipiscing. Aenean enim cursus a
                        </p>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <aside>
        <div class="course-card_big font_rubik">
            <div class="course-card-wrapper">
                <img src="" alt="" class="card-photo img-responsive">
                <div class="courses-card__container">
                    <div class="courses-body__prices courses-body__prices_border_bottom ">
                        <span class="courses-card__price">
                            400$
                        </span>
                        <s class="courses-card__price_crossed">
                            990$
                        </s> 
                    </div>

                    <div class="course-feature course_margin">
                        <ul class="course-feature__list">
                            <li class="course-feature_item">24 модуля</li>
                            <li class="course-feature_item">24 модуля</li>
                            <li class="course-feature_item">24 модуля</li>
                            <li class="course-feature_item">24 модуля</li>
                        </ul>
                    </div>
                    <div class="course-card__btn">
                        <a href="#" class="btn btn_bg_pink btn_responsive">Купити</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </aside>
</div>
@endsection