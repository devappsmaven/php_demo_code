@extends('layouts.admin')
@section('title','Clipart SubCategories Details Embroidery')
@section('pagename','Clipart SubCategories Details Embroidery')
@section('menuname','Clipart SubCategories Details Embroidery')
@section('content')
@include('common.alerts')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Clipart SubCategories Embroidery Info</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{asset('img/clipart-embroidery')}}{{ '/'}}{{ $clipartsubcategoryembroidery->categoryembroidery->slug }}{{ '/'}}{{ '/'}}{{ $clipartsubcategoryembroidery->slug }}{{ '/'}}{{ $clipartsubcategoryembroidery->filename }}" alt="User profile picture">
                        <h3 class="profile-username text-center">{{ $clipartsubcategoryembroidery->title }}</h3>
                        <p class="text-muted text-center">{{ $clipartsubcategoryembroidery->categoryembroidery->title }}</p>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Cliparts</b> <a href="{{route('clipartsembroidery.index',[ $clipartsubcategoryembroidery->categoryembroidery->id, $clipartsubcategoryembroidery->id])}}" class="pull-right">{{ count($clipartsubcategoryembroidery->clipartsembroidery) }}</a>
                            </li>
                        </ul>
                        <div class="row"> 
                            <div class="col-sm-6">
                                <div class="description-block">
                                    @can('clipartsubcategoriesembroidery.index')
                                        <a href="{{route('clipartsubcategoriesembroidery.index', $clipartsubcategoryembroidery->categoryembroidery->id)}}" class="btn btn-sm btn-info">Back to SubCategories</a>
                                    @endcan
                                </div>
                            </div>                   
                            <div class="col-sm-3">
                                <div class="description-block">
                                    @can('clipartsubcategoriesembroidery.edit')
                                        <a href="{{route('clipartsubcategoriesembroidery.edit', $clipartsubcategoryembroidery->id)}}" class="btn btn-sm btn-block btn-warning">Edit</a>
                                    @endcan
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="description-block">
                                    @can('clipartsubcategoriesembroidery.destroy')
                                        <a class="btn btn-sm btn-block btn-danger waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('clipartsubcategoriesembroidery.destroy', $clipartsubcategoryembroidery->id) !!}" data-id="{{$clipartsubcategoryembroidery->id}}" data-token="{{ csrf_token() }}">Remove</a>
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
