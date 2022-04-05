<?php

namespace App\Http\Controllers;

use App\Services\CourseService;

class BaseController extends Controller{

    public $service;

    public function __construct(CourseService $service)
    {
        $this->service = $service;
    }
}