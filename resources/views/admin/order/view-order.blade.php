@extends('admin.master')

@section('body')

    <div class="row" style="margin-top: 58px;">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">Order Details</h3>
                    <table class="table table-bordered">
                       <tr>
                           <th>Customer No</th>
                           <td>{{ $order->id }}</td>
                       </tr>
                        <tr>
                           <th>Total TK</th>
                           <td>{{ $order->order_total }}</td>
                       </tr>

                        <tr>
                           <th>Order Status</th>
                           <td>{{ $order->order_status }}</td>
                       </tr>
                        <tr>
                           <th>Order Date</th>
                           <td>{{ $order->created_at }}</td>
                       </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 58px;">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">Customer Info For This Order</h3>
                    <table class="table table-bordered">
                       <tr>
                           <th>Customer Name</th>
                           <td>{{ $customer->name }}</td>
                       </tr>
                        <tr>
                           <th>Phone Number</th>
                           <td>{{ $customer->phone_number }}</td>
                       </tr>

                        <tr>
                           <th>Email Address</th>
                           <td>{{ $customer->email_address }}</td>
                       </tr>
                        <tr>
                           <th>Address</th>
                           <td>{{ $customer->address }}</td>
                       </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 58px;">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">Shipping Info For This Order</h3>
                    <table class="table table-bordered">
                       <tr>
                           <th>Customer Name</th>
                           <td>{{ $shipping->name }}</td>
                       </tr>
                        <tr>
                           <th>Phone Number</th>
                           <td>{{ $shipping->phone_number }}</td>
                       </tr>

                        <tr>
                           <th>Email Address</th>
                           <td>{{ $shipping->email_address }}</td>
                       </tr>
                        <tr>
                           <th>Address</th>
                           <td>{{ $shipping->address }}</td>
                       </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 58px;">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">Payment Info For This Order</h3>
                    <table class="table table-bordered">
                       <tr>
                           <th>Payment Method</th>
                           <td>{{ $payment->payment_type }}</td>
                       </tr>
                        <tr>
                           <th>Payment Status</th>
                           <td>{{ $payment->payment_status }}</td>
                       </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 58px;">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">Product Info Of This Order</h3>
                    <table class="table table-bordered table-responsive">
                        <tr class="bg-primary">
                            <th>Sl No</th>
                            <th>Product Id</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Order Quantity</th>
                            <th>Total Price</th>
                        </tr>
                        @php( $i = 1)
                        @php($sum = 0)
                        @foreach($orderDetails as $orderDetail)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $orderDetail->product_id }}</td>
                                <td>{{ $orderDetail->product_name }}</td>
                                <td>Tk. {{ $orderDetail->product_price }}</td>
                                <td> {{ $orderDetail->product_quantity }}</td>
                                <td>Tk {{ $total= $orderDetail->product_quantity * $orderDetail->product_price }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>

        </div>

    </div>

@endsection