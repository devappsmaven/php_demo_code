@extends('layouts.admin')
@section('title','Manage Caches')
@section('pagename','Manage Caches')
@section('menuname','Manage Caches')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Caches List</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="cachestable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>Key</th>
              <th>Type</th>
              <th>Expiration</th> 
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>           
            @foreach ($caches as $cache)             
                @if (Cache::has('categories') &&  $cache->key == 'vividcustoms_cachecategories') 
                    <tr id="{{$cache->key}}">
                        <th scope="row">{{$cache->key}}</th>
                        <th scope="row">Categories</th>
                        <td>{{$cache->expiration}}</td>
                        <td>pending button clear cache...</td>
                    </tr>
                @endif
                @if (Cache::has('subcategories') &&  $cache->key == 'vividcustoms_cachesubcategories') 
                    <tr id="{{$cache->key}}">
                        <th scope="row">{{$cache->key}}</th>
                        <th scope="row">sub categories</th>
                        <td>{{$cache->expiration}}</td>
                        <td>pending button clear cache...</td>
                    </tr>
                @endif
                @if (Cache::has('products') &&  $cache->key == 'vividcustoms_cacheproducts') 
                    <tr id="{{$cache->key}}">
                        <th scope="row">{{$cache->key}}</th>
                        <th scope="row">products</th>
                        <td>{{$cache->expiration}}</td>
                        <td>pending button clear cache...</td>
                    </tr>
                @endif
                @if (Cache::has('clipartcategories') &&  $cache->key == 'vividcustoms_cacheclipartcategories') 
                    <tr id="{{$cache->key}}">
                        <th scope="row">{{$cache->key}}</th>
                        <th scope="row">clipart categories</th>
                        <td>{{$cache->expiration}}</td>
                        <td>pending button clear cache...</td>
                    </tr>
                @endif
                @if (Cache::has('templatecategories') &&  $cache->key == 'vividcustoms_cachetemplatecategories') 
                    <tr id="{{$cache->key}}">
                        <th scope="row">{{$cache->key}}</th>
                        <th scope="row">template categories</th>
                        <td>{{$cache->expiration}}</td>
                        <td>pending button clear cache...</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Key</th>
                <th>Type</th>   
                <th>Expiration</th>
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
@endsection
