<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalOfficeController extends Controller
{
 
    public function index(){
    
        return view('office.index',[
            'user' => User::find(Auth::id()),
            
        ]);
    }
}
