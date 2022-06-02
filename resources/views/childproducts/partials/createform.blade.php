<div class="box"  style="background-color:#eaeaea;">
    <div class="box-header with-border">
        <h3 class="box-title">Product Information</h3>
        <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        @include('common.alerts')
        {{ csrf_field() }}
        <input type="hidden" class="form-control" name="parent_id" value="{{ $parentproduct->id }}">
        <div class="col-sm-12 admin-box" style="margin-bottom:30px;">
            <div class="col-sm-3">
                <div class="form-group{{ $errors->has('color_id') ? ' has-error' : '' }} has-feedback">
                    <label for="color_id">Color *</label>
                    <select class="form-control" name="color_id"  required>
                        @foreach ($shirtcolors as $color)
                            @if($color->status == 'Enable')
                                <option value="{{ $color->id }}">{{ $color->name }}</option>
                            @else
                                <option  value="{{ $color->id }}" disabled>{{ $color->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    @if ($errors->has('color_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('color_id') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group{{ $errors->has('fabric') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('fabric','Fabric *')}}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" class="form-control" name="fabric" placeholder="Enter name" value="{{ $parentproduct->fabric }}" required>
                    </div>
                    @if ($errors->has('fabric'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('fabric') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group{{ $errors->has('min_quantity') ? ' has-error' : '' }} has-feedback">
                    {{Form::label('min_quantity','Min Quanity')}}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                            <input type="text" class="form-control" name="min_quantity" placeholder="Enter name" value="{{ $parentproduct->min_quantity }}" required>
                            <span class="glyphicon glyphicon-ok form-control-feedback" style="display:none"></span>
                            <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none"></span>
                    </div>
                    @if ($errors->has('min_quantity'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('min_quantity') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group{{ $errors->has('visibility') ? ' has-error' : '' }} has-feedback">
                    <label for="visibility">Visibility *</label>
                    <select class="form-control" name="visibility" required>
                        @if($parentproduct->visibility == 'Visible')
                            <option selected>Visible</option>
                            <option>Invisible</option>
                            @endif
                            @if($parentproduct->visibility == 'Invisible')
                            <option>Visible</option>
                            <option selected>Invisible</option>
                            @endif
                    </select>
                    @if ($errors->has('visibility'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('visibility') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                    <label for="status">Status *</label>
                    <select class="form-control" name="status"  required>
                        @if($parentproduct->status == 'Enable')
                            <option selected>Enable</option>
                            <option>Disable</option>
                            @endif
                            @if($parentproduct->status == 'Disable')
                            <option>Enable</option>
                            <option selected>Disable</option>
                            @endif
                    </select>
                    @if ($errors->has('status'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red">{{ $errors->first('status') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-sm-12" style=" margin-left: auto; padding-top: auto;">
            <div class="col-sm-3 admin-box">
                <div class="col-sm-12 admin-box" style="height:auto; margin-left: auto; padding-top: auto;margin-bottom: 35px !important;">
                    <div class="col-sm-12" style="text-align:center;">
                            {{Form::label('image','Catalog Image *')}}
                    </div>
                    <div class="col-sm-12" style="height:150px;">
                        <center><img src="" id="preview" style="width:auto; height:150px;"></center>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }} has-feedback"  style="margin-bottom: 0px !important;">
                            <div>
                                <div class="form-group" style="margin-bottom: 0px !important;">
                                    <center>
                                        <a class="btn btn-default btn-sm waves-effect waves-light upload-image" data-toggle="modal" data-target="#modal-upload-image">Add Media</a>
                                    </center>
                                </div>
                            </div>
                            <div id="modal-upload-image" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog" style="width:95%;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="custom-width-modalLabel">Insert Media</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="nav-tabs-custom">
                                                        <ul class="nav nav-tabs">
                                                            <li class="active"><a href="#uploadfilesimage" data-toggle="tab">Upload Files</a></li>
                                                            <li><a href="#medialibraryimage" data-toggle="tab">Media Library</a></li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="active tab-pane" id="uploadfilesimage">
                                                                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }} has-feedback">
                                                                    <label for="image">Image</label>
                                                                    <input type="file" class="form-control" name="image" value="{{old('image')}}"  onchange="previewmedia(this);">
                                                                    @if ($errors->has('image'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong class="text-red">{{ $errors->first('image') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="medialibraryimage">
                                                                <div class="container-fluid">
                                                                    <keep-alive>
                                                                        <medialistradiocomponent slug=""></medialistradiocomponent>
                                                                    </keep-alive>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-info waves-effect remove-data-from-delete-form" data-dismiss="modal">Insert Into Post</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Sizes</label>
                        {!! Form::select('sizes[]' , $sizes , $parentproduct->sizes, ['class' => 'form-control',"multiple", "style" =>'height: 260px;','required']) !!}
                    </div>
                </div>
            </div>
            <div class="col-sm-8 admin-box" style="height:auto;">
                <input type="hidden" name="productsides" id="productsides">
                @foreach ($parentproduct->sides as $side)
                    @if($side->pivot->enable)
                        <div class="col-sm-3 admin-box" style="margin-bottom:50px !important;">
                            <div class="col-sm-12" style="text-align:center;">
                                <label for="{{$side->slug}}">{{$side->name}}</label>
                            </div>
                            <div class="col-sm-12" style="height:150px;">
                            <center><img src="" id="{{$side->slug}}preview" style="width: auto; height: 150px;"></center>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" id="{{$side->slug}}checkbox" name="{{$side->slug}}checkbox" onclick="enabledisable(this);">
                                    </span>
                                    <a class="btn btn-default btn-sm waves-effect waves-light upload-{{$side->slug}}image disabled" data-toggle="modal" data-target="#modal-upload-{{$side->slug}}image" id="{{$side->slug}}upload" name="{{$side->slug}}upload">Add Media</a>

                                    <div id="modal-upload-{{$side->slug}}image" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog" style="width:95%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="custom-width-modalLabel">Insert Media</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-10">
                                                            <div class="nav-tabs-custom">
                                                                <ul class="nav nav-tabs">
                                                                    <li class="active"><a href="#upload{{$side->slug}}image" data-toggle="tab">Upload Files</a></li>
                                                                    <li><a href="#{{$side->slug}}medialibrary" data-toggle="tab">Media Library</a></li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div class="active tab-pane" id="upload{{$side->slug}}image">
                                                                        <div class="form-group{{ $errors->has('$side->slug.$image') ? ' has-error' : '' }} has-feedback">
                                                                            <label for="{{$side->slug}}image">Image</label>
                                                                            <input type="file" class="form-control" name="{{$side->slug}}image" id="{{$side->slug}}image"  onchange="previewmedia(this);">
                                                                            @if ($errors->has('{{$side->slug}}image'))
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong class="text-red">{{ $errors->first('$side->slug.$image') }}</strong>
                                                                                </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="{{$side->slug}}medialibrary">
                                                                        <div class="container-fluid" style="overflow:scroll; max-height:600px;height:560px;">
                                                                            <transition>
                                                                                    <keep-alive>
                                                                                    <medialistradiocomponent slug="{{$side->slug}}"></medialistradiocomponent>
                                                                                </keep-alive>
                                                                            </transition>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info waves-effect remove-data-from-delete-form" data-dismiss="modal">Insert Into Post</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="box-footer" style="background-color:#eaeaea;">
        <div class="form-group">
            {{Form::submit('Save',['class'=>'btn btn-primary btn-sm pull-right',"style" => "padding: 10px 45px; font-size: 18px;"])}}
        </div>
    </div><!-- /.box-footer-->
</div>
