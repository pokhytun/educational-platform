<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function index(){

        $courses = Course::withAvg('reviews', 'rating')->get();
    
        return view('catalog.index', [
            'courses' => $courses
        ]);
    } 
}
