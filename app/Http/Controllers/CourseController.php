<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends BaseController
{
    public function show(Course $course){

        $c = Course::where('id', $course->id)
                    ->withExists('discount') 
                    ->withAvg('reviews', 'rating') 
                    ->with('reviews')
                    ->first();
        
        $rating = $course->reviews->sortByDesc('rating')->pluck('rating')->countBy();
        
        return view('course.index',['course' => $c, 'rating' => $rating]);
    }


   
}
