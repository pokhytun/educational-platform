<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalOfficeController extends Controller
{
 
    public function index(){
        $user = User::find(Auth::id());

        $purchasedCourses = $user->courses()
                    ->withAvg('reviews', 'rating')
                    ->withExists('discount')                
                    ->get();

        $preferences = $user->preferenceses()
                        ->withAvg('reviews', 'rating')
                        ->withExists('discount')                
                        ->get();

        

        return view('office.index',[
            'user' => Auth()->user(),
            'purchasedCourses' => $purchasedCourses,
            'preferencesCourses' => $preferences,
        ]);
    }
}
