<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'status'];
    protected $withCount = ['students', 'reviews'];

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    public function getRatingAttribute()
    {
        if ($this->reviewsCount) {
            return round($this->reviews->avg('rating'), 1);
        } else {
            return 5;
        }
    }

    //Relacion 1 a N
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function requirements()
    {
        return $this->hasMany('App\Model\Requirement');
    }

    public function goals()
    {
        return $this->hasMany('App\Model\Goal');
    }

    public function audiences()
    {
        return $this->hasMany('App\Model\Audience');
    }

    public function sections()
    {
        return $this->hasMany('App\Model\Section');
    }

    //Relacion 1 a N inversa
    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function level()
    {
        return $this->belongsTo('App\Models\Level');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function price()
    {
        return $this->belongsTo('App\Models\Price');
    }

    //Relacion N a N
    public function students()
    {
        return $this->belongsToMany('App\Models\User');
    }

    //Relacion 1 a 1 polimorfica
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    public function lessons()
    {
        return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    }
}
