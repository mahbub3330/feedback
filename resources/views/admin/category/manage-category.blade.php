@extends('admin.master')

@section('body')

    <div class="row" style="margin-top: 58px;">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Manage Category </h4>
                </div>

                <div class="panel-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                        <table class="table table-bordered">
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
                                <td>{{ $user-> department }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>

                                    <a href="#" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>

                                    <a href="#" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                                @endforeach
                        </table>
                </div>

            </div>

        </div>

    </div>
@endsection
