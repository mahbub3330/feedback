<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\TopFeedback;

class TopFeedback extends Controller
{
    public function store(Request $request)
    {
        return $request;

        $topfeed = new TopFeedback();

        $topfeed->question_id      = $request->question_id;
        $topfeed->question_name    = $request->question_name;
        $topfeed->top_feedback_top = $request->top_feedback_top;
        $topfeed->feedback_to_id   = $request->feedback_to_id;

        $topfeed->save();

        return redirect()->back();
    }
}
