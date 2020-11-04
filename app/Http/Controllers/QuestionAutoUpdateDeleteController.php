<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class QuestionAutoUpdateDeleteController extends Controller
{
    //
    public function index()
    {
//----------------------------------------------------------------
        $positive = Feedback::With('feedbackToUser','feedbackByUser')
            ->where('question_id',6)
            ->get();
        $toppositive = $positive->groupBy('feedback_to')->max();

        $negative = Feedback::With('feedbackToUser','feedbackByUser')
            ->where('question_id',5)
            ->get();
        $topnegative = $negative->groupBy('feedback_to')->max();
//        return $topnegative;

        if(!$toppositive){
            return view('showval',compact('positive','toppositive','topnegative'));

        }else{
            $toppositive = $toppositive->first();
            $topnegative = $topnegative->first();
            return view('showval',compact('positive','toppositive','topnegative'));

        }


       }
}
