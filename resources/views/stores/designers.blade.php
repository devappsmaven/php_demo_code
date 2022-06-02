@extends('layouts.admin')
@section('title','Manage Designers')
@section('designername','Manage Designers')
@section('menuname','Manage Designers')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Designers List</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="designerstable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <th>Designer</th>
              <th>Email</th>
              <th>Phone</th> 
              <th>Created</th>
              <th>Waiting Approval</th> 
              <th>Approved</th>
              <th>Rejected</th>
              <th>Sold</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($designers as $designer)
                <tr>
                    <th scope="row">{{$designer->id}}</th>
                    <td>{{$designer->firstname}} {{$designer->lastname}}</td>
                    <td>{{$designer->email}}</td>
                    <td>{{$designer->phone}}</td>
                    <td>{{$designer->created}}</td>
                    <td>{{$designer->waiting_approval}}</td>
                    <td>{{$designer->approved}}</td>
                    <td>{{$designer->rejected}}</td>
                    <td>{{$designer->sold}}</td>
                    <td>
                        <div class="btn-group">
                            @can('designer.storedetail')
                                <a href="{{route('designer.storedetail', $designer->id)}}" class="btn btn-sm btn-info">Details</a>
                            @endcan
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Designer</th>
                <th>Email</th>
                <th>Phone</th>  
                <th>Created</th>
                <th>Waiting Approval</th> 
                <th>Approved</th>
                <th>Rejected</th>
                <th>Sold</th>
                <th>Operations</th>
            </tr>
        </tfoot>
        </table>
    </div><!-- /.box-body -->
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
@endsection


