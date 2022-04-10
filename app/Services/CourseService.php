<?php

namespace App\Services;

use App\Models\Course;
use App\Models\CourseReviews;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class CourseService{

    public function toggleLike($request){

        $review_id = $request->review_id;
        $event = $request->event;
        $user_id = Auth::id();

        

        $likes = Like::LikesExists($review_id, $user_id, $event);
          

        if( $likes->exists() )
        {
            $likes->delete();  
        }

        else
        {

            Like::updateOrCreate([
                'review_id' => $review_id,
                'user_id' => $user_id,
            ],
            [
                'is_like' => $event,
            
            ]);

        }

        $likes = CourseReviews::find($request->review_id);
          
    
        return ['like_count' => count($likes->like) , 'dislike_count' => count($likes->dislike)];

    }

    public function loadCommentAjax($request){
        $course = Course::find($request->course_id);

        $comm = $course->reviews()->orderBy('created_at', 'DESC')
        ->withExists('isAuthUserLikedReview')
        ->withExists('isAuthUserDislikedReview')
        ->withExists('isAuthUserComplainedReview')
        ->get();

        $view = view('components.review-item', ['review' => $comm[$request->comment_id]])->render();
        
        return response()->json(['html'=>$view]);
    }
}