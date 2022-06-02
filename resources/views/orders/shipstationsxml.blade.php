<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<Orders pages='1'>
  @foreach($orders as $order)
    <Order>
      <OrderID><![CDATA[{{$order->id}}]]></OrderID>
      <OrderNumber><![CDATA[{{$order->order_number}}]]></OrderNumber>
      <OrderDate>{{$order->created_at->format('m/d/Y h:m:i')}}</OrderDate>
      <OrderStatus><![CDATA[{{$order->status}}]]></OrderStatus>
      <LastModified>{{$order->updated_at->format('m/d/Y h:m:i')}}</LastModified>
      <ShippingMethod><![CDATA[{{$order->shippingType}}]]></ShippingMethod>
      <PaymentMethod><![CDATA[Credit Card]]></PaymentMethod>
      <OrderTotal>{{$order->total}}</OrderTotal>
      <TaxAmount>{{$order->tax}}</TaxAmount>
      <ShippingAmount>{{$order->shipping_cost}}</ShippingAmount>
      <CustomerNotes><![CDATA[Please make sure it gets here...]]></CustomerNotes>
      <InternalNotes><![CDATA[Ship by {{$order->shipby}}]]></InternalNotes>
      <Gift>false</Gift>
      <GiftMessage> </GiftMessage>
      <CustomField1> </CustomField1>
      <CustomField2> </CustomField2>
      <CustomField3> </CustomField3>
      <Customer>
        <CustomerCode><![CDATA[{{$order->customer->email}}]]></CustomerCode>
        <BillTo>
          <Name><![CDATA[{{$order->customer->firstname}} {{$order->customer->lastname}}]]></Name>
          <Company><![CDATA[{{$order->customer->company}}]]></Company>
          <Phone><![CDATA[{{$order->customer->phone}}]]></Phone>
          <Email><![CDATA[{{$order->customer->email}}]]></Email>
        </BillTo>
        <ShipTo>
          <Name><![CDATA[{{$order->customer->firstname}} {{$order->customer->lastname}}]]></Name>
          <Company><![CDATA[{{$order->customer->company}} ]]></Company>
          <Address1><![CDATA[{{$order->customer->billing_street}}]]></Address1>
          <Address2> </Address2>
          <City><![CDATA[{{$order->customer->billing_city}}]]></City>
          <State><![CDATA[{{$order->customer->billing_state}}]]></State>
          <PostalCode><![CDATA[{{$order->customer->billing_zip}}]]></PostalCode>
          <Country><![CDATA[US]]></Country>
          <Phone><![CDATA[{{$order->customer->phone}}]]></Phone>
        </ShipTo>
      </Customer>
      <Items>
        @foreach ($order->designs as $design)
          <Item>
            <SKU><![CDATA[{{$design->product->stylenumber}}]]></SKU>
            <Name><![CDATA[{{$design->product->parent->name}}]]></Name>
            <ImageUrl><![CDATA[http://{{$design->designsides[0]->design_product_image}}]]></ImageUrl>
            <Weight>8</Weight>
            <WeightUnits>Ounces</WeightUnits>
            <Quantity>{{$design->number_shirts}}</Quantity>
            <UnitPrice>{{$design->price_per_shirt}}</UnitPrice>
            <Location><![CDATA[N/A]]></Location>
            <Options>
              @foreach($design->sizes as $size)
                @if($size->pivot->quantity > 0)
                  <Option>
                    <Name><![CDATA[Size]]></Name>
                    <Value><![CDATA[{{$size->name}}]]></Value>
                    <Weight>8</Weight>
                  </Option>
                  <Option>
                    <Name><![CDATA[Color]]></Name>
                    <Value><![CDATA[{{$design->product->color->name}}]]></Value>
                    <Weight>8</Weight>
                  </Option>
                @endif
              @endforeach
            </Options>
          </Item>
          @if ($order->discount > 0)
            <Item>
              <SKU></SKU>
              <Name><![CDATA[PROMO CODE: {{$order->promocode}}]]></Name>
              <Quantity>{{$size->pivot->quantity}}</Quantity>
              <UnitPrice>-{{$order->discount}}</UnitPrice>
              <Adjustment>true</Adjustment>
            </Item>	
          @endif
        @endforeach
      </Items>
    </Order>
  @endforeach  
</Orders>
     