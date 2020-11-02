@extends('admin.master')

@section('body')

    <div class="row" style="margin-top: 55px">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Add Product</h4>
                </div>

                <div class="panel-body">
                    {{--                    panel body--}}
                    <h3 class="text-center text-success" >{{  Session::get('message') }}</h3>

                    <form action="{{ route('save-product') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label class="control-label col-md-4">Category Name</label>
                            <div class="col-md-8">
{{--                                <input type="text" name="brand_name" class="form-control">--}}
                                <select type="text" name="category_id" class="form-control" >
{{--                                @foreach($categories as $category )--}}
{{--                                    <option value="{{ $category->category_id }}">{{  $category->category_name}}</option>--}}
{{--                                    <option value="">two Category</option>--}}
{{--                                    @endforeach--}}
                                </select>
                                <span class="text-danger">{{ $errors->has('  ') ? $errors->first('category_id') : ' ' }}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Brand Name</label>
                            <div class="col-md-8">
{{--                                <input type="text" name="brand_name" class="form-control">--}}
                                <select type="text" name="brand_id" class="form-control" >
{{--                                    @foreach($brands as $brand )--}}

{{--                                    <option value="{{ $brand->id }}"> {{ $brand->brand_name }}</option>--}}
{{--                                    <option value="">two Brand</option>--}}
{{--                                    @endforeach--}}
                                </select>
                                <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Product Name</label>
                            <div class="col-md-8">
                                <input type="text" name="product_name" class="form-control">

                                <span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Product Price</label>
                            <div class="col-md-8">
                                <input type="text" name="product_price" class="form-control">

                                <span class="text-danger">{{ $errors->has('product_price') ? $errors->first('product_price') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Product Quantity</label>
                            <div class="col-md-8">
                                <input type="text" name="product_quantity" class="form-control">

                                <span class="text-danger">{{ $errors->has('product_quantity') ? $errors->first('product_quantity') : ' ' }}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Short Description</label>
                            <div class="col-md-8">
{{--                                <input type="text" name="short_description" class="form-control">--}}
                                <textarea name="short_description" class="form-control"></textarea>
                                <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Long Description</label>
                            <div class="col-md-8">
{{--                                <textarea type="text" >--}}
                                <textarea name="long_description" class="form-control" id="editor"></textarea>
                                <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ' ' }}</span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-4">Product Image</label>
                            <div class="col-md-8">
                                <input type="file" name="product_image" accept="image/*">
                                <span class="text-danger">{{ $errors->has('product_image') ? $errors->first('product_image') : ' ' }}</span>
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
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Product Info">
                            </div>
                        </div>

                    </form>



                    {{--                    end panel body--}}
                </div>

            </div>

        </div>

    </div>
@endsection