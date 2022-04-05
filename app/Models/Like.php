<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_like', 'user_id', 'review_id'
    ];


    public function scopeLikesExists( $query, $review_id, $user_id, $event){
        return $query->where('review_id',$review_id)->where('user_id', $user_id)->where('is_like', $event);
    }
}
