<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion4" href="#{{$order->order_number}}" aria-expanded="true" aria-controls="collapseOne">
            {{$order->order_number}}
            </a>
        </h4>
    </div>
    <div id="{{$order->order_number}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
            <div class="order-complete-content box-shadow">
                <div class="row">
                    <div class="form-group col-md-6">
                        <h2 class="title text-center">Order#:  {{$order->order_number}}</h2>  
                        <div class="total_area">
                            <ul>
                                @foreach($order->designs as $design)
                                    <li style="color:#ffffff !important; background:#428bca !important;">{{explode('_',$design->title)[1]}} <span>${{$design->selling_price}}</span></li>
                                @endforeach
                                <li>Sub Total <span>${{$order->subtotal}}</span></li>
                                <li>Discount <span>${{$order->discount}}</span></li>
                                <li>Shipping Cost <span>{{$order->shipping_cost}}</span></li>
                                <li>Tax <span>${{$order->tax}}</span></li>
                                <li>Total <span>${{$order->total}}</span></li>
                            </ul>
                        </div>   
                    </div>
                    <div class="form-group col-md-6">

                    <div class="contact-info">
                        <h2 class="title text-center">Billing Details</h2>
                        <address>
                            <p>Address: {{$order->customer->billing_street}}, {{$order->customer->billing_city}}, {{$order->customer->billing_state}}, {{$order->customer->billing_zip}}, USA</p>
                            <p>Mobile: {{$order->customer->phone}}</p>
                            <p>Email:  {{$order->customer->email}}</p>
                        </address>
                    </div>

                    <div class="contact-info">
                        <h2 class="title text-center">Shipping Details</h2>
                        <address>
                            <p>Address: {{$order->customer->shipping_street}}, {{$order->customer->shipping_city}}, {{$order->customer->shipping_state}}, {{$order->customer->shipping_zip}}, USA</p>
                            <p>Mobile: {{$order->customer->phone}}</p>
                            <p>Email:  {{$order->customer->email}}</p>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>