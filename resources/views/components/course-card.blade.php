<div href="#" class="courses-item">
    <div class="courses__category">{{$course->category->title}}</div>
    <div class="courses-body">
        <div class="courses-body__img">  
            <a href="#" class="courses-body__img-link">
                <img src="{{asset('storage/img/courses/imgc.png')}}" alt="" class="img-responsive">
            </a>
        </div>
        <div class="courses-body__contetnt">
                <a href="#" class="link link_color_purple">{{$course->title}}</a>
            <div class="rating-result courses-rating_result">
                <span class="star star_{{round($course->reviews_avg_rating)}}"></span>	
                <div class="rating__number">({{count($course->reviews)}})</div>
            </div>
            <div class="courses-body__prices">
                
                @if ($course->discount_exists)
                    <s class="courses-body__price_crossed">
                        {{$course->price->price}}$
                    </s> 
                    <span class="courses-body__price">
                        {{$course->price_with_discount}}$
                    </span>
                @else
                    <span class="courses-body__price">
                        {{$course->price->price}}$
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>