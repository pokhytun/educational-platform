<li class="reviews__item">
    <div class="review__head">
        <div class="comentatator-info">
            <img src="{{asset('storage') }}\{{$review->user->photo}}" alt="user photo" class="comentator__photo">
            <div class="review-info font_rubik">
                <div class="comentator__name">{{$review->user->first_name}} {{$review->user->last_name}}</div>
                <span class="star_{{$review->rating}} reviews_star"></span>
                <div class="review__data">{{$review->date_diff}} тому</div>
            </div>
        </div>
        <div class="review__rating_icon">
            <div data-id_review="{{$review->id}}">
                <svg class="icon_like likes @if($review->is_auth_user_liked_review_exists) icon_like_active @endif" data-event="1">
                    <use href="{{asset('storage/img/front/svg/sprite.svg#icon_like')}}"></use>
                </svg>
                <span class="count-like">{{count($review->like)}}</span>
                <svg class="icon_dislike likes @if($review->is_auth_user_disliked_review_exists) icon_dislike_active @endif" data-event="0">
                    <use href="{{asset('storage/img/front/svg/sprite.svg#icon_dislike')}}"></use>
                </svg>
                <span class="count-dislike">{{count($review->dislike)}}</span>
            </div>

        </div>
    </div>
    <p class="review__text">
        {{$review->review}}
    </p>
</li>