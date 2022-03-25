<?php

namespace App\Http\Controllers;

use App\Filters\CourseFilter;
use App\Models\Course;
use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function index(CourseFilter $request){

        $courses = Course::filter($request)
                            ->withAvg('reviews', 'rating')
                            ->withExists('discount')                
                            ->get();

        
        return view('catalog.index', [
            'courses' => $courses
        ]);
    } 
}

