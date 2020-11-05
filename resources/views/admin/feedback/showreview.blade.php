@extends('admin.master')

@section('title','Questions')

@section('body')

    <div class="row" style="margin-top: 50px;">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Questions</h4>
                </div>

{{--                @if(count())--}}

                {{--                <a href="#">Add Question</a>--}}
{{--                {{ dd($users) }}--}}
                <div class="panel-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    <table class="table table-bordered ">
                        <tr class="bg-primary">
                            <th>Sl No</th>
                            <th>Question Name</th>
                            <th>Question Created At</th>
                            <th>Feedback By</th>
                            <th>Feedback TO</th>
                        </tr>
                        @if(count($users))
                            @php($i=1)
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $user->question->question_name ?? ''}}</td>
                                    <td>{{ $user->question->created_at->toFormattedDateString() ?? ''}}</td>
                                    <td>{{ $user->feedbackByUser->name ?? ''}}</td>
                                    <td>{{ $user->feedbackToUser->name ?? '' }}</td>
                                </tr>
                            @endforeach
                        @endif
                        <tr class="bg-info">
                            <form action="{{ route('admin.store.topfeedback') }}" method="post">
                                @csrf
                                <input type="text" name="top_feedback_top" value="{{ $top->feedbackToUser->name ?? ''}}" hidden>

{{--                                <input type="text" name="question_time" value="{{ $top->question->created_at }}" hidden>--}}
                                <input type="number" name="question_id" value="{{ $top->question_id ?? ''}}" hidden>
                                <input type="text" name="question_name" value="{{ $top->question->question_name ?? ''}}" hidden>
                                <input type="number" name="feedback_to_id" value="{{ $top->feedback_to ?? ''}}" hidden>
                            <td colspan="3">Top feedback TO</td>
                            <td colspan="2">{{ $top->feedbackToUser->name ?? '' }}
                                @if(count($questions))

                                   <button type="submit" disabled> submitted</button>

                                @else
                                    @if(count($users))
                                        <button type="submit">Up</button>
                                    @else
                                        <button type="submit" disabled>No data</button>

                                    @endif


                                @endif
                            </td>
                            </form>
                        </tr>
                    </table>

                </div>



{{--                --}}
{{--                @foreach($results as $result)--}}
{{--                    <td>{{ $result->feedbackToUser->name }}</td>--}}
{{--                @endforeach--}}
{{--                {{ dd($user->feedbackToUser->name -> groupBy('name')) }}--}}
{{--                @foreach($top as $tops)--}}
{{--                {{ ($top->id) }}--}}
{{--                @endforeach--}}


            </div>

        </div>

    </div>
@endsection
