@extends('layouts.admin')
@section('title','Template Categories Details Embroidery')
@section('pagename','Template Categories Details Embroidery')
@section('menuname','Template Categories Details Embroidery')
@section('content')
@include('common.alerts')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Template  Categories Embroidery Info</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-3">
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="{{asset('img/template-embroidery')}}{{'/'}}{{$templatecategoryembroidery->slug}}{{'/'}}{{$templatecategoryembroidery->filename}}" alt="User profile picture">
                  <h3 class="profile-username text-center">{{ $templatecategoryembroidery->slug }}</h3>
                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Subcategories</b> <a href="{{route('templatesubcategoriesembroidery.index', $templatecategoryembroidery->id)}}" class="pull-right">{{ count($templatecategoryembroidery->subcategoriesembriodery) }}</a>
                    </li>
                  </ul>
    
                  <div class="row"> 
                    <div class="col-sm-4">
                        <div class="description-block">
                            @can('templatecategoriesembroidery.index')
                                <a href="{{route('templatecategoriesembroidery.index')}}" class="btn btn-sm btn-info">Back to Categories</a>
                            @endcan
                        </div>
                    </div>                   
                    <div class="col-sm-4">
                        <div class="description-block">
                            @can('templatecategories.edit')
                                <a href="{{route('templatecategoriesembroidery.edit', $templatecategoryembroidery->id)}}" class="btn btn-sm btn-block btn-warning">Edit</a>
                            @endcan
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="description-block">
                            @can('templatecategories.destroy')
                                <a class="btn btn-sm btn-block btn-danger waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('templatecategoriesembroidery.destroy', $templatecategoryembroidery->id) !!}" data-id="{{$templatecategoryembroidery->id}}" data-token="{{ csrf_token() }}">Remove</a>
                            @endcan
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-9">
                More Details Pending
            </div>
        </div>
    </div>
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
@endsection
