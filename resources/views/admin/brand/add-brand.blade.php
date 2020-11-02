@extends('admin.master')

@section('body')

    <div class="row" style="margin-top: 58px;">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Add Brand </h4>
                </div>

                <div class="panel-body">
{{--                    panel body--}}
                    <h3 class="text-center text-success" >{{  Session::get('message') }}</h3>
                    <form action="{{ route('save-brand') }}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-4">Brand Name</label>
                            <div class="col-md-8">
                                <input type="text" name="brand_name" class="form-control">
                                <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Brand Description</label>
                            <div class="col-md-8">
                                <textarea name="brand_description" class="form-control"></textarea>
                                <span class="text-danger">{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' ' }}</span>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Publication Status</label>
                            <div class="col-md-8 ">
                                <label><input type="radio"  name="publication_status" value="1">Published</label>
                                <label><input type="radio"  name="publication_status" value="0">Unpublished</label>
                                <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>

                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-lg-offset-4">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Brand Info">
                            </div>
                        </div>

                    </form>



                    {{--                    end panel body--}}
                </div>

            </div>

        </div>

    </div>
@endsection