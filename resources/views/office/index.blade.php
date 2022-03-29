@extends('layout')

@section('content')
    <div class="container">
        <div class="personal-info personal_margin font_montserat">
            <img src="{{asset('storage/')}}/{{$user->photo}}" alt="" class="personal-photo">
            <div class="personal__name">{{$user->first_name}} {{$user->last_name}}</div>
            <div class="personal__status">(admin)</div>
        </div>
        <div class="personal-courses personal_margin font_rubik">
            <nav class="personal-courses__nav">
                <li><div data-tab='tab-1' class="personal-courses__link tab-nav-item personal-courses__link_active">Придбані курси</a></li>
                <li><div data-tab='tab-2' class="personal-courses__link tab-nav-item">Список бажаного</a></li>
            </nav>
            <div class="wish-list tab-content tab-1 personal_margin block_active">
                <div class="all-courses">
                    <div class="courses-list courses-list_width">
                        @foreach ($purchasedCourses as $course)
                            @include('components.course-card', ['course' => $course]) 
                        @endforeach 
                    </div>
                </div>
            </div>
            <div class="personal-courses__wrapper tab-content tab-2 personal_margin">

                
            
            </div>        
        </div>
    </div>
@endsection