<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Associate Information</h3>
            <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            @include('common.alerts')
            <div class="row">
            <div class="col-md-6">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('firstname','Firstname *')}}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        {{Form::text('firstname',null,['class'=>'form-control'])}}
                        <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                        <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>
                    </div>
                    @if ($errors->has('firstname'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('firstname') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('lastname','Lastname *')}}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        {{Form::text('lastname',null,['class'=>'form-control'])}}
                        <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                        <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>
                    </div>
                    @if ($errors->has('lastname'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('lastname') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('username','Username *')}}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                            {{Form::text('username',null,['class'=>'form-control'])}}
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>
                        </div>
                        @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                </div>
                
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('email','Email *')}}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        {{Form::text('email',null,['class'=>'form-control'])}}
                        <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                        <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>
                    </div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                    <label for="status">Status</label>
                    <select class="form-control" name="status">
                            @if($associate->status == 'Enable')
                            <option selected>Enable</option>
                            <option>Disable</option>
                            @endif
                            @if($associate->status == 'Disable')
                            <option>Enable</option>
                            <option selected>Disable</option>
                            @endif
                    </select>
                </div>
            </div>
                <div class="col-md-6">
                    <h3>Roles</h3>
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} has-feedback">
                        <ul class="list-unstyled">
                            @foreach ($roles as $role)
                                <li>
                                    <label>
                                        {{Form::checkbox('roles[]',$role->id, null)}}
                                        {{$role->name}}
                                        <em>({{$role->description ?: 'No Description'}})</em>
                                    </label>
                                </li>
                            @endforeach
                            @if ($errors->has('roles'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ $errors->first('roles') }}</strong>
                            </span>
                        @endif
                        </ul>
                    </div>
                    <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                    <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>
                </div>
                </div>
            </div><!-- /.box-body -->
        <div class="box-footer">
            <div class="form-group">
                {{Form::submit('Save',['class'=>'btn btn-primary btn-sm'])}}
            </div>
        </div><!-- /.box-footer-->
    </div>
