@extends('layouts.admin')
@section('title','Price Shirt Table')
@section('pagename','Price Shirt Table')
@section('menuname','Price Shirt Table')
@section('content')
<div class="box">
   <div class="box-header">
    <h3 class="box-title">Price Shirt Table</h3>
      @can('priceshirttable.store')
      {!!Form::open(['route' => 'priceshirttable.store'])!!}
        <input type="hidden" name="priceshirttable" id="priceshirttable" value="">
        <button class="btn-warning  btn-sm pull-right" onclick="savepriceshirttable();" id="savepriceshirttablebtn" type="submit"> Save</button>
      {!!Form::close()!!}
      @endcan
      <a href="{{route('priceshirttable.create')}}" class="btn-success  btn-sm pull-right">
          generate again
      </a>
    </div><!-- /.box-header -->
    <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-bordered" id="priceshirttable" name="priceshirttable">
          <tbody id="tbodypriceshirttable">
          <tr>
            <th style="width: 10px">Id</th>
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
          </tr>
          <tr>
            @foreach ($priceshirttable as $item)
              <td tableeditable contenteditable="false">{{ $item->id }}</td>
              <td tableeditable contenteditable="false">{{ $item->RANGEFROM }}</td>
              <td tableeditable contenteditable="false">{{ $item->RANGETO }}</td>
              <td tableeditable contenteditable="false">{{ $item->_1COLOR }}</td>
              <td tableeditable contenteditable="false">{{ $item->_2COLOR }}</td>
              <td tableeditable contenteditable="false">{{ $item->_3COLOR }}</td>
              <td tableeditable contenteditable="false">{{ $item->_4COLOR }}</td>
              <td tableeditable contenteditable="false">{{ $item->_5COLOR }}</td>
              <td tableeditable contenteditable="false">{{ $item->_6COLOR }}</td>
              <td tableeditable contenteditable="false">{{ $item->_7COLOR }}</td>
              <td tableeditable contenteditable="false">{{ $item->_8COLOR }}</td>              
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
