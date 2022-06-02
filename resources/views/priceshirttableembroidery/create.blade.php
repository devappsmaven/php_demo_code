@extends('layouts.admin')
@section('title','Price Shirt Table Embroidery')
@section('pagename','Price Shirt Table Embroidery')
@section('menuname','Price Shirt Table Embroidery')
@section('content')
<div class="box">
  
    <div class="box-header">
      <h3 class="box-title">Edit Price Shirt Table Embroidery</h3>    
      
      
      
    </div>
    <div class="box-body">
        <button class="btn-primary  btn-sm pull-right" id="addpriceshirttablevalue" name="addpriceshirttablevalue">Add Row</button>
        {!!Form::open(['route'=> 'priceshirttableembroidery.generate', 'class' => 'shirt_price_table_form', 'novalidate' =>'novalidate' ]) !!}
        <input type="hidden" name="priceshirttabledata" id="priceshirttabledata" value="">
        <button class="btn-success  btn-sm pull-right" onclick="GeneratePriceShirtTable();">Generate</button>
        
      <table class="table table-bordered"  id="priceshirttablevalue" name="priceshirttablevalue">
        <tbody id="tbodypriceshirttablevalue" name="tbodypriceshirttablevalue">
          <tr>
            <th>Range From</th>
            <th>Range To</th>
            <th>Step</th>
            <th>Discount</th>
            <th>1 Color Value</th>
            <th>2 Color Value</th>
            <th>3 Color Value</th>
            <th>4 Color Value</th>
            <th>5 Color Value</th>
            <th>6 Color Value</th>
            <th>7 Color Value</th>
            <th>8 Color Value</th>
          </tr>
          <tr>
              <th> </th>
              <th> </th>
              <th> </th>
              <th> </th>
              <th><center>price</center>$<input id="_1_Color_Price"  name="_1_Color_Price" style="width:100px"></th>
              <th><center>price</center>$<input id="_2_Color_Price"  name="_2_Color_Price" style="width:100px"></th>
              <th><center>price</center>$<input id="_3_Color_Price"  name="_3_Color_Price" style="width:100px"></th>
              <th><center>price</center>$<input id="_4_Color_Price"  name="_4_Color_Price" style="width:100px"></th>
              <th><center>price</center>$<input id="_5_Color_Price"  name="_5_Color_Price" style="width:100px"></th>
              <th><center>price</center>$<input id="_6_Color_Price"  name="_6_Color_Price" style="width:100px"></th>
              <th><center>price</center>$<input id="_7_Color_Price"  name="_7_Color_Price" style="width:100px"></th>
              <th><center>price</center>$<input id="_8_Color_Price"  name="_8_Color_Price" style="width:100px"></th>
            </tr>
        </tbody>
      </table>
      {!! Form::close() !!}
    </div>
    
  </div>
  
@endsection
