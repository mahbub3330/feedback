@extends('admin.master')

@section('title','Questions')

@section('body')

    <div class="row" style="margin-top: 50px;">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Top Feedback</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    <table class="table table-bordered ">
                        <tr class="bg-primary">
                            <th>Sl No</th>
                            <th>Questions</th>
                            <th>Created At</th>
                            <th>Top Feedback By</th>
{{--                            <th>Feedback TO</th>--}}
                        </tr>
                        @if(count($topfeedbacks))
                            @php($i=1)
                            @foreach($topfeedbacks as $topfeedback)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$topfeedback->question_name}}</td>
                                    <td>{{$topfeedback->question->created_at->toFormattedDateString()}}</td>
                                    <td>{{ $topfeedback->top_feedback_top}}</td>
                                </tr>
                            @endforeach
                        @endif

                    </table>

                </div>


            </div>

        </div>

    </div>
@endsection
