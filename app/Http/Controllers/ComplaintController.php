<?php

namespace App\Http\Controllers;

use App\Models\CommentComplaint;
use App\Models\CourseReviews;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
   
    public function adminComplaints() {
        return view('admin.user.complaints', ['compleints' => CourseReviews::Appealed()]);
    }

  
    public function create(Request $request){
        CommentComplaint::create([
            'user_id' => Auth()->id(),
            'review_id' => $request->review_id,
        ]);

        return response()->json($request->review_id);
    }


}
