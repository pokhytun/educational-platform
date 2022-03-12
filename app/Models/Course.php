<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function reviews()
    {
        return $this->hasMany(CourseReviews::class);
    }

    public function category()
    {
        return $this->belongsTo(CourseCategory::class);
    }

    public function price()
    {
        return $this->hasOne(Price::class);
    }

    
    public function getAvgRating(){
        return round($this->reviews->pluck('rating')->avg());
    }

}
