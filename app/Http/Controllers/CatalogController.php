<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function index(){

        $courses = Course::withAvg('reviews', 'rating')
                            ->withExists('discount')                
                            ->get();

        
        return view('catalog.index', [
            'courses' => $courses
        ]);
    } 
}

