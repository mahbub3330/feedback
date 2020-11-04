<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Feedback;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class QuestionController extends Controller
{
    //
    public function index()
    {
        $questions = Question::all()->sortByDesc('id');
//        return $questions;
        return view('admin.questions.index',compact('questions'));

    }

    public function createQuestion()
    {
        $departments = Department::all()->except(1)->pluck('name','id');
//        return $departments;
        return view('admin.questions.create_questions',compact('departments'));
    }

    public function storeQuestion(Request $request)
    {
        $questions = new Question();

        $questions->question_name = $request->question_name;
        $questions->department_id = $request->department_id;
        $questions->save();

        return redirect()->route('admin.questions');
    }

    public function showReview(Question $question)
    {

        $users = Feedback::With('feedbackToUser','feedbackByUser')
                           ->where('question_id',$question->id)
                           ->get();
        $top = $users->groupBy('feedback_to')->max();

        if(!$top){
            return view('admin.feedback.showreview',compact('users','top'));

        }else{
            $top = $top->first();
            return view('admin.feedback.showreview',compact('users','top'));

        }


    }

//        try {
            // Validate the value...
//            $top = $users->groupBy('feedback_to')->max()->first();
//            return view('admin.feedback.showreview',compact('users','top'));


//        } catch (Throwable $e) {
//            report($e);
//
//            return redirect()->back()->with('message','No data for this question');
//        }
//        return $top;
//        if(!$top){
//
//        }
//        return $top;


//        return $top;
//        return $top;
//        $top = $users->select('feedback_to', DB::raw('count(*) as total'))->first();
//        return $top;
//        return $usersname;
//        return $users;
//        $results = DB::table('feedback')
//            ->where('question_id',$question->id)
//            ->select('feedback_to', DB::raw('count(*) as total'))
//            ->groupBy('feedback_to')
//            ->get();
//         return  $results ;
//        $top = Feedback::with('feedbackToUser','feedbackByUser')
//                        ->where('feedback_to',$results['feedback_to'])
//                        ->get();
//        return $top;
//        $top = $results->;
//    }

    public function delete(Question $question)
    {
        $question->delete();

//        return 'success';

        return redirect()->back();
    }

}
