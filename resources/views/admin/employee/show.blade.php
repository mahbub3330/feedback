@extends('admin.master')

@section('title','Employee Details')


@section('body')
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Show Employee Details</h4>
                </div>

                <div class="panel-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>

                    <div class="form-group">
                        <label class="control-label col-md-4">Employee Name</label>
                            {{ $employee->name }}
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Employee Department</label>
                            {{ $employee->department->name }}
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Employee Email</label>
                            {{ $employee->email }}
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Employee Phone no</label>
                            {{ $employee->phone }}
                    </div>

                </div>



            </div>

        </div>

    </div>


@endsection
