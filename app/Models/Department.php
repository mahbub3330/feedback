<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    public function questions()
    {
        return $this->hasMany('questions');
    }

    public function feedbackBy()
    {
        return $this->belongsTo('App\Models\User','feedback_by','id');
    }
//
//    public function feedbackTo()
//    {
//        return $this->belongsTo('App\Models\User','feedback_to','id');
//    }
}
