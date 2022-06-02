<div class="box" style="background-color:#eaeaea;">
    <div class="box-header with-border">
        <h3 class="box-title">Product Information</h3>
        <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        @include('common.alerts')
        <div class="">
            <div class="col-lg-7 col-md-7 col-xs-6 admin-box">
                <div class="row">
                    <div class="col-md-6">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('stylenumber') ? ' has-error' : '' }} has-feedback">
                            {{Form::label('stylenumber','StyleNumber *')}}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-barcode"></i>
                                </div>
                                {{Form::text('stylenumber',null,['class'=>'form-control'])}}
                            </div>
                            @if ($errors->has('stylenumber'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('stylenumber') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                            {{Form::label('name','Name *')}}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                {{Form::text('name',null,['class'=>'form-control'])}}
                            </div>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }} has-feedback">
                            <label for="brand">Brand *</label>
                            <select class="form-control" name="brand">
                                <option disabled selected>--Select Option--</option>
                                @foreach ($brands as $brand)
                                    @if($brand->status == 'Enable')
                                        <option >{{ $brand->name }}</option>
                                    @else
                                        <option disabled>{{ $brand->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @if ($errors->has('brand'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('brand') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('isexpedited') ? ' has-error' : '' }} has-feedback">
                                        <label for="status">Shipping Feature</label>
                                        <br>
                                    <input type="checkbox" class="minimal" name="isexpedited" id="isexpedited" >
                                    </label>
                                    Shipping Feature...
                                    @if ($errors->has('isexpedited'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-red">{{ $errors->first('isexpedited') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('defaultembroidery') ? ' has-error' : '' }} has-feedback">
                                        <label for="status">Default Embroidery</label>
                                        <br>
                                    <input type="checkbox" class="minimal" name="defaultembroidery" id="defaultembroidery">
                                    </label>
                                    Set As Default Embroidery
                                    @if ($errors->has('defaultembroidery'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-red">{{ $errors->first('defaultembroidery') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('fabric') ? ' has-error' : '' }} has-feedback">
                            {{Form::label('fabric','Fabric *')}}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-contao"></i>
                                </div>
                                {{Form::text('fabric',null,['class'=>'form-control'])}}


                            </div>
                            @if ($errors->has('fabric'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('fabric') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }} has-feedback">
                            {{Form::label('price','Price *')}}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-dollar"></i>
                                </div>
                                    {{Form::text('price',null,['class'=>'form-control'])}}


                                </div>
                                @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red">{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('min_quantity') ? ' has-error' : '' }} has-feedback">
                            {{Form::label('min_quantity','Min Quanity')}}
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-sort-numeric-asc"></i>
                                </div>
                                    {{Form::text('min_quantity',null,['class'=>'form-control'])}}


                                </div>
                                @if ($errors->has('min_quantity'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red">{{ $errors->first('min_quantity') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('ispersonalize') ? ' has-error' : '' }} has-feedback">
                                <label for="status">Personalize</label>
                                <br>
                            <input type="checkbox" class="minimal" name="ispersonalize" id="ispersonalize" >
                            </label>
                            Allow Personalize
                            @if ($errors->has('ispersonalize'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('ispersonalize') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('visibility') ? ' has-error' : '' }} has-feedback">
                            <label for="visibility">Visibility *</label>
                            <select class="form-control" name="visibility">
                                <option disabled selected>--Select Option--</option>
                                <option>Visible</option>
                                <option>Invisible</option>
                            </select>
                            @if ($errors->has('visibility'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('visibility') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }} has-feedback">
                            <label for="status">Status *</label>
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
                        <div class="form-group{{ $errors->has('default') ? ' has-error' : '' }} has-feedback">
                                <label for="status">Default</label>
                                <br>
                            <input type="checkbox" class="minimal" name="default" id="default">
                            </label>
                             Set As Default
                            @if ($errors->has('default'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('default') }}</strong>
                                </span>
                            @endif
                        </div>
                        <br>
                        <div class="form-group{{ $errors->has('isembroidery') ? ' has-error' : '' }} has-feedback">
                                <label for="status">Use Embroidery</label>
                                <br>
                            <input type="checkbox" class="minimal" name="isembroidery" id="isembroidery" >
                            </label>
                            Use Embroidery
                            @if ($errors->has('isembroidery'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('isembroidery') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top:20px;">
                        <label>Description *</label>
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} has-feedback">
                            <textarea name="description" id="description" class="form-control" style="height: 300px">
                            </textarea>


                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top:20px;">
                        <label>Size Chart Description</label>
                        <div class="form-group{{ $errors->has('sizechartdescription') ? ' has-error' : '' }} has-feedback">
                            <textarea name="sizechartdescription" id="sizechartdescription" class="form-control description2" style="height: 300px">
                            </textarea>


                            @if ($errors->has('sizechartdescription'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red">{{ $errors->first('sizechartdescription') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-4 admin-box">
                        <div class="form-group{{ $errors->has('sizechartimage') ? ' has-error' : '' }} has-feedback">
                            {{Form::label('sizechartimage','Size Chart Image')}}
                            <br>
                            <img src="" id="sizechartpreview" style="width: 250px; height: auto;">
                            <br>
                            <div class="form-group">
                                    <a class="btn btn-default btn-sm waves-effect waves-light upload-sizechartimage" data-toggle="modal" data-target="#modal-upload-sizechartimage">Add Media</a>
                            </div>
                            <div id="modal-upload-sizechartimage" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
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
                                                            <li class="active"><a href="#uploadsizechartimage" data-toggle="tab">Upload Files</a></li>
                                                            <li><a href="#medialibrarysizechartimage" data-toggle="tab">Media Library</a></li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="active tab-pane" id="uploadsizechartimage">
                                                                <div class="form-group{{ $errors->has('sizechartimage') ? ' has-error' : '' }} has-feedback">
                                                                    <label for="sizechartimage">Image</label>
                                                                    <input type="file" class="form-control" name="sizechartimage" value="{{old('sizechartimage')}}" onchange="previewmedia(this);">
                                                                    @if ($errors->has('sizechartimage'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong class="text-red">{{ $errors->first('sizechartimage') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="medialibrarysizechartimage">
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
                                            <button type="button" class="btn btn-info waves-effect remove-data-from-delete-form" data-dismiss="modal">Insert Image</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 admin-box">
                        <div class="form-group">
                            <label for="image_input">Size Chart</label>
                            <div id="table" class="table-editable">
                                <input type="hidden" name="chart" id="chart" value="">
                                <table class="table table-striped table-bordered" id="sizechart" name="sizechart">
                                    <thead>
                                        <tr>
                                        <th>Sizes</th>
                                        <th>Width</th>
                                        <th>Length</th>
                                        <th>Remove</th>
                                        <th>Up/Down<span class="table-add fa fa-plus addsizes" id="addsizes" name="addsizes"></span></th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody" name="tbody">
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-xs-6  admin-box">
                <div class="col-sm-12" style="height: 150px; border-bottom: solid 1px; margin-bottom:10px">
                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }} has-feedback">
                        {{Form::label('image','Catalog Image *')}}
                        <div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <a class="btn btn-default btn-sm waves-effect waves-light upload-image" data-toggle="modal" data-target="#modal-upload-image">Add Media</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <img src="" id="preview" style="width:auto; height:80px;">
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
                                        <button type="button" class="btn btn-info waves-effect remove-data-from-delete-form" data-dismiss="modal">Insert Image</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12" style="/*height: 150px; */border-bottom: solid 1px; margin-bottom:10px">
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('aditionalimages') ? ' has-error' : '' }} has-feedback">
                            {{Form::label('aditionalimages','Aditional Images')}}

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <a class="btn btn-default btn-sm waves-effect waves-light upload-aditionalimages" data-toggle="modal" data-target="#modal-upload-aditionalimages">Add Media</a>
                        <div id="modal-upload-aditionalimages" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
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
                                                        <li class="active"><a href="#uploadfilesaditionalimages" data-toggle="tab">Upload Files</a></li>
                                                        <li><a href="#medialibraryaditionalimages" data-toggle="tab">Media Library</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="active tab-pane" id="uploadfilesaditionalimages">
                                                            <div class="form-group{{ $errors->has('aditionalimages') ? ' has-error' : '' }} has-feedback">
                                                                <label for="aditionalimages">Image</label>
                                                                <input type="file" class="form-control" name="aditionalimages[]"  onchange="previewmedia(this);" multiple>
                                                                @if ($errors->has('aditionalimages'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong class="text-red">{{ $errors->first('aditionalimages') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="medialibraryaditionalimages">
                                                            <div class="container-fluid">
                                                                <keep-alive>
                                                                    <medialistcheckcomponent slug="aditionalimages"></medialistcheckcomponent>
                                                                <keep-alive>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info waves-effect remove-data-from-delete-form" data-dismiss="modal">Insert Image</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 table-wrapper-scroll-y my-custom-scrollbar" style="margin-bottom:10px">
                        <table  class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Operation</th>
                                    </tr>
                                </thead>
                                <tbody id="preview-additional">
                                </tbody>
                        </table>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="col-sm-12" style="margin-bottom: 15px">
                     <div class="form-group">
                        <label style="margin-bottom: 0px;">Categories</label>
                        <select class="form-control" multiple="multiple" data-placeholder="Select a category" style="width: 100%; height: 250px;" name="categories[]">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" disabled>{{ $category->name }}</option>
                                @foreach ($category->subcategories as $subcategory)
                                    @if($category->id == $subcategory->category_id)
                                        <option value="{{ $category->id }}{{ '_' }}{{ $subcategory->id }}">&nbsp;&nbsp;&nbsp;{{ $subcategory->name }}</option>
                                    @endif
                                @endforeach
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-12"  style="margin-bottom: 15px">
                     <div class="form-group">
                        <label style="margin-bottom: 0px;">Sizes</label>
                        <select class="form-control" multiple data-placeholder="Select a size" style="width: 100%; height: 200px;" name="sizes[]">
                            @foreach ($sizes as $size)
                                <option value="{{ $size->id }}">{{ $size->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-12"  style="margin-bottom: 15px;">
                    <div class="form-group">
                        <label  style="margin-bottom: 0px;">Related Products</label>
                        <select class="form-control" multiple="multiple" data-placeholder="Select a product" style="width: 100%; height: 200px;" name="relatedproducts[]">
                            @foreach ($relatedproducts as $relatedproduct)
                                <option value="{{ $relatedproduct->id }}">{{ $relatedproduct->name }} | {{ $relatedproduct->id }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 admin-box" style="margin-top:30px; margin-bottom:50px;">
            <div class="form-group">
                <label for="image_input">Price Shirt Chart</label>
                <div id="table" class="table-editable">
                    <input type="hidden" name="priceshirt" id="priceshirt" value="">
                    <table class="table table-striped table-bordered" id="priceshirttable" name="priceshirttable">
                        <thead>
                            <tr>
                            <th>Range From</th>
                            <th>Range To</th>
                            <th>Infant Colors</th>
                            <th>Infant White</th>
                            <th>Toddler Colors</th>
                            <th>Toddler White</th>
                            <th>Youth Colors</th>
                            <th>Youth White</th>
                            <th>Adult Colors</th>
                            <th>Adult White</th>
                            <th>2XL Colors</th>
                            <th>2XL White</th>
                            <th>3XL Colors</th>
                            <th>3XL White</th>
                            <th>4XL Colors</th>
                            <th>4XL White</th>
                            <th>5XL Colors</th>
                            <th>5XL White</th>
                            <th>ONE SIZE Colors</th>
                            <th>ONE SIZE White</th>
                            <th>Remove</th>
                            <th>Up/Down <span class="shirt-table-add fa fa-plus addsizeshirt" id="addsizeshirt" name="addsizeshirt"></span></th>
                            </tr>
                        </thead>
                        <tbody id="tbodyshirt" name="tbodyshirt">
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>

<div class="box" style="background-color:#eaeaea;">
    <div class="box-header with-border">
        <h3 class="box-title">Print Area</h3>
        <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-11 admin-box"  style="margin-bottom:50px;">
                <div class="col-sm-11 admin-box" style="margin-bottom:50px;">
                    <div class="form-group">
                    <label for="image_input">Select and add picture for print area</label>
                    <div class="row">
                        <input type="hidden" name="productsides" id="productsides">
                         @foreach ($sides as $side)
                         <div class="col-sm-3">
                            <label for="{{$side->slug}}">{{$side->name}}</label>
                            <br>
                            <img src="" id="{{$side->slug}}preview" style="width:auto; height:150px;">
                            <br>
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
                                                    <div class="col-sm-12">
                                                        <div class="nav-tabs-custom">
                                                            <ul class="nav nav-tabs">
                                                                <li class="active"><a href="#upload{{$side->slug}}image" data-toggle="tab">Upload Files</a></li>
                                                                <li><a href="#medialibrary{{$side->slug}}" data-toggle="tab">Media Library</a></li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div class="active tab-pane" id="upload{{$side->slug}}image">
                                                                    <div class="form-group{{ $errors->has('$side->slug.$image') ? ' has-error' : '' }} has-feedback">
                                                                        <label for="{{$side->slug}}image">Image</label>
                                                                        <input type="file" class="form-control" name="{{$side->slug}}image" id="{{$side->slug}}image" onchange="previewmedia(this);">
                                                                        @if ($errors->has('{{$side->slug}}image'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong class="text-red">{{ $errors->first('$side->slug.$image') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="medialibrary{{$side->slug}}">
                                                                    <div class="container-fluid">
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
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info waves-effect remove-data-from-delete-form" data-dismiss="modal">Insert Image</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-sm-11 admin-box"  style="margin-bottom:50px;">
                <a href="javascript:void(0)" class="btn-primary  btn-sm pull-let" id="addprintarea" name="addprintarea" style="">
                        Add Print Area
                </a>
                <br>
                <div id="print-area-table" class="table-editable">
                    <input type="hidden" name="print-area" id="print-area" value="">
                    <table class="table table-striped table-bordered" id="print-area-chart" name="print-area-chart">
                        <thead>
                            <tr>
                                <th style="width:30%">Name</th>
                                <th>Side</th>
                                <th>Width</th>
                                <th>Height</th>
                                <th>Left</th>
                                <th>Top</th>
                                <th>Center</th>
                                <th>Adult</th>
                                <th>Youth</th>
                                <th>Chest</th>
                                <th>Embroidery</th>
                                <th>Enabled</th>
                                <th>Remove</th>
                                <th>Move</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-printarea" name="tbody-printarea">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-12">
                <h4 style="text-align:center">Print Area Preview</h4>
                <div class="canvasShirt" id="previewCanvasShirt" style="background-image: url('');  border: 1px solid #000; width: 743px; height: 810px; background-repeat: no-repeat; background-size: contain;">
                    <div id="previewcanvas-wrapper" style="width: 375px; height: 500px; border: 0px solid #eeeeee;  position: relative; top:180px; left:210px">
                        <canvas id="previewCanvas" style=" width: 375px; height: 500px; border: 1px solid #32a7e0;"></canvas>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div><!-- /.box-body -->
    <div class="box-footer">
        <div class="form-group">
            {{Form::submit('Save',['class'=>'btn btn-primary btn-sm pull-right', "onclick"=> "savetabledata(); saveaditionalimagetable(); savepriceshirttable(); ", "style" => "padding: 10px 45px; font-size: 18px;"])}}
        </div>
    </div><!-- /.box-footer-->
</div>
