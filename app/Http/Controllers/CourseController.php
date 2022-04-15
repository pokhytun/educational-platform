<?php

namespace App\Http\Controllers;

use App\Filters\CourseFilter;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseController extends Controller
{
   
    public function index(CourseFilter $request){
        $courses = Course::filter($request)
                            ->withAvg('reviews', 'rating')
                            ->withExists('discount')                
                            ->get();

        
        
        return view('courses.index', [
            'courses' => $courses,
            'categories' => CourseCategory::all(),
        ]);
    }

   
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        //
    }

  
    public function show(Course $course){
        $c = Course::where('id', $course->id)
                    ->withExists('discount') 
                    ->withAvg('reviews', 'rating') 
                    ->with('reviews')
                    ->first();
        
        $rating = $course->reviews->sortByDesc('rating')->pluck('rating')->countBy();
        
        return view('courses.show',['course' => $c, 'rating' => $rating]);
    }


    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
