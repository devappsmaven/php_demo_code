@extends('layouts.admin')
@section('title','Newsletters')
@section('pagename','Newsletters')
@section('menuname','Newsletters')
@section('content')
@guest

@endguest
@include('common.alerts')
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <form role="form" method="POST" action="{{route('admin.sendnewslettersemail')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="box-header with-border">
                    <h3 class="box-title">Compose NewsLetters Message</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                        <div class="form-group">
                        <textarea  class="form-control"  id="to"  rows="7" name="to" readonly>
                            
                        </textarea>
                        </div> 
                        <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }} has-feedback">
                            <input class="form-control" placeholder="subject:" name="subject" id="subject">
                            @if ($errors->has('subject'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('subject') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                              <li class="active"><a href="#tempalte" data-toggle="tab" aria-expanded="true">Use the Template</a></li>
                              <li class=""><a href="#personalize" data-toggle="tab" aria-expanded="false">Personalize Body</a></li>
                            </ul>
                            <div class="tab-content">
                              <div class="tab-pane active" id="tempalte">
                                <div class="timeline-item">
                                    <iframe src="{{url('emails/preview/newsletters')}}" style="width:100%; height: 700px">
                                    </iframe>
                                </div>
                              </div>
                              <div class="tab-pane" id="personalize">
                                <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }} has-feedback">
                                    <textarea name="message" id="message" class="form-control description2" style="height: 300px">
                                    </textarea>
                                    @if ($errors->has('message'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-red">{{ $errors->first('message') }}</strong>
                                        </span>
                                    @endif
                                </div>
                              </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="btn btn-default btn-file">
                                <i class="fa fa-paperclip"></i> Attachment
                                <input type="file" name="file[]" id="file[]" multiple>
                            </div>
                            <p class="help-block">Max. 10MB</p>
                        </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <div class="pull-right">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                    </div>
                </div><!-- /.box-footer --> 
            </form>
        </div><!-- /. box -->
    </div>
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Design List</h3>
            <div class="box-tools pull-right" style="display:none;">
                <div class="has-feedback">
                <input type="text" class="form-control input-sm" placeholder="Search Mail">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
            </div>
            </div>
            <div class="box-body">
                <div class="mailbox-controls">
                    <button class="btn btn-default btn-sm checkbox-toggle" style="display:none;"><i class="fa fa-check-square-o"></i> Select All</button>
                    <div class="pull-right" style="display:none;">
                    1-50/200
                    <div class="btn-group">
                        <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                    </div>
                    </div>
                </div>
                <div class="table-responsive mailbox-messages">
                    <table id="opencarttable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Select</th>    
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="mailbox-name"><a href="{{route('users.show', $user->id)}}"><input type="checkbox" class="opencart" id="{{$user->email}}"></a></td>
                                    <td class="mailbox-name"><a href="{{route('users.show', $user->id)}}"><b>{{$user->firstname}} {{$user->lastname}}</b></a></td>
                                    <td class="mailbox-name"><a href="{{route('users.show', $user->id)}}">{{$user->email}}</a></td>
                                    <td class="mailbox-name"><a href="{{route('users.show', $user->id)}}">{{$user->updated_at->format('m/d/Y h:m:i')}}</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>   
                </div>         
            </div>
        </div>
    </div><!-- /.col -->
</div>
@endsection