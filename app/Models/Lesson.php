<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    //Relacion 1 a N inversa
    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    public function platform()
    {
        return $this->belongsTo('App\Models\Platform');
    }

    //Relacion 1 a 1
    public function description()
    {
        return $this->hasOne('App\Models\Description');
    }

    //Relacion N a N
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    //Relacion 1 a 1 polimorfica
    public function resource()
    {
        return $this->morphOne('App\Models\Resource', 'resourceable');
    }

    //Relacion 1 a N polimorfica
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    public function reactions()
    {
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }
}
