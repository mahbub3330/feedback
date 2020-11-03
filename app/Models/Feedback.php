<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }

    public function feedbackToUser()
    {
        return $this->belongsTo('App\Models\User','feedback_to','id')->withDefault();
    }

    public function feedbackByUser()
    {
        return $this->belongsTo('App\Models\User','feedback_by','id')->withDefault();
    }



}
