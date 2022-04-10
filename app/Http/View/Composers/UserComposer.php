<?php

namespace App\Http\View\Composers;

use App\Models\CommentComplaint;
use App\Models\User;
use Illuminate\View\View;

class UserComposer{

    public function compose(View $view){

        $newUsers = User::whereMonth('created_at', date('m'))->get();
        $teachers = User::withCount('teaching')->get()->where('teaching_count','>', 0);
        
        

        $view->with([
            'user' => auth()->user(),
            'users' => User::withTrashed()->get(),
            'newUsers' => $newUsers,
            'teachers' => $teachers,
            'complaints' => CommentComplaint::all(),
        ]);

    }

}