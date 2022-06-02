@extends('layouts.admin')
@section('title','Embroidery Price Table')
@section('pagename','Embroidery Price Table')
@section('menuname','Embroidery Price Table')
@section('content')
<div class="box">
    @include('common.alerts')
   <div class="box-header">
    <h3 class="box-title">Embroidery Price Table </h3>
      @can('priceshirttableembroidery.edit')
        <a href="{{route('priceshirttableembroidery.edit')}}" class="btn-warning  btn-sm pull-right">
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
            @foreach ($priceshirttableembroidery as $item)
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
