<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
    

        $courses = Course::select()
                            ->withAvg('reviews', 'rating')
                            ->withExists('discount')
                            ->withCount('reviews')
                            ->take(8)->get()->sortByDesc('reviews');
    
        
        $categories = CourseCategory::withCount('courses')
                                                ->take(4)
                                                ->get()
                                                ->sortByDesc('courses');
        
       
    
        return view('home.index', [
            'courses' => $courses,
            'categories' => $categories,
        ]);
    }
}

