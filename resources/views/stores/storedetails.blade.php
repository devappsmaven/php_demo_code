@extends('layouts.admin')
@section('title','Store Details')
@section('pagename','Store Details')
@section('menuname','Store Details')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Stores List</h3>
    </div>
    <div class="box-body">
        <table id="storestable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <th>Store Name</th>    
              <th>Owner</th>   
              <th>Email</th>   
              <th>Phone</th>   
              <th>Slug</th>
              <th>Slogan</th>
              <th>Image</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Last Update</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$store->id}}</th>
                <td>
                    @if($store->newname)
                        <span style="color:#31b0d5;">Current:</span> {{$store->name}}
                        <br>
                        <span style="color:#5cb85c;">Requesting:</span> {{$store->newname}}
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <a class="btn btn-default btn-sm change_name"  data-toggle="modal" data-target="#update-store-name-width-modal" data-url="{!! URL::route('stores.updatestorename',$store->id) !!}" data-id="{{$store->id}}" data-token="{{ csrf_token() }}">
                                    <i class="fa fa-edit"></i> Take decision
                                </a>
                            </div>    
                        </div>
                    @else
                    {{$store->name}}
                    @endif
                </td>
                <td>{{$store->user->firstname}} {{$store->user->lastname}}</td>
                <td>{{$store->user->email}}</td>
                <td>{{$store->user->phone}}</td>
                <td>{{$store->slug}}</td>
                <td>
                    @if($store->newslogan)
                        <span style="color:#31b0d5;">Current:</span> {{$store->slogan}}
                        <br>
                        <span style="color:#5cb85c;">Requesting:</span> {{$store->newslogan}}
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <a class="btn btn-default btn-sm change_slogan"  data-toggle="modal" data-target="#update-store-slogan-width-modal" data-url="{!! URL::route('stores.updatestoreslogan',$store->id) !!}" data-id="{{$store->id}}" data-token="{{ csrf_token() }}">
                                    <i class="fa fa-edit"></i> Take decision
                                </a>
                            </div>    
                        </div>
                    @else
                        {{$store->slogan}}
                    @endif
                </td>
                <td style="width:20%">
                    @if($store->newbanner)
                        <span style="color:#31b0d5;">Current:</span> 
                        <a href="{{asset('img/store')}}{{'/'}}{{$store->banner}}" target="_blank">
                            <img src="{{asset('img/store')}}{{'/'}}{{$store->banner}}"  class="img-responsive">
                        </a>
                        <br>
                        <span style="color:#5cb85c;">Requesting:</span> 
                        <a href="{{asset('img/store')}}{{'/'}}{{$store->newbanner}}" target="_blank">
                            <img src="{{asset('img/store')}}{{'/'}}{{$store->newbanner}}"  class="img-responsive">
                        </a>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <a class="btn btn-default btn-sm change_banner"  data-toggle="modal" data-target="#update-store-banner-width-modal" data-url="{!! URL::route('stores.updatestorebanner',$store->id) !!}" data-id="{{$store->id}}" data-token="{{ csrf_token() }}">
                                    <i class="fa fa-edit"></i> Take decision
                                </a>
                            </div>    
                        </div>
                    @else
                        <a href="{{asset('img/store')}}{{'/'}}{{$store->banner}}" target="_blank">
                            <img src="{{asset('img/store')}}{{'/'}}{{$store->banner}}"  class="img-responsive">
                        </a>
                    @endif
                </td>
                <td>
                    @if($store->status == 'Created')
                        <span class="label label-success">{{$store->status}}</span>
                    @endif
                    @if($store->status == 'Rejected')
                        <span class="label label-danger">{{$store->status}}</span>
                    @endif
                    @if($store->status == 'Waiting Approval')
                        <span class="label label-warning">{{$store->status}}</span>
                    @endif
                    @if($store->status == 'Approved')
                        <span class="label label-info">{{$store->status}}</span>
                    @endif
                </td>
                <td>{{$store->created_at->format('m/d/Y h:m:i')}}</td>
                <td>{{$store->updated_at->format('m/d/Y h:m:i')}}</td>
                <td>
                    @if($store->status != 'Approved')
                        <div class="btn-group">
                            @can('stores.approve')
                                <a class="btn btn-default btn-sm waves-effect waves-light approve" data-toggle="modal" data-target="#approve-modal" data-url="{!! URL::route('stores.approve', $store->id) !!}" data-id="{{$store->id}}" data-token="{{ csrf_token() }}">Approve</a>
                            @endcan
                        </div>
                    @endif
                    @if($store->published)
                        <div class="btn-group">
                            @can('stores.disapprove')
                                <a class="btn btn-default btn-sm waves-effect waves-light disapprove" data-toggle="modal" data-target="#disapprove-modal" data-url="{!! URL::route('stores.disapprove', $store->id) !!}" data-id="{{$store->id}}" data-token="{{ csrf_token() }}">Deapprove</a>
                            @endcan
                        </div>
                    @endif
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Store Name</th>    
                <th>Owner</th>   
                <th>Email</th>   
                <th>Phone</th>   
                <th>Slug</th>
                <th>Slogan</th>
                <th>Image</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Last Update</th>
                <th>Operations</th>
            </tr>
        </tfoot>
        </table>
    </div>
</div> 
<form method="POST" class="remove-record-model">
    <div id="custom-width-modal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Delete Record</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Delete This Record?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form method="POST" class="approve-model">
    <div id="approve-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="approve-width-modalLabel">Approve Store</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Publish This Store?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Approve</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form method="POST" class="disapprove-model">
    <div id="disapprove-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="disapprove-width-modalLabel">Disapprove Store</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Disapprove This Store?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Disapprove</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form method="POST" class="update-store-name-model">
    <div id="update-store-name-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Delete Record</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Change The Selected Store Information?</h4>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select  name="status" id="status" class="form-control" required>
                            <option value="Approved" selected>APPROVED</option>
                            <option value="Rejected" >REJECTED</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Comment</label>
                        <textarea name="message" id="message" class="form-control" style="height: 300px"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Change</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form method="POST" class="update-store-slogan-model">
    <div id="update-store-slogan-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Delete Record</h4>
                </div>
                <div class="modal-body">
                <h4>You Want You Sure Change The Selected Store Information?</h4>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select  name="status" id="status" class="form-control" required>
                            <option value="Approved" selected>APPROVED</option>
                            <option value="Rejected" >REJECTED</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Comment</label>
                        <textarea name="message" id="message" class="form-control" style="height: 300px"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Change</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form method="POST" class="update-store-banner-model">
    <div id="update-store-banner-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Delete Record</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Change The Selected Store Information?</h4>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select  name="status" id="status" class="form-control" required>
                            <option value="Approved" selected>APPROVED</option>
                            <option value="Rejected" >REJECTED</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Comment</label>
                        <textarea name="message" id="message" class="form-control" style="height: 300px"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Change</button>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="row">

    <div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Stores List</h3>
            </div>
            <div class="box-body">
                <form role="form" method="POST" action="/admin/designer/savetablesold/{{$store->id}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="image_input">Price Sold Chart</label>
                        <div id="table" class="table-editable">
                            <span class="shirt-table-add fa fa-plus" id="addsoldpercent" name="addsoldpercent"></span>
                            <input type="hidden" name="pricesold" id="pricesold" value="">
                            <table class="table table-striped table-bordered" id="pricesoldtable" name="pricesoldtable">
                                <thead>
                                    <tr>
                                        <th>Range From</th>
                                        <th>Range To</th>
                                        <th>Percent</th>
                                        <th>Remove</th>
                                        <th>Up/Down</th>
                                    </tr>
                                </thead>
                                <tbody id="tbodyshirt" name="tbodyshirt">
                                    @if($store->pricesoldtable)
                                        @foreach($store->pricesoldtable as $pricesold)
                                            <tr>
                                                <td contenteditable="true" onkeyup="savepricesoldtable();" onfocusin="removedolar(this)" onfocusout="adddolar(this)">${{  $pricesold->RANGEFROM }}</td>
                                                <td contenteditable="true" onkeyup="savepricesoldtable();" onfocusin="removedolar(this)" onfocusout="adddolar(this)">${{  $pricesold->RANGETO }}</td>
                                                <td contenteditable="true" onkeyup="savepricesoldtable();" onfocusin="removepercent(this)" onfocusout="addpercent(this)">%{{  $pricesold->percent }}</td>
                                                <td><span class="table-remove fa fa-times removesizes" onclick="$(this).closest('tr').remove();	savepricesoldtable();"></span></td>
                                                <td>
                                                    <span class="table-up glyphicon fa fa-arrow-up movesizeup" onclick="var row = $(this).closest('tr'); row.prev().before(row);	savepricesoldtable();"></span>
                                                    <span class="table-up glyphicon fa fa-arrow-down movesizedown" onclick="var row = $(this).closest('tr'); row.next().after(row);	savepricesoldtable();"></span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                        <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>
                    </div>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-widget">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                <li class="active"><a href="#2018" data-toggle="tab">2018</a></li>
                <li><a href="#2019" data-toggle="tab">2019</a></li>
                </ul>
                <div class="tab-content">
                <div class="active tab-pane" id="2018">
                    
                </div>
                <div class="tab-pane" id="2019">            
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
