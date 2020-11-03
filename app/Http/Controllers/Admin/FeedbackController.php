<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Question;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {

        $users = Feedback::with('feedbackToUser','feedbackByUser')->get();

        return view('admin.feedback.index', compact('users'));
    }
}
