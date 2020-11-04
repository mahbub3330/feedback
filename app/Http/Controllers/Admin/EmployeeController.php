<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', Auth::id())->get();
//        return $users;
        return view('admin.employee.index',compact('users'));
    }
    public function show(User $employee)
    {
        return view('admin.employee.show',compact('employee'));
    }

    public function edit(User $employee)
    {
        $departments = Department::where('id','!=', 1)->pluck('name','id');
        return view('admin.employee.edit',compact('employee','departments'));
    }

    public function update(Request $request,$employee)
    {

        $employee = User::find($employee);


        $employee->name          = $request->name;
        $employee->email         = $request->email;
        $employee->phone         = $request->phone;
        $employee->department_id = $request->department_id;

        $employee->save();

        return redirect()->route('admin.employee.index');

    }

    public function delete(User $employee)
    {

        $employee->delete();

//        return 'success';

        return redirect()->back();

    }
}
