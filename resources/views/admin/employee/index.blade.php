@extends('admin.master')

@section('body')

    <div class="row" style="margin-top: 50px;">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Manage Employee </h4>
{{--                    <a href="{{ route('register') }}">Add Employee</a>--}}
                </div>

                <div class="panel-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    <table class="table table-bordered ">
                        <tr class="bg-primary">
                            <th>Sl No</th>
                            <th>Employee Name</th>
                            <th>Department</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                        @php( $i = 1)
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $user -> name }}</td>
                                <td>{{ $user-> department->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>

                                    <a href="{{ route('admin.employee.show',['employee'=>$user->id]) }}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>

                                    <a href="{{ route('admin.employee.edit',['employee'=>$user->id]) }}" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
{{--                                    <a href="{{ route('admin.employee.delete',['employee'=>$user->id]) }}" class="btn btn-danger btn-xs">--}}
{{--                                        <span class="glyphicon glyphicon-trash"></span>--}}
{{--                                    </a>--}}
                                    <form action="{{ route('admin.employee.delete',['employee'=>$user->id]) }}" method="post">
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
