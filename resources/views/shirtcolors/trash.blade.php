@extends('layouts.admin')
@section('pagename','Trahed Shirt Colors')
@section('content')
    
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Trashed Shirt Colors</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="productcategorytable" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Order</th>
                        <th>Name</th>
                        <th>Hex</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Operation</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($shirtcolor as $element)
                            <tr>
                              <td>{{$element->id}}</td>
                              <td>{{$element->order}}</td>
                              <td>{{$element->name}}</td>
                              <td>{{$element->hex}}</td>
                              <td><img src="../img/Color_Images/{{$element->file}}" style="height: 30px;"> </td>
                              <td>{{$element->status}}</td>
                              <td>
                                <a type="button" class="btn btn-warning" href="../shirtcolor/{{$element->id}}/restore" >Restore</a>
                              </td>
                            </tr>
                        @endforeach
                    </tbody>                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
@endsection