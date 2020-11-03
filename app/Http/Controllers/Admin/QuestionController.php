<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Feedback;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function index()

    {
        $questions = Question::all();
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

        return 'secess';
    }

    public function showReview(Question $question)
    {

        $users = Feedback::With('feedbackToUser','feedbackByUser')
                           ->where('question_id',$question->id)
                           ->get();
        return view('admin.feedback.showreview',compact('users'));
    }

}
