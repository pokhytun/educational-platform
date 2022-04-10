<?php

namespace App\Http\View\Composers;

use App\Models\User;
use Illuminate\View\View;

class UserComposer{

    public function compose(View $view){

        $newUsers = User::whereMonth('created_at', date('m'))->get();
        $teachers = User::withCount('teaching')->get()->where('teaching_count','>', 0);
        
        $view->with([
            'user' => auth()->user(),
            'users' => User::all(),
            'newUsers' => $newUsers,
            'teachers' => $teachers,
        ]);

    }

}