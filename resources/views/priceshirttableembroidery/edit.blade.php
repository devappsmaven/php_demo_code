@extends('layouts.admin')
@section('title','Edit Price Shirt Table Embroidery')
@section('pagename','Edit Price Shirt Table Embroidery')
@section('menuname','Edit Price Shirt Table Embroidery')
@section('content')
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Edit Price Shirt Table Embroidery</h3>
      {!!Form::model($priceshirttableembroidery,['route' => ['priceshirttableembroidery.update'], 'method' => 'PUT'])!!}
        {{ csrf_field() }}
        <input type="hidden" name="priceshirttable" id="priceshirttable" value="">
        <button class="btn-warning  btn-sm pull-right" onclick="savepriceshirttable();" id="savepriceshirttablebtn" type="submit"> Save</button>
      {!!Form::close()!!}
      <a  class="btn-primary  btn-sm pull-right" id="addpriceshirttable" name="addpriceshirttable">
          Add Row
      </a>
      @can('priceshirttableembroidery.create')
          <a href="{{route('priceshirttableembroidery.create')}}" class="btn-success  btn-sm pull-right">Generate</a>
      @endcan
      
    </div>
    <div class="box-body">
      <table class="table table-bordered" id="priceshirttable" name="priceshirttable">
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
            @foreach ($priceshirttableembroidery as $item)
              <td tableeditable contenteditable="true" onkeyup="savepriceshirttable();">{{ $item->RANGEFROM }}</td>
              <td tableeditable contenteditable="true" onkeyup="savepriceshirttable();">{{ $item->RANGETO }}</td>
              <td tableeditable contenteditable="true" onkeyup="savepriceshirttable();">{{ $item->_1COLOR }}</td>
              <td tableeditable contenteditable="true" onkeyup="savepriceshirttable();">{{ $item->_2COLOR }}</td>
              <td tableeditable contenteditable="true" onkeyup="savepriceshirttable();">{{ $item->_3COLOR }}</td>
              <td tableeditable contenteditable="true" onkeyup="savepriceshirttable();">{{ $item->_4COLOR }}</td>
              <td tableeditable contenteditable="true" onkeyup="savepriceshirttable();">{{ $item->_5COLOR }}</td>
              <td tableeditable contenteditable="true" onkeyup="savepriceshirttable();">{{ $item->_6COLOR }}</td>
              <td tableeditable contenteditable="true" onkeyup="savepriceshirttable();">{{ $item->_7COLOR }}</td>
              <td tableeditable contenteditable="true" onkeyup="savepriceshirttable();">{{ $item->_8COLOR }}</td>   
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
