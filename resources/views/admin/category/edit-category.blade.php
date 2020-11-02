@extends('admin.master')

@section('body')

    <div class="row" style="margin-top: 58px;">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Edit Category Form</h4>
                </div>

                <div class="panel-body">
                    <h3 class="text-center text-success" >{{  Session::get('message') }}</h3>
                    <form action="{{ route('update-category') }}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <input type="text" name="category_name" class="form-control" value="{{ $category->category_name  }}">
                                <input type="hidden" name="category_id" class="form-control" value="{{ $category->id  }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Category Description</label>
                            <div class="col-md-8">
                                <input name="category_description" class="form-control" value="{{ $category -> category_description }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Publication Status</label>
                            <div class="col-md-8 ">
                                <label><input type="radio" {{ $category->publication_status ==1 ? 'checked': '' }} name="publication_status" value="1">Published</label>
                                <label><input type="radio" {{ $category->publication_status ==0 ? 'checked': '' }} name="publication_status" value="0">Unpublished</label>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-lg-offset-4">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Category Info">
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection


