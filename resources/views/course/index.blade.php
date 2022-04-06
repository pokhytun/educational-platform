@extends('layout')

@section('content')
<div class="container course_container">
    <div class="aboute-course aboute-course_wrapper">
        <div class="course-info" data-course_id={{$course->id}}>
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
                <img src="{{asset('storage')}}{{$course->teacher->photo}}" alt="" class="mentor__img img-responsive">
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
            <div hidden id="rating">{!! json_encode($rating) !!}</div>
            <div class="rating-strips font_montserat">
                <nav class="rating-strips__list">
                    <ul>
                        @foreach ($rating as $key => $item)
                            <li class="rating-strips__item">
                                <div class="strip strip_margin">
                                    <div class="strip_fill"></div>
                                </div>
                                <span class="star_{{$key}} star_middle"></span>
                                <span class="rating-stiprs__count-review">( {{$item}} оцінок)</span>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
        <div class="reviews  course_margin font_montserat">
            <div class="title title_purple module-title_margin">Відгуки</div>
            <form class="review-form review-form_margin">
                <textarea class="review__input" type="text" placeholder="Залишити відгук" name="textarea"></textarea>
                <div class="review__btn">
                    <a @if( Auth::user()) id="send-review" @else href="{{route('login')}}" @endif class="btn btn_bg_pink ">Коментувати</a>
                        <div class="rating-area">
                            <input type="radio" id="star-5" name="rating" value="5">
                            <label for="star-5" title="Оцінка «5»"></label>	
                            <input type="radio" id="star-4" name="rating" value="4">
                            <label for="star-4" title="Оцінка «4»"></label>    
                            <input type="radio" id="star-3" name="rating" value="3">
                            <label for="star-3" title="Оцінка «3»"></label>  
                            <input type="radio" id="star-2" name="rating" value="2">
                            <label for="star-2" title="Оцінка «2»"></label>    
                            <input type="radio" id="star-1" name="rating" value="1" checked>
                            <label for="star-1" title="Оцінка «1»"></label>
                        </div>
                </div>
            </form>
            <nav class="reviews__list">
                <ul id="my-comment">
                    
                </ul>
                <ul id="comment-data" data-count="{{$comm_sum}}">
                    
                </ul>
            </nav>
            <div class="gif-block">
                <img src="{{asset('storage/img/front/gif-loading.gif')}}" alt="" class="gif-loading">
            </div>
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