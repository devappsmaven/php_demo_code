@extends('layouts.admin')
@section('title','Price Personalize Table')
@section('pagename','Price Personalize Table')
@section('menuname','Price Personalize Table')
@section('content')
<div class="box">
    @include('common.alerts')
   <div class="box-header">
    <h3 class="box-title">Price Personalize Table</h3>
    </div>
    <div class="box-body">
        @can('pricepersonalizetable.store')
        <button class="btn-primary  btn-sm pull-right" id="addpricepersonalizetable" name="addpricepersonalizetable">Add Row</button>
            {!!Form::open(['route' => 'pricepersonalizetable.store'])!!}
            <input type="hidden" name="pricepersonalizetabledata" id="pricepersonalizetabledata" value="">
            <button class="btn-warning  btn-sm pull-right" onclick="savepricepersonalizetable();" id="savepricepersonalizetablebtn" type="submit"> Save</button>
            {!!Form::close()!!}
            @endcan
      <table class="table table-bordered" id="pricepersonalizetable">
        <tbody id="tbodypricepersonalizetable">
          <tr>
            <th>Range From</th>
            <th>Range To</th>
            <th>Name</th>
            <th>Number</th>
            <th>Both</th>
            <th>Stroke Color</th>
            <th>Remove</th>
            <th>Up/Down</th>
          </tr>
          <tr>
            @foreach ($pricepersonalizetable as $item)
              <td tableeditable contenteditable="true">{{ $item->RANGEFROM }}</td>
              <td tableeditable contenteditable="true">{{ $item->RANGETO }}</td>
              <td tableeditable contenteditable="true">{{ $item->NAME }}</td>
              <td tableeditable contenteditable="true">{{ $item->NUMBER }}</td>
              <td tableeditable contenteditable="true">{{ $item->BOTH }}</td>
              <td tableeditable contenteditable="true">{{ $item->STROKECOLOR }}</td>
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
