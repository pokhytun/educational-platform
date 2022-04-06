<li class="reviews__item">
    <div class="review__head">
        <div class="comentatator-info">
            <img src="{{asset('storage')}}/{{$review->user->photo}}" alt="user photo" class="comentator__photo">
            <div class="review-info font_rubik">
                <div class="comentator__name">{{$review->user->first_name}} {{$review->user->last_name}}</div>
                <span class="star_{{$review->rating}} reviews_star"></span>
                <div class="review__data">{{$review->date_diff}} тому</div>
            </div>
        </div>
        <div class="review__rating_icon">
            <div data-id_review="{{$review->id}}">
                <a @if( Auth::user()) class="likes like_btn" href="#" @else href="{{route('login')}}" @endif  data-event="1"> 
                    <svg class="icon_like @if($review->is_auth_user_liked_review_exists) icon_like_active @endif" >
                        <use href="{{asset('storage/img/front/svg/sprite.svg#icon_like')}}"></use>
                    </svg>
                </a>
                <span class="count-like">{{count($review->like)}}</span>
                <a @if( Auth::user()) class="likes dislike_btn" href="#" @else href="{{route('login')}}" @endif data-event="0">
                    <svg class="icon_dislike @if($review->is_auth_user_disliked_review_exists) icon_dislike_active @endif">
                        <use href="{{asset('storage/img/front/svg/sprite.svg#icon_dislike')}}"></use>
                    </svg>
                </a>
                <span class="count-dislike">{{count($review->dislike)}}</span>
            </div>
        </div>
    </div>
    <p class="review__text">
        {{$review->review}}
    </p>
</li>

