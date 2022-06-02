<div class="order-complete-content box-shadow">
    <div class="order-info p-30 mb-10">
        <div class="col-md-12">
            <div class="section-title text-left mb-40">
                <h2 class="uppercase">Order Resume</h2>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="payment-details p-30">
                    <h6 class="widget-title border-left mb-20">order#: {{$order->order_number}} <a href="#" class="order-total">(Details)</a></h6>
                    <table>
                        @foreach($order->designs as $design)
                        <tr>
                            <td class="td-title-1">{{explode('_',$design->title)[1]}}</td>
                            <td class="td-title-2" style="color:red;">price-pending</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td class="td-title-1">Subtotal</td>
                            <td class="td-title-2">${{$order->subtotal}}</td>
                        </tr>
                        <tr>
                            <td class="td-title-1">Discount</td>
                            <td class="td-title-2">${{$order->discount}}</td>
                        </tr>
                        <tr>
                            <td class="td-title-1">Shipping Cost</td>
                            <td class="td-title-2">${{$order->shipping_cost}}</td>
                        </tr>
                        <tr>
                            <td class="td-title-1">Tax</td>
                            <td class="td-title-2">${{$order->tax}}</td>
                        </tr>
                        <tr>
                            <td class="order-total">Order Total</td>
                            <td class="order-total-price">${{$order->total}}</td>
                        </tr>
                    </table>
                </div>         
            </div>
            <div class="col-md-6">
                <div class="bill-details p-30">
                    <h6 class="widget-title border-left mb-20">billing details</h6>
                    <ul class="bill-address">
                        <li>
                            <span>Address:</span>
                            {{$order->customer->billing_street}}, {{$order->customer->billing_city}}, {{$order->customer->billing_state}}, {{$order->customer->billing_zip}}, USA
                        </li>
                        <li>
                            <span>email:</span>
                            {{$order->customer->email}}
                        </li>
                        <li>
                            <span>phone : </span>
                            {{$order->customer->phone}}
                        </li>
                    </ul>
                </div>
                <div class="bill-details pl-30">
                    <h6 class="widget-title border-left mb-20">shipping details</h6>
                    <ul class="bill-address">
                        <li>
                            <span>Address:</span>
                            {{$order->customer->shipping_street}}, {{$order->customer->shipping_city}}, {{$order->customer->shipping_state}}, {{$order->customer->shipping_zip}}, USA
                        </li>
                        <li>
                            <span>email:</span>
                            {{$order->customer->email}}
                        </li>
                        <li>
                            <span>phone : </span>
                            {{$order->customer->phone}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>