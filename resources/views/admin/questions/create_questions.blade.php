@extends('admin.master')

@section('title','create question')

@section('body')

    <div class="row" style="margin-top: 85px;">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Questions Form</h4>
                </div>

                <div class="panel-body">
                    <h3 class="text-center text-success" >{{  Session::get('message') }}</h3>
                    <form action="{{ route('admin.store.questions') }}" method="post" class="form-horizontal">
{{--                        @method('HEAD')--}}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-4">Question Name</label>
                            <div class="col-md-8">
                                <input type="text" name="question_name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Questions For</label>
                            <div class="col-md-8">
                                <select name="department_id"  class="form-control">
                                    @foreach($departments as   $key => $department)
                                        <option value="{{ $key }}">{{ $department }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-lg-offset-4">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Question Info">
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection


