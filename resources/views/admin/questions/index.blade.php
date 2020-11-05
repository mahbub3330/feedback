@extends('admin.master')

@section('title','Questions')

@section('body')

    <div class="row" style="margin-top: 50px;">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Questions </h4>
                </div>

                <a href="{{ route('admin.create.questions') }}">Add Question</a>
                <div class="panel-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    <table class="table table-bordered ">
                        <tr class="bg-primary">
                            <th>Sl No</th>
                            <th>Question Name</th>
                            <th>options</th>
                            <th>created at</th>
                            <th>Action</th>
                        </tr>
                       @php($i=1)
                        @foreach($questions as $question)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td><a href="{{ route('admin.show.review',['question'=> $question->id ]) }}">{{ $question->question_name }}</a>

                            </td>
                            <td>{{ $question->department->name }}</td>
                            <td>{{ $question->created_at->toFormattedDateString() }}</td>
                            <td>
                                <form action="{{ route('admin.delete.questions',['question'=> $question->id ]) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    {{--                     <input type="submit" value="delete">--}}
                                    <button type="submit" class=""><span class="glyphicon glyphicon-trash"></span></button>
                                </form>
                            </td>
                        </tr>

                        @endforeach

                    </table>

                </div>

            </div>

        </div>

    </div>
@endsection
