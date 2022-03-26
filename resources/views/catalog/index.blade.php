@extends('layout')

@section('title', 'Каталог')
    
@section('content')
    <div class="container">
        @if (!count($courses))
            @include('components.error', ['title' => 'Курс не знайдено']) 
        @else   
        <div class="title title_purple title_margin">Всі курси</div>
        <div class="catalog-body">
            <aside class="catalog-filter">
                <div class="catalog-filter__container">

                    <form class="aside-block aside-block_margin" method="GET" action="{{route('catalog.index')}}">
                        <div class="aside__title font_rubik">
                            <span class="aside-btn">Категорії</span>
                            <svg class="aside__svg"></svg>
                        </div>
                       <div class="aside-link-list font_montserat">


                           @foreach ($categories as $category)

                           @php
                             $checked = [];   
                             if(isset($_GET['category'])){
                                 $checked = $_GET['category'];
                             }
                           @endphp

                                <div class="aside-link-list__item">
                                    <input type="checkbox" value="{{$category->id}}" name="category[]"
                                        @if(in_array($category->id, $checked)) checked @endif
                                    >    
                                    <div class="aside-link__text ">{{$category->title}}</div>
                                    <span class="font_montserat">({{count($category->courses)}})</span>
                                </div>  
                           @endforeach
                    
                          
                       </div>
                       <input type="submit" class="btn btn_bg_transparent">
                    </form>
                   
                </div>
            </aside>
            <div class="all-courses">
                <div class="courses-list courses-list_width">
                    @foreach ($courses as $course)
                        @include('components.course-card', ['course' => $course]) 
                    @endforeach 
                </div>
            </div>
        </div>
        @endif
    </div>
@endsection
