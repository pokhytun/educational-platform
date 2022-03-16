<?php

namespace App\Models;

use Attribute;
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

    public function discount(){
        return $this->hasOne(Discount::class);
    }


    public function getPriceWithDiscountAttribute(){
        return $this->price->price - ($this->price->price / 100 * $this->discount->size_discount);
    }
}
