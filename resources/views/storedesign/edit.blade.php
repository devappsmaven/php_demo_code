@extends('layouts.admin')
@section('title','Edit Store Design')
@section('pagename','Edit Store Design')
@section('menuname','Edit Store Design')
@section('content')
@include('common.alerts')  

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Store Design List</h3>
    </div>
    <div class="box-body">
        <form role="form" method="POST" action="/admin/storedesign/{{$storedesign->id}}" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
            {{csrf_field()}}
            {{method_field('PUT')}}
            
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6">
                    <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                        <label for="status">Status</label>
                        <select class="form-control" name="status">
                            @if($storedesign->status == 'Created')
                                <option selected>Created</option>
                                <option>Waiting Approval</option>
                                <option>Rejected</option>
                                <option>Approved</option>
                            @endif
                            @if($storedesign->status == 'Waiting Approval')
                                <option>Created</option>
                                <option selected>Waiting Approval</option>
                                <option>Rejected</option>
                                <option>Approved</option>
                            @endif
                            @if($storedesign->status == 'Rejected')
                                <option>Created</option>
                                <option>Waiting Approval</option>
                                <option selected>Rejected</option>
                                <option>Approved</option>
                            @endif
                            @if($storedesign->status == 'Approved')
                                <option>Created</option>
                                <option>Waiting Approval</option>
                                <option>Rejected</option>
                                <option selected>Approved</option>
                            @endif
                            @if($storedesign->status == 'Post')
                                <option>Created</option>
                                <option>Waiting Approval</option>
                                <option>Rejected</option>
                                <option>Approved</option>
                                @endif
                        </select>
                        @if ($errors->has('status'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('status') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="box-text">
                        <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }} has-feedback">
                            <textarea name="comment" id="comment" class="form-control" style="height: 300px">
                                {{ $storedesign->comment }}
                            </textarea>
                            @if ($errors->has('text'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('comment') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">update</button>
                    </div>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
        </form>
    </div>
</div>

@endsection