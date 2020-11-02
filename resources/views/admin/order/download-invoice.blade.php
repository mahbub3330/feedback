
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <link rel="stylesheet" href="{{ asset('/admin/invoice/css/styleinvoice.css') }}">
    <link rel="license" href="https://www.opensource.org/licenses/mit-license/">
    <script src="{{ asset('/admin/invoice/js/scriptinvoice.js') }}"></script>
</head>
<body>
<div class="row" style="margin-top: 58px;">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body" style="margin-top: 40px">
                {{--                   invoice pdf templete--}}
                <header>
                    <h1>Invoice</h1>
                    <address>
                        <h4>Shipping Info</h4>
                        <p>{{  $shipping->name}}</p>
                        <p>{{ $shipping->address }}</p>
                        <p>{{ $shipping->phone_number }}</p>
                    </address>
                    {{--                        &nbsp;--}}
                    <address class="pull-right">
                        <h4>Billing Info</h4>
                        <p>{{ $customer->name }}</p>
                        <p>{{ $customer->address }}</p>
                        <p>{{ $customer->phone_number }}</p>
                    </address>
                    {{--                        <span><img alt="" src="http://www.jonathantneal.com/examples/invoice/logo.png"><input type="file" accept="image/*"></span>--}}
                </header>
                <article>
                    <h1>Recipient</h1>
                    <address>
                        <p>Mahbub & Brothers <br>c/o Mahbub Alam</p>
                    </address>
                    <table class="meta">
                        <tr>
                            <th><span>Invoice #</span></th>
                            <td><span>0000{{ $order->id }}</span></td>
                        </tr>
                        <tr>
                            <th><span>Date</span></th>
                            <td><span>{{ $order->created_at }}</span></td>
                        </tr>
                        <tr>
                            <th><span>Amount Due</span></th>
                            <td><span id="prefix" >TK.</span><span>{{ $order->order_total }}</span></td>
                        </tr>
                    </table>
                    <table class="inventory">
                        <thead>
                        <tr>
                            <th><span >Item</span></th>
                            <th><span >Description</span></th>
                            <th><span >Rate</span></th>
                            <th><span >Quantity</span></th>
                            <th><span >Price</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($sum=0)
                        @foreach($orderDetails as $orderDetail)
                            <tr>
                                <td><span>{{ $orderDetail->product_name }}</span></td>
                                <td><span>Experience Review</span></td>
                                <td><span data-prefix>Tk.</span><span >{{ $orderDetail->product_price }}</span></td>
                                <td><span>{{ $total = $orderDetail->product_quantity }}</span></td>
                                <td><span data-prefix>Tk</span><span>{{ $orderDetail->productPrice*$orderDetail->product_quantity }}</span></td>
                            </tr>
                            @php($sum=$total+$sum)
                        @endforeach
                        </tbody>
                    </table>

                    <table class="balance">
                        <tr>
                            <th><span>Total</span></th>
                            <td><span data-prefix>Tk</span><span>{{ $sum }}</span></td>
                        </tr>
                        <tr>
                            <th><span>Amount Paid</span></th>
                            <td><span data-prefix>TK</span><span>0.00</span></td>
                        </tr>
                        <tr>
                            <th><span>Balance Due</span></th>
                            <td><span data-prefix>TK</span><span>{{ $sum }}</span></td>
                        </tr>
                    </table>
                </article>
                <aside>
                    <h1><span >Additional Notes</span></h1>
                    <div>
                        <p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
                    </div>
                </aside>


            </div>
        </div>
    </div>
</div>

</body>
</html>