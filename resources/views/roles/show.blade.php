@extends('layouts.admin')
@section('title','Manage Roles')
@section('pagename','Manage Roles')
@section('menuname','Manage Roles')
@section('content')
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Role Information</h3>
        <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <p><strong>Id: </strong>{{$role->id}}</p>
                <p><strong>Name: </strong>{{$role->name}}</p>
                <p><strong>Slug: </strong>{{$role->slug}}</p>
                <p><strong>Description: </strong>{{$role->description}}</p>
                <p><strong>Special: </strong>
                    @if($role->special === "all-access")
                        <span class="label label-success">{{$role->special}}</span>
                    @elseif($role->special === "no-access")
                        <span class="label label-danger">{{$role->special}}</span>
                    @else
                       <span class="label label-warning">No Assigned</span>
                    @endif
                </p>
                <p><strong>Role: </strong>{{$role->status}}</p>
                <p><strong>Created At: </strong>{{$role->created_at->format('m/d/Y h:m:i')}}</p>
                <p><strong>Last Update: </strong>{{$role->updated_at->format('m/d/Y h:m:i')}}</p>
            </div>
            <div class="col-md-6">
                <h3>Permisions</h3>
                <div class="form-group">
                    <ul class="list-unstyled">
                        @foreach ($role->permissions as $permision)
                            <li>
                                <label>
                                    {{Form::checkbox('permissions[]',$permision->id, true, array(
                                        'disabled' => 'disabled'
                                        ))}}
                                    {{$permision->name}}
                                    <em>({{$permision->description ?: 'No Description'}})</em>
                                </label>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- /.box-body -->
    <div class="box-footer">
    </div><!-- /.box-footer-->
</div>

@endsection
