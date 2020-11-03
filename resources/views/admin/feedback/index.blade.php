@extends('admin.master')

@section('title','Questions')

@section('body')

    <div class="row" style="margin-top: 50px;">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Questions</h4>
                </div>

                {{--                <a href="#">Add Question</a>--}}
                <div class="panel-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    <table class="table table-bordered ">
                        <tr class="bg-primary">
                            <th>Sl No</th>
                            <th>Question Name</th>
                            <th>Feedback By</th>
                            <th>Feedback TO</th>
                        </tr>
                        @if(count($users))
                            @php($i=1)
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $user->question->question_name }}</td>
                                    <td>{{ $user->feedbackByUser->name }}</td>
                                    <td>{{ $user->feedbackToUser->name }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>

            </div>

        </div>

    </div>
@endsection
