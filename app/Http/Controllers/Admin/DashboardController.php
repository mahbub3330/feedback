<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $users = User::where('id', '!=', Auth::id())->get();
//        return $users;
        return view('admin.employee.manage-employee',compact('users'));
    }
}
