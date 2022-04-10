<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users(){
        return view('admin.user.users');
    }

    public function teachers(){
    
        return view('admin.user.teachers');
    }
}
