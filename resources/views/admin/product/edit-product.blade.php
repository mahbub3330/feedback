@extends('admin.master')

@section('body')

    <div class="row" style="margin-top: 55px">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Edit Product</h4>
                </div>

                <div class="panel-body">
                    {{--                    panel body--}}
                    <h3 class="text-center text-success" >{{  Session::get('message') }}</h3>

                    <form action="{{ route('update-product') }}" method="post" class="form-horizontal" enctype="multipart/form-data" name="setBrandName">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label class="control-label col-md-4">Category Name</label>
                            <div class="col-md-8">
                                {{--                                <input type="text" name="brand_name" class="form-control">--}}
                                <select type="text" name="category_id" class="form-control" >
                                    <option value="{{ $product[0]->category_id }} " selected>{{ $product[0]->category_name }}</option>
                                @foreach($categories as $category )
                                        <option value="{{ $category->id}}">{{  $category->category_name}}</option>
                                        {{--                                    <option value="">two Category</option>--}}
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->has('  ') ? $errors->first('category_id') : ' ' }}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Brand Name</label>
                            <div class="col-md-8">
                                {{--                                <input type="text" name="brand_name" class="form-control">--}}
                                <select type="text" name="brand_id" class="form-control" >
{{--                                    <option value="{{ $product[0]->brand_id }} " selected>{{ $product[0]->brand_name }}</option>--}}

                                    @foreach($brands as $brand )

                                        <option value="{{ $brand->id }}"> {{ $brand->brand_name }}</option>
                                        {{--                                    <option value="">two Brand</option>--}}
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Product Name</label>
                            <div class="col-md-8">
                                <input type="text" name="product_name" class="form-control" value="{{ $product[0]->product_name }}" >
                                <input type="hidden" name="product_id" class="form-control" value="{{ $product[0]->id  }}">
                                <span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Product Price</label>
                            <div class="col-md-8">
                                <input type="text" name="product_price" value="{{ $product[0]->product_price }}" class="form-control">

                                <span class="text-danger">{{ $errors->has('product_price') ? $errors->first('product_price') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Product Quantity</label>
                            <div class="col-md-8">
                                <input type="text" name="product_quantity" value="{{$product[0]->product_quantity}}" class="form-control">

                                <span class="text-danger">{{ $errors->has('product_quantity') ? $errors->first('product_quantity') : ' ' }}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Short Description</label>
                            <div class="col-md-8">
                                {{--                                <input type="text" name="short_description" class="form-control">--}}
                                <textarea name="short_description"  class="form-control">{{ $product[0]->short_description }}</textarea>
                                <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Long Description</label>
                            <div class="col-md-8">
                                {{--                                <textarea type="text" >--}}
                                <textarea name="long_description" class="form-control" id="editor">{{$product[0]->long_description}}</textarea>
                                <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ' ' }}</span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-4">Product Image</label>
                            <div class="col-md-8">
                                <input type="file" name="product_image"  accept="image/*" >
                                <br>
                                <img src="{{ asset($product[0]->product_image) }}" height="80px" width="80px" alt="">
                                <span class="text-danger">{{ $errors->has('product_image') ? $errors->first('product_image') : ' ' }}</span>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-md-4">Publication Status</label>
                            <div class="col-md-8 ">
                                <label><input type="radio"  name="publication_status" value="1" {{ $product[0]->publication_status == "1" ? 'checked':'' }} >Published</label>
                                <label><input type="radio"  name="publication_status" value="0" {{ $product[0]->publication_status == "0" ? 'checked':'' }}>Unpublished</label>
                                <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>

                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-lg-offset-4">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Product Info">
                            </div>
                        </div>

                    </form>



                    {{--                    end panel body--}}
                </div>

            </div>

        </div>

    </div>
    <script>
        document.forms('setBrandName').elements('brand_id').value = '{{ $product[0]->brand_id }}'
    </script>
@endsection