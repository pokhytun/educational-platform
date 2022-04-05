<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseReviews extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'rating',
        'course_id',
        'review',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function likes(){
        return $this->hasMany(Like::class,'review_id');
    }

    public function isAuthUserLikedReview(){
        return $this->likes()->where('user_id',  auth()->id())->where('is_like', 1);
    }

    public function isAuthUserDislikedReview(){
        return $this->likes()->where('user_id',  auth()->id())->where('is_like', 0);
    }

    public function getLikeAttribute(){
        return $this->likes->where('is_like',1);
    }

    public function getdislikeAttribute(){
        return $this->likes->where('is_like',0);
    }

    public function getDateDiffAttribute(){
        return Carbon::now()->longAbsoluteDiffForHumans($this->created_at);
    }

}
