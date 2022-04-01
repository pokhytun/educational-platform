<li class="reviews__item">
    <div class="review__head">
        <div class="comentatator-info">
            <img src="{{asset('storage/img/users/default.png')}}" alt="" class="comentator__photo">
            <div class="review-info font_rubik">
                <div class="comentator__name">Hlyboka Hlotka</div>
                <span class="star_{{$review->rating}} reviews_star"></span>
                <div class="review__data">{{$review->date_diff}} тому</div>
            </div>
        </div>
        <div class="review__rating_icon">
            <div class="icon_like">+1</div>
            <div class="icon_dislike">-1</div>
        </div>
    </div>
    <p class="review__text">
        {{$review->review}}
    </p>
</li>