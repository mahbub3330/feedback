<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class QuestionAutoUpdateDeleteController extends Controller
{
    //
    public function index()
    {

        $feedbacks = Feedback::all();
        $sorting = $feedbacks->groupBy('question_id');
//        $feedbackssort = $sorting->groupBy('feedback_to');

        return $sorting;


//        done
//        ---------------------------------------------------------------
        $users = Feedback::With('feedbackToUser','feedbackByUser')
//            ->where('question_id',$question->id)
            ->get();
        $tops = $users->groupBy('question_id')->groupBy('feedback_to')->max()->unique('question_id')->first();
        dd($tops);
        return view('frontend.dashboard',compact('users','tops'));


        $top = $users->groupBy('feedback_to')->max()->unique('feedback_to');

//        return view('frontend.dashboard');
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
            return view('frontend.dashboard',compact('positive','toppositive','topnegative'));

        }else{
            $toppositive = $toppositive->first();
//            return $toppositive;
            $topnegative = $topnegative->first();
            return view('frontend.dashboard',compact('positive','toppositive','topnegative'));

        }


       }
}
