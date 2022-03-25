<?php

namespace App\Filters;

class CourseFilter extends QueryFilter{

    public function search_field($search_string = ''){
        return $this->builder->where('title', 'LIKE', '%'.$search_string.'%');
    }
    
}