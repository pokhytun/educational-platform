<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Attribute;
use Illuminate\Contracts\Database\Eloquent\Builder;
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

    public function buyers(){
        return $this->belongsToMany(User::class, 'sold_courses')->withPivot('price');;
    }

    public function objectives(){
        return $this->hasMany(CourseObjectives::class);
    }

    public function modules(){
        return $this->hasMany(CourseModule::class);
    }

    public function teacher(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getPriceWithDiscountAttribute(){
        return $this->price->price - ($this->price->price / 100 * $this->discount->size_discount);
    }

    public function scopeFilter(Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }

    public function getTeacherCountStudentsAttribute(){
        return $this->teacher->teaching()->withCount('buyers')->get()->sum('buyers_count');
    }
}
