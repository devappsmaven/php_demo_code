@extends('layouts.admin')
@section('title','Edit Comments')
@section('pagename','Edit Comments')
@section('menuname','Edit Comments')
@section('content')
@include('common.alerts')  

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Comments List</h3>
    </div>
    <div class="box-body">
        <form role="form" method="POST" action="/admin/comments/{{$comment->id}}" enctype="multipart/form-data" class="colors_form" novalidate="novalidate">
            {{csrf_field()}}
            {{method_field('PUT')}}
            
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6">
                    <div class="form-group{{ $errors->has('is_approved') ? ' has-error' : '' }} has-feedback">
                        <label for="is_approved">Status</label>
                        <select class="form-control" name="is_approved">
                            @if($comment->is_approved == 'Created')
                                <option selected>Created</option>
                                <option>Waiting Approval</option>
                                <option>Rejected</option>
                                <option>Approved</option>
                            @endif
                            @if($comment->is_approved == 'Waiting Approval')
                                <option>Created</option>
                                <option selected>Waiting Approval</option>
                                <option>Rejected</option>
                                <option>Approved</option>
                            @endif
                            @if($comment->is_approved == 'Rejected')
                                <option>Created</option>
                                <option>Waiting Approval</option>
                                <option selected>Rejected</option>
                                <option>Approved</option>
                            @endif
                            @if($comment->is_approved == 'Approved')
                                <option>Created</option>
                                <option>Waiting Approval</option>
                                <option>Rejected</option>
                                <option selected>Approved</option>
                            @endif
                            @if($comment->is_approved == 'Post')
                                <option>Created</option>
                                <option>Waiting Approval</option>
                                <option>Rejected</option>
                                <option>Approved</option>
                                @endif
                        </select>
                        @if ($errors->has('is_approved'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('is_approved') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="box-text">
                        <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }} has-feedback">
                            <textarea name="text" id="text" class="form-control" style="height: 300px">
                                {{  $comment->text }}
                            </textarea>
                            @if ($errors->has('text'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('text') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
        </form>
    </div>
</div>

@endsection