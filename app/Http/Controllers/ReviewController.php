<?php

namespace App\Http\Controllers;

use App\Models\CourseReviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends BaseController
{
    
    public function index(Request $request){
        return $this->service->loadCommentAjax($request);
    }
    
    public function create(Request $request){
        $review =  CourseReviews::create([
            'rating' => $request->review_rating,
            'course_id' => $request->course_id,
            'review' => $request->review_text,
            'user_id' => Auth::id()
        ]);

        $view = view('components.review-item', ['review' => $review])->render();
        return response()->json(['html'=>$view]);
    }

    public function like(Request $request){
    
        $res =  $this->service->toggleLike($request); // лайки
             
        return response()->json(['like_count' => $res['like_count'], 'dislike_count' => $res['dislike_count']]);
    }
    
    public function destroy($id){
        CourseReviews::where('id',$id)->delete();

        return redirect()->back();
    }
}
