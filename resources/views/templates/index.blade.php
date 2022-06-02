@extends('layouts.admin')
@section('title','Manage Templates')
@section('pagename','Manage Templates')
@section('menuname','Manage Templates')
@section('content')
@include('common.alerts')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Templates List</h3>
    </div>
    <div class="box-body">
        <center>
            <a class="btn btn-app approve_all" style="display:none; pointer; background-color: #32a7e0; border-color: #32a7e0; color: white;" data-toggle="modal" data-target="#approve-all-width-modal" data-url="{!! URL::route('templates.approveall') !!}" data-token="{{ csrf_token() }}">
                <span class="badge bg-teal" id="counttemplateapprovedselected">0</span>
                <i class="fa fa-inbox"></i> Approve Selected Designs
            </a>
            <a class="btn btn-app reject_all" style="display:none; cursor:pointer; background-color: #f39c12; border-color: #f39c12; color: white;" data-toggle="modal" data-target="#reject-all-width-modal" data-url="{!! URL::route('templates.rejectall') !!}" data-token="{{ csrf_token() }}">
                <span class="badge" id="counttemplaterejectedselected">0</span>
                <i class="fa fa-inbox"></i> Reject Selected Designs
            </a>
            <a class="btn btn-app delete_all" style="cursor:pointer; background-color: #dd4b39; border-color: #dd4b39; color: white;" data-toggle="modal" data-target="#delete-all-width-modal" data-url="{!! URL::route('templates.deleteall') !!}" data-token="{{ csrf_token() }}">
                <span class="badge bg-teal" id="counttemplateselected">0</span>
                <i class="fa fa-inbox"></i> Delete Selected Templates
            </a>
        </center>
        <table id="templatestable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th><input type="checkbox" class="checkbox-all-template" name="checkbox-all-template" id="checkbox-all-template"></th>
              <th>ID</th>
              <th>Title</th>
              <th>Image</th>
              <th>
                <select name="category_filter" id="category_filter" class="form-control" onchange="filtertemplatescategory()">
                  <option disable selected>Select Categories</option>
                  <option value="0">All Categories</option>
                  @foreach($categories as $category)
                    <option value="{{ $category->id }}" >{{ $category->name }}</option>
                  @endforeach
                </select>
              </th>
              <th>
                <select name="subcategory_filter" id="subcategory_filter" class="form-control"  onchange="filtertemplatessubcategory()">
                  <option value="0">All SubCategories</option>
                  @foreach($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                  @endforeach
                </select>
              </th>
              <th>
              <select name="author_filter" id="author_filter" class="form-control"  onchange="filtertemplatesauthor()">
                  <option value="0">All Authors</option>
                  @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->firstname }} {{ $author->lastname }}</option>
                  @endforeach
                </select>
              </th>
              <th>Editable</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Last Update</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($templates as $template)
                <tr>
                    <th scope="row"><input type="checkbox" class="checkbox-template" name="{{$template->title}}" id="{{$template->id}}"></th>
                    <th scope="row">{{$template->id}}</th>
                    <td>{{$template->title}}</td>
                    <td><img src="{{asset('designs/template')}}{{'/'}}{{$template->category_slug? $template->category_slug : $template->category->slug}}{{'/'}}{{$template->subcategory_slug? $template->subcategory_slug : $template->subcategory->slug}}{{'/'}}{{$template->title}}_{{$template->defaultside}}_preview.png" style="width:250px; height:auto; background-color:{{$template->background}};"></td>
                    <td>{{$template->category_name ? $template->category_name : $template->category->name}}</td>
                    <td>{{$template->subcategory_name ? $template->subcategory_name : $template->subcategory->name}}</td>
                    <td>{{$template->firstname ? $template->firstname : $template->user->firstname}} {{$template->lastname ? $template->lastname : $template->user->lastname}}</td>
                    <td align="center">
                        @if($template->editable)
                        <div class="form-group">
                            <label>
                              <input type="checkbox" class="minimal" disabled checked>
                            </label>
                          </div>
                        @else
                        <div class="form-group">
                            <label>
                              <input type="checkbox" class="minimal" disabled>
                            </label>
                          </div>
                        @endif
                    </td>
                    <td>
                        @if($template->status == 'Created')
                            <span class="label label-success">{{$template->status}}</span>
                        @endif
                        @if($template->status == 'Waiting Approval')
                            <span class="label label-warning">{{$template->status}}</span>
                        @endif
                        @if($template->status == 'Approved')
                            <span class="label label-info">{{$template->status}}</span>
                        @endif
                        @if($template->status == 'Rejected')
                            <span class="label label-danger">{{$template->status}}</span>
                        @endif
                    </td>
                    <td>{{$template->created_at}}</td>
                    <td>{{$template->updated_at}}</td>
                    <td>
                        <div class="btn-group">
                            @can('templates.show')
                                <a href="{{route('templates.show', $template->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('templates.setbackground')
                                <a class="btn btn-warning btn-sm waves-effect waves-light approve" data-toggle="modal" data-target="#approve-model" data-url="{!! URL::route('templates.setbackground', $template->id) !!}" data-id="{{$template->id}}" data-token="{{ csrf_token() }}">Set Background</a>
                            @endcan
                        </div>
                        <div class="btn-group" style="display:none;">
                            @can('templates.edit')
                                <a href="{{route('templates.edit', $template->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('templates.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('templates.destroy', $template->id) !!}" data-id="{{$template->id}}" data-token="{{ csrf_token() }}">Delete</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('templates.downloadall')
                                <a href="{{route('templates.downloadall', $template->id)}}" class="btn btn-sm btn-primary">Download</a>
                            @endcan
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Category</th>
                <th>SubCategory</th>
                <th>Author</th>
                <th>Editable</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Last Update</th>
                <th>Operations</th>
            </tr>
        </tfoot>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->

<form method="POST" class="remove-record-model">
    <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
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
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form method="POST" class="approve-model">
    <div id="approve-model" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <input type="hidden" id="user_to" name="user_to">
        <input type="hidden" id="background" name="background">
        <div class="modal-dialog" style="heigth:auto;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="background-width-modalLabel">Approve Template Design</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Set This color as a background Template Design?</h4>
                    <!--<select id="user_to" name="user_to" class="form-control">
                        @foreach ($colors as $color)
                            @if($color->hex)
                                <option value="{{$color->hex}}">{{$color->name}}</option>
                            @endif
                        @endforeach
                    </select>-->
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img id="productbackgroundimg" src="{{asset('img/icon/product.png')}}" style="width: 75px; height:75px;">
                         <span id="productbackgroundname">Select Product</span> 
                          <span class="glyphicon glyphicon-chevron-down"></span>
                        </button>                        
                        <ul class="dropdown-menu">
                            @foreach ($colors as $color)
                                <li class="dropdown-header">{{$color->name}}</li>
                                @foreach ($products as $product)
                                    @if($color->id === $product->color_id)
                                        <li>
                                            <a href="javascript:void(0)" onclick="document.getElementById('productbackgroundimg').src = `{{asset('img/product')}}{{'/'}}{{$product->image}}`; document.getElementById('productbackgroundname').innerHTML = `{{$product->name}}`;  setproductbackground('{{$product->id}}', '{{$color->hex}}')" title="Select this card"><img src="{{asset('img/product')}}{{'/'}}{{$product->image}}" style="width:50px; height:auto;">{{$product->name}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            @endforeach
                        </ul>
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Set Background</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form method="POST" class="delete-all-model">
    <div id="delete-all-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <input type="hidden" id="templatesselected" name="templatesselected">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Delete Record</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Delete All This Records?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form method="POST" class="approve-all-model">
    <div id="approve-all-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <input type="hidden" id="templatesapprovedselected" name="templatesapprovedselected">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Approved Record</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Approved All This Records?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-approve-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-default waves-effect waves-light">Approve</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form method="POST" class="reject-all-model">
    <div id="reject-all-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <input type="hidden" id="templatesrejectedselected" name="templatesrejectedselected">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Reject Record</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Reject All This Records?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-reject-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning waves-effect waves-light">Reject</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
