<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentComplaint extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'review_id'
    ];
    

    public function review(){
        return $this->belongsTo(CourseReviews::class);
    }


    public function sender(){
        return $this->belongsTo(User::class, 'user_id');
    }

    
}
