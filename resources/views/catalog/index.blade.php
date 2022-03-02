@extends('layout')

@section('title', 'Каталог')
    
@section('content')
    <div class="container">
        <div class="title title_purple title_margin">Всі курси</div>
        <div class="catalog-body">
            <aside class="catalog-filter">
                <div class="catalog-filter__container">
                    @include('components.filter-block')
                   
                </div>
            </aside>
            <div class="all-courses">
                <div class="courses-list courses-list_width">
                    @include('components.course-card')    
                    @include('components.course-card')    
                    @include('components.course-card')    
                    @include('components.course-card')    
                    @include('components.course-card')    
                </div>
            </div>
        </div>
    </div>
@endsection
