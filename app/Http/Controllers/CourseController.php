<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseReviews;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show(Request $request, Course $course){

        $c = Course::where('id', $course->id)->withExists('discount')->withAvg('reviews', 'rating')->first();
    
        $comments = CourseReviews::where('course_id', $course->id)->paginate(1);
        

        if ($request->ajax()) {
            foreach($comments as $comment){
                return view('components.review-item', ['review' => $comment]);
            }
    		return;
        }

        return view('course.index',['course' => $c, 'comments' => $comments]);
    }

   
}
