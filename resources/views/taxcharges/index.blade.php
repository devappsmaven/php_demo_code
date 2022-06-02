@extends('layouts.admin')
@section('title','Manage Tax Charges')
@section('pagename','Manage Tax Charges')
@section('menuname','Manage Tax Charges')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tax Charges List</h3>
        <a href="{{route('taxcharges.create')}}" class="btn-primary  btn-sm pull-right">
            Add Tax Charges
        </a>
    </div>
    <div class="box-body">
        <table id="taxcahrgestable" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Tax Identifier</th>    
                  <th>Country</th>
                  <th>State</th>
                  <th>Postal Code</th>
                  <th>Rate</th>
                  <th>Creation Date</th>
                  <th>Modify Date</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($taxcharges as $taxcharge)
                    <tr>
                        <td>{{$taxcharge->id}}</td>
                        <td>{{$taxcharge->tax_identifier}}</td>
                        <td>{{$taxcharge->country}}</td>
                        <td>{{$taxcharge->state}}</td>
                        <td>{{$taxcharge->postal_code}}</td>
                        <td>{{$taxcharge->percentage}}%</td>
                        <td>{{$taxcharge->created_at->format('m/d/Y h:m:i')}}</td>
                        <td>{{$taxcharge->updated_at->format('m/d/Y h:m:i')}}</td>
                        <td>
                            <div class="btn-group">
                                <!-- @can('promocodes.show') -->
                                    <a href="{{route('taxcharges.show', $taxcharge->id)}}" class="btn btn-sm btn-info">View</a>
                                <!-- @endcan -->
                            </div>
                            <div class="btn-group">
                                <!-- @can('promocodes.edit') -->
                                    <a href="{{route('taxcharges.edit', $taxcharge->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                <!-- @endcan -->
                            </div>
                            <div class="btn-group">
                                <!-- @can('promocodes.destroy') -->
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#remove_tax_charges" data-url="{!! URL::route('taxcharges.destroy', $taxcharge->id) !!}" data-id="{{$taxcharge->id}}" data-token="{{ csrf_token() }}">Remove</a>
                                <!-- @endcan -->
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


        <form method="POST" class="remove-record-model">
            <div id="remove_tax_charges" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog" style="width:55%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="custom-width-modalLabel">Delete Record</h4>
                        </div>
                        <div class="modal-body">
                            <h4>You Want You Sure Delete This Record ?</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
