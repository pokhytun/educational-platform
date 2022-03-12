<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function index(){

        $courses = Course::all();
    
        return view('catalog.index', [
            'courses' => $courses
        ]);
    } 
}
