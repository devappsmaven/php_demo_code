<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Role Information</h3>
            <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            @include('common.alerts')
            <div class="row">
                <div class="col-md-6">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Personal Information</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                                    {{Form::label('name','Name')}}
                                    {{Form::text('name',null,['class'=>'form-control'])}}
                                    <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                                    <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span> 
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-red">{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} has-feedback">
                                    {{Form::label('description','Description')}}
                                    {{Form::text('description',null,['class'=>'form-control'])}}
                                    <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                                    <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span> 
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-red">{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status">
                                        <option disabled selected>--Select Option--</option>
                                        <option>Enable</option>
                                        <option>Disable</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-red">{{ $errors->first('status') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div><!-- /.box-body -->
                        </div>




                        <div class="box  box-info">
                            <div class="box-header">
                                <h3 class="box-title">Special Permissions</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                 <div class="form-group{{ $errors->has('special') ? ' has-error' : '' }} has-feedback">
                                    <label>
                                        {{Form::radio('special','all-access',['class'=>'minimal'])}} Total Access
                                    </label>
                                    <label>
                                        {{Form::radio('special','no-access',['class'=>'minimal'])}} No Access
                                    </label>
                                    <label>
                                        {{Form::radio('special','no-assigned',['class'=>'minimal'])}} No Assigned
                                    </label>
                                </div>
                                <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                                <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span> 
                                @if ($errors->has('special'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red">{{ $errors->first('special') }}</strong>
                                    </span>
                                @endif
                            </div><!-- /.box-body -->
                        </div>


                </div>
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Permisions</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body" style="overflow-y: scroll; max-height: 600px;">
                            <div class="form-group">
                            <!--<permissionscomponent></permissionscomponent>
                            <allpermissionscomponent></allpermissionscomponent>-->
                                <ul class="list-unstyled">
                                    <?php 
                                        $currentpermission = '';
                                    ?>
                                    @foreach ($permissions as $permision)
                                        @if ($currentpermission !== $permision->type)                                           
                                            <?php 
                                                $currentpermission = $permision->type
                                            ?>
                                            <br>
                                                <label>{{strtoupper($permision->type)}}</label>
                                            <br>
                                        @endif
                                        <li>
                                            <label>
                                                {{Form::checkbox('permissions[]',$permision->id, null)}}
                                                {{$permision->name}}
                                                <em>({{$permision->description ?: 'No Description'}})</em>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><!-- /.box-body -->
                        
                    </div>
                    <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>   
                    <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span> 
                </div>
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <div class="form-group">
                {{Form::submit('Create',['class'=>'btn btn-primary btn-sm'])}}
            </div>
        </div><!-- /.box-footer-->
    </div>
