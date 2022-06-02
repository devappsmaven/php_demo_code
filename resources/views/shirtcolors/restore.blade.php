@extends('layouts.admin2')
@section('pagename','Restore Shirt Color')
@section('content')

<div class="row" style="margin-top:50px;">    
    <div class="col-md-3">
    </div>
    <div class="col-md-6"> 
    @if($errors->any())
      <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        <ul>
        @foreach($errors->all() as $error)
              <li>{{$error}}</li>
        @endforeach 
        </ul>
      </div>
    @endif      
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Shirt Color</h3>
        </div>        
        <form role="form" method="POST" action="/shirtcolor/{{$shirtcolor->id}}" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            <div class="box-body">
            <div class="form-group">
                <label for="name">Order</label>
                <input type="number" class="form-control" value="{{$shirtcolor->order}}" name="order" readonly>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{$shirtcolor->name}}" readonly>
            </div>
            <div class="form-group">
                <label for="name">Hex</label>
                <input type="text" class="form-control" name="hex" value="{{$shirtcolor->hex}}" readonly>
            </div>
            <div class="form-group">
                <label for="name">Image</label>
                <input type="file" class="form-control" name="file" readonly>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" name="status" readonly>
                    <option selected>Enable</option>
                </select>
            </div>
            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Restore</button>
            </div>
        </form>
        </div>
    </div>
    <div class="col-md-3">        
    </div>
</div>
@endsection