@extends('admin.master')

@section('title','Employee Details')


@section('body')
    <div class="row" style="margin-top: 85px;">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Update Employee Form</h4>
                </div>

                <div class="panel-body">
                    <h3 class="text-center text-success" >{{  Session::get('message') }}</h3>
                    <form action="{{ route('admin.employee.update',['employee'=>$employee->id]) }}" method="post" class="form-horizontal">
                        {{--                        @method('HEAD')--}}
                        {{ csrf_field() }}
                        @method('PATCH')
                        <div class="form-group">
                            <label class="control-label col-md-4">Employee Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control" value="{{ $employee->name }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Employee Department</label>
                            <div class="col-md-8">
                                <select name="department_id"  class="form-control">
                                    @foreach($departments as   $key => $department)
                                        <option value="{{ $key }}" {{ $employee->department_id == $key ? 'selected' : ''}}>{{ $department }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Employee Email</label>
                            <div class="col-md-8">
                                <input type="text" name="email" class="form-control" value="{{ $employee->email }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Employee phone</label>
                            <div class="col-md-8">
                                <input type="text" name="phone" class="form-control" value="{{ $employee->phone }}">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-lg-offset-4">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Update  Info">
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
@endsection
