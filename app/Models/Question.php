<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }

    public function questions()
    {
        return $this->hasMany('App\Models\Feedback');
    }

    public function feedbacks()
    {
        return $this->hasMany('App\Model\Feedback');
    }

//    public function feedbackBy()
//    {
//        return $this->belongsTo('App\Models\Department', 'feedback_by', 'id')->withDefault();
//    }
//
//    public function feedbackTo()
//    {
//        return $this->belongsTo('App\Models\Department', 'feedback_to', 'id')->withDefault();
//    }
}
