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
                    @include('components.filter-block')
                   
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
