@extends('admin.master')

@section('body')

    <div class="row" style="margin-top: 58px;">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Edit Brand Form</h4>
                </div>

                <div class="panel-body">
                    <h3 class="text-center text-success" >{{  Session::get('message') }}</h3>
                    <form action="{{ route('update-brand') }}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <input type="text" name="brand_name" class="form-control" value="{{ $brand->brand_name  }}">
                                <input type="hidden" name="brand_id" class="form-control" value="{{ $brand->id  }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Category Description</label>
                            <div class="col-md-8">
                                <input name="brand_description" class="form-control" value="{{ $brand -> brand_description }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Publication Status</label>
                            <div class="col-md-8 ">
                                <label><input type="radio" value="1" {{ $brand->publication_status == 1 ? 'checked': '' }} name="publication_status" >Published</label>
                                <label><input type="radio" value="0" {{ $brand->publication_status == 0 ? 'checked': '' }} name="publication_status" >Unpublished</label>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-lg-offset-4">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Brand Info">
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection


