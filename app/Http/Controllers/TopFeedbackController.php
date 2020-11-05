<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TopFeedback;
use Illuminate\Support\Carbon;

class TopFeedbackController extends Controller
{
    //

    public function index()
    {

        $topfeedback = TopFeedback::whereDate('created_at',Carbon::today())->get();
//        return $topfeedback;

//        $topfeedback->whereDate('created_at',Carbon::today())->get();
//        return $topfeedback;
        return view('frontend.dashboard',compact('topfeedback'));
    }

    public function store(Request $request)
    {
//        return $request;
        $topfeed = new TopFeedback();

        $topfeed->question_id      = $request->question_id;
        $topfeed->question_name    = $request->question_name;
        $topfeed->top_feedback_top = $request->top_feedback_top;
        $topfeed->feedback_to_id   = $request->feedback_to_id;

        $topfeed->save();

        return redirect()->back();
    }

    public function show()
    {
        $topfeedbacks = TopFeedback::all();



//        return $topfeedbacks;

        return view('admin.feedback.topfeedback',compact('topfeedbacks'));

    }
}
