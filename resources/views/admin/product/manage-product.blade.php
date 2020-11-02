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
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="bg-primary">
                                <th>Sl No</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Product Image</th>
                                <th>Short Description</th>
                                <th>Long Description</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>

                            @foreach($products as $key=> $product)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$product->category_name}}</td>
                                <td>{{$product->brand_name}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->product_price}}</td>
                                <td>{{$product->product_quantity}}</td>
                                <td><img src="{{asset($product->product_image)}}" alt="" height="100px" width="100px"></td>
                                <td>{!! str_limit( $product->short_description,10) !!}</td>
                                <td>{!! str_limit($product->long_description,10) !!}</td>
                                <td>{{ $product->publication_status == 1 ? 'published' : 'unpublished' }}</td>
                                <td>
                                    @if( $product -> publication_status == 1)
                                        <a href="{{ route('unpublished-product',['id'=>$product->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-product',['id'=>$product->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif

                                    <a href="{{ route('edit-product',['id'=>$product->id]) }}" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ route('delete-product',['id'=>$product->id]) }}" class="btn btn-danger btn-xs">
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

    </div>
@endsection