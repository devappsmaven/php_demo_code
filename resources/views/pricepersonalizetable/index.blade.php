@extends('layouts.admin')
@section('title','Price Personalize Table')
@section('pagename','Price Personalize Table')
@section('menuname','Price Personalize Table')
@section('content')
<div class="box">
    @include('common.alerts')
   <div class="box-header">
    <h3 class="box-title">Price Personalize Table</h3>
      @can('pricepersonalizetable.edit')
        <a href="{{route('pricepersonalizetable.edit')}}" class="btn-warning  btn-sm pull-right">
            Edit
        </a>
      @endcan
    </div><!-- /.box-header -->
    <!-- /.box-header -->
    <div class="box-body">
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th style="width: 10px">Id</th>
            <th>Range From</th>
            <th>Range To</th>
            <th>Name</th>
            <th>Number</th>
            <th>Both</th>
            <th>Stroke Color</th>
          </tr>
          <tr>
            @foreach ($pricepersonalizetable as $item)
              <td tableeditable contenteditable="false">{{ $item->id }}</td>
              <td tableeditable contenteditable="false">{{ $item->RANGEFROM }}</td>
              <td tableeditable contenteditable="false">{{ $item->RANGETO }}</td>
              <td tableeditable contenteditable="false">{{ $item->NAME }}</td>
              <td tableeditable contenteditable="false">{{ $item->NUMBER }}</td>
              <td tableeditable contenteditable="false">{{ $item->BOTH }}</td>
              <td tableeditable contenteditable="false">{{ $item->STROKECOLOR }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
