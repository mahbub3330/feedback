<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Feedback;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class FeedbackFormController extends Controller
{
    //
    public function index()
    {
        $department_id = Auth::user()->department_id;
        $user_id = Auth::user()->id;


        $users = Department::find($department_id)->users;

        $answerquestions = Feedback::where('feedback_by',$user_id)->pluck('question_id');

        $department_users = $users->where('id', '!=', $user_id)->pluck('name', 'id');
        $questions = Question::where('department_id', $department_id)
            ->whereNotIn('id',$answerquestions)
            ->whereDate('created_at',Carbon::today())
            ->pluck('question_name', 'id');
//        return $questions;


//        return $answerquestions;


        return view('employee.feedback-form',compact('questions','department_users'));
    }

    public function storeFeedback(Request $request)

    {
        if ($request->feedback_to){

            foreach ($request['feedback_to'] as $key => $value ){
                $saveFeedback = new Feedback();

                $saveFeedback->question_id = $key;
                $saveFeedback->feedback_by = $request->feedback_by;
                $saveFeedback->feedback_to = $value;

                $saveFeedback->save();

            }

            return redirect()->back();
        }else{
            return redirect()->back();
        }


    }


}
