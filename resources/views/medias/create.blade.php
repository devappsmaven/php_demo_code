@extends('layouts.admin')
@section('title','Create Media')
@section('pagename','Create Media')
@section('menuname','Create Media')
@section('content')
@include('common.alerts')  
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Upload New Media</h3>
    </div>
    <div class="box-body">
         <form method="post" action="{{url('admin/medias/store')}}" enctype="multipart/form-data" 
              class="dropzone" id="file">
              {{ csrf_field() }}
          </form> 
          <br>
          <div class="row">
            <div class="col-md-11">
            </div>
            <div class="col-md-1">
              @can('medias.index')
                <a type="button" class="btn btn-info" href="{{route('medias.index')}}" >Back to List</a>
              @endcan
            </div>
          </div>
    </div>
</div>
@endsection