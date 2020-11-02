<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackFormController extends Controller
{
    //
    public function index()
    {
        return view('employee.feedback-form');
    }
}
