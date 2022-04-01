@extends('layout')

@section('content')
<div class="container course_container">
    <div class="aboute-course aboute-course_wrapper">
        <div class="course-info">
            <div class="title title_purple">{{$course->title}}</div>
            <p class="description desc_margin font_montserat">{{$course->description}}</p>
        </div>
        <div class="title title_purple course_margin">objectives-features</div>
        <div class="objectives-features font_montserat">
            <ul class="objectives-features__list">
                @foreach ($course->objectives as $objectives)
                    <li class="objectives-features__item">
                        <p class="objectives-features__text">
                            {{$objectives->title}}
                        </p>
                    </li>
                @endforeach 
            </ul>
        </div>
        <div class="course-structure font_montserat">
            <div class="course-structure__head">
                <div class="title title_purple module-title_margin">Модулі курсів</div>
                <div class="course-structure__size">
                    {{count($course->modules)}}  модулів
                </div>
            </div>
            
            @foreach ($course->modules as $module)
                @include('components.course-module') 
            @endforeach


        </div>
        <div class="title title_purple course_margin">Ментор</div>
        <div class="about-mentor">
            <div class="mentro-img__wrapper">
                <img src="{{asset('')}}{{$course->teacher->photo}}" alt="" class="mentor__img img-responsive">
            </div>
            <div class="mentor__info font_montserat">
                <div class="mentor__name font_rubik">{{$course->teacher->first_name}} {{$course->teacher->last_name}}</div>
                <p class="description">{{$course->teacher->description}}</p>
                <nav class="additional-info">
                    <ul>
                        <li class="additional-info__item">{{count($course->teacher->teaching)}} курси</li>
                        <li class="additional-info__item">247 студентів</li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="title title_purple course_margin">Оцінки користувачів</div>
        <div class="feedback">
            <div class="feedback__overall font_rubik">
                <div class="feadback__rating">{{bcdiv($course->reviews_avg_rating , 1, 1);}}</div>
                <span class="star_{{round($course->reviews_avg_rating)}} star_big"></span>
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
                <ul id="comment-data">
                
                    @foreach ($comments as $review)
                        @include('components.review-item', ['review', $review])   
                    @endforeach
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
                        @if ($course->discount_exists)
                        <s class="courses-body__price_crossed">
                            {{$course->price->price}}$
                        </s> 
                        <span class="courses-card__price">
                            {{$course->price_with_discount}}$
                        </span>
                        @else
                            <span class="courses-card__price">
                                {{$course->price->price}}$
                            </span>
                        @endif
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