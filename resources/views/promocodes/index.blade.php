@extends('layouts.admin')
@section('title','Manage Promo Code')
@section('pagename','Manage Promo Code')
@section('menuname','Manage Promo Code')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Promo Code List</h3>
        @can('promocodes.create')
        <a href="{{route('promocodes.create')}}" class="btn-primary  btn-sm pull-right">
            Add Promo Code
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="promocodestable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>    
              <th>Description</th>
              <th>Type</th>
              <th>Amount</th>
              <th>Allow Free Shipping</th>
              <th>Expiration Date</th>
              <th>Minimum Spend</th>
              <th>Maximum Spend</th>
              <th>Individual Use Only</th>
              <th>Exclude Sale Items</th>
              <th>Limit Per Coupon</th>
              <th>Limit Per User</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Last Update</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($promocodes as $promocode)
                <tr>
                    <th scope="row">{{$promocode->id}}</th>
                    <td>{{$promocode->name}}</td>
                    <td>{{$promocode->description}}</td>
                    <td>{{$promocode->type}}</td>
                    <td><input type="text" class="knob" value="{{$promocode->amount}}" data-width="50" data-height="50" data-fgColor="#3c8dbc"></td>
                    <td align="center">
                        @if($promocode->freeshipping)
                        <div class="form-group">
                            <label>
                              <input type="checkbox" class="minimal" disabled checked>
                            </label>
                          </div>
                        @else
                        <div class="form-group">
                            <label>
                              <input type="checkbox" class="minimal" disabled>
                            </label>
                          </div>
                        @endif
                    </td>
                    @if($promocode->expirationdate)
                        <td>{{$promocode->expirationdate}}</td>
                    @else
                        <td></td>
                    @endif
                    <td>{{$promocode->minimumspend}}</td>
                    <td>{{$promocode->maximumspend}}</td>
                    <td align="center">
                        @if($promocode->individualuseonly)
                        <div class="form-group">
                            <label>
                              <input type="checkbox" class="minimal" disabled checked>
                            </label>
                          </div>
                        @else
                        <div class="form-group">
                            <label>
                              <input type="checkbox" class="minimal" disabled>
                            </label>
                          </div>
                        @endif
                    </td>
                    <td align="center">
                        @if($promocode->excludesaleitem)
                        <div class="form-group">
                            <label>
                              <input type="checkbox" class="minimal" disabled checked>
                            </label>
                          </div>
                        @else
                        <div class="form-group">
                            <label>
                              <input type="checkbox" class="minimal" disabled>
                            </label>
                          </div>
                        @endif
                    </td>
                    <td><p>
                        {{$promocode->limitpercoupon}}<br>
                        <span class="sparkbullet">1,{{$promocode->limitpercoupon}},{{$promocode->limitpercoupon}}</span><br>
                      </p></td>
                    <td>{{$promocode->limitperuser}}</td>
                    <td>
                        @if($promocode->status == 'Enable')
                            <span class="label label-success">{{$promocode->status}}</span>
                        @endif
                        @if($promocode->status == 'Disable')
                            <span class="label label-danger">{{$promocode->status}}</span>
                        @endif
                    </td>
                    <td>{{$promocode->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$promocode->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('promocodes.show')
                                <a href="{{route('promocodes.show', $promocode->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('promocodes.edit')
                                <a href="{{route('promocodes.edit', $promocode->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('promocodes.destroy')
                            <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('promocodes.destroy', $promocode->id) !!}" data-id="{{$promocode->id}}" data-token="{{ csrf_token() }}">Remove</a>
                            @endcan
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>    
                <th>Description</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Free Shipping</th>
                <th>Expiration Date</th>
                <th>Minimum Spend</th>
                <th>Maximum Spend</th>
                <th>Individual Use Only</th>
                <th>Exclude Sale Items</th>
                <th>Limit Per Coupon</th>
                <th>Limit Per User</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Last Update</th>
                <th>Operations</th>
            </tr>
        </tfoot>
        </table>
    </div><!-- /.box-body -->
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
@endsection
