@extends('layouts.admin')
@section('title','Details Mailables')
@section('mailablename','Details Mailables')
@section('menuname','Details Mailables')
@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} has-feedback">
                            <label for="title">Name</label>
                            <input type="text" class="form-control" name="title" value="{{$mailable->name}}" disabled>
                        </div>
                        <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }} has-feedback" >
                            <label for="slug">View</label>
                            <input type="text" class="form-control" name="slug" value={{$mailable->view}} disabled>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                            <label for="status">Status</label>
                            <select class="form-control select2" name="status" disabled>
                                    @if($mailable->status == 'Enable')
                                    <option selected>Enable</option>
                                    <option>Disable</option>
                                    @endif
                                    @if($mailable->status == 'Disable')
                                    <option>Enable</option>
                                    <option selected>Disable</option>
                                    @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="box-body">
                    <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }} has-feedback">
                        <textarea name="message" id="message" class="form-control" style="height: 300px" disabled>
                            {{  $mailable->message }}
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="btn-group">
                @can('mailables.preview')
                    <a href="{{route('mailables.preview', $mailable->id)}}" target="blank" class="btn btn-success btn-sm"><b>Preview</b></a>
                @endcan
            </div>
        </div>
</div>

@endsection