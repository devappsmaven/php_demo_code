@extends('layouts.admin')
@section('title','Price Shirt Table')
@section('pagename','Price Shirt Table')
@section('menuname','Price Shirt Table')
@section('content')
<div class="box">
    @include('common.alerts')
   <div class="box-header">
    <h3 class="box-title">Price Shirt Table</h3>
    </div>
    <div class="box-body">
        @can('pricediscounttable.store')
        <button class="btn-primary  btn-sm pull-right" id="addpriceshirttable" name="addpriceshirttable">Add Row</button>
            {!!Form::open(['route' => 'pricediscounttable.store'])!!}
            <input type="hidden" name="priceshirttable" id="priceshirttable" value="">
            <button class="btn-warning  btn-sm pull-right" onclick="savepriceshirttable();" id="savepriceshirttablebtn" type="submit"> Save</button>
            {!!Form::close()!!}
            @endcan
      <table class="table table-bordered" id="priceshirttable">
        <tbody id="tbodypriceshirttable">
          <tr>
            <th>Range From</th>
            <th>Range To</th>
            <th>1 Color</th>
            <th>2 Color</th>
            <th>3 Color</th>
            <th>4 Color</th>
            <th>5 Color</th>
            <th>6 Color</th>
            <th>7 Color</th>
            <th>8 Color</th>
            <th>Remove</th>
            <th>Up/Down</th>
          </tr>
          <tr>
            @foreach ($pricediscounttable as $item)
              <td tableeditable contenteditable="true">{{ $item->RANGEFROM }}</td>
              <td tableeditable contenteditable="true">{{ $item->RANGETO }}</td>
              <td tableeditable contenteditable="true">{{ $item->_1COLOR }}</td>
              <td tableeditable contenteditable="true">{{ $item->_2COLOR }}</td>
              <td tableeditable contenteditable="true">{{ $item->_3COLOR }}</td>
              <td tableeditable contenteditable="true">{{ $item->_4COLOR }}</td>
              <td tableeditable contenteditable="true">{{ $item->_5COLOR }}</td>
              <td tableeditable contenteditable="true">{{ $item->_6COLOR }}</td>
              <td tableeditable contenteditable="true">{{ $item->_7COLOR }}</td>
              <td tableeditable contenteditable="true">{{ $item->_8COLOR }}</td>          
              <td><span class="table-remove fa fa-times removesizes" onclick="$(this).closest('tr').remove();"></span></td>
              <td>
                  <span class="table-up glyphicon fa fa-arrow-up movesizeup" onclick="var row = $(this).closest('tr'); row.prev().before(row);"></span>
                  <span class="table-up glyphicon fa fa-arrow-down movesizedown" onclick="var row = $(this).closest('tr'); row.next().after(row);"></span>
              </td>    
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
