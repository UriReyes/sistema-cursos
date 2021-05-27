<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    //Relacion 1 a N inversa
    public function course()
    {
        return $this->belongsTo('App\Model\Course');
    }
}
