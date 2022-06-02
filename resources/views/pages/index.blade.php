@extends('layouts.admin')
@section('title','Manage Pages')
@section('pagename','Manage Pages')
@section('menuname','Manage Pages')
@section('content')
@include('common.alerts')   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Pages List</h3>
        @can('pages.create')
        <a href="{{route('pages.create')}}" class="btn-primary  btn-sm pull-right">
            Add Pages
        </a>
    @endcan
    </div><!-- /.box-header -->
    <div class="box-body">
        <table id="pagestable" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>    
              <th>Slug</th>
              <th>Content</th>
              <!--<th>Components</th>-->
              <th>Published</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Last Update</th>
              <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pages as $page)
                <tr>
                    <th scope="row">{{$page->id}}</th>
                    <td>{{$page->title}}</td>
                    <td>{{$page->slug}}</td>
                    <td>{{str_limit($page->content,50)}}</td>
                    <!--<td>
                        <h5><b>Header</b></h5>(
                        @foreach ($page->headercomponents as $component)
                            {{$component->name}}
                            @if($loop->iteration == $loop->last)

                            @else
                                ,
                            @endif
                        @endforeach)
                        <br>
                        <h5><b>Mobile Area</b></h5>(
                        @foreach ($page->mobileareacomponents as $component)
                            {{$component->name}}
                            @if($loop->iteration == $loop->last)

                            @else
                                ,
                            @endif
                        @endforeach)
                        <br>
                        <h5><b>Left Side</b></h5>(
                        @foreach ($page->leftsidecomponents as $component)
                            {{$component->name}}
                            @if($loop->iteration == $loop->last)

                            @else
                                ,
                            @endif
                        @endforeach)
                        <br>
                        <h5><b>Body</b></h5>(
                        @foreach ($page->bodycomponents as $component)
                            {{$component->name}}
                            @if($loop->iteration == $loop->last)

                            @else
                                ,
                            @endif
                        @endforeach)
                        <br>
                        <h5><b>Right Side</b></h5>(
                        @foreach ($page->rightsidecomponents as $component)
                            {{$component->name}}
                            @if($loop->iteration == $loop->last)

                            @else
                                ,
                            @endif
                        @endforeach)
                        <br>
                        <h5><b>Footer</b></h5>(
                        @foreach ($page->footercomponents as $component)
                            {{$component->name}}
                            @if($loop->iteration == $loop->last)

                            @else
                                ,
                            @endif
                        @endforeach)
                    </td>-->
                    <td><center>
                        @if($page->published)
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
                        </center>
                    </td>
                    <td>
                        @if($page->status == 'Enable')
                            <span class="label label-success">{{$page->status}}</span>
                        @endif
                        @if($page->status == 'Disable')
                            <span class="label label-danger">{{$page->status}}</span>
                        @endif
                    </td>
                    <td>{{$page->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$page->updated_at->format('m/d/Y h:m:i')}}</td>
                    <td>
                        <div class="btn-group">
                            @can('pages.preview')
                                <a href="http://vividcustoms.test/{{ $page->slug }}" target="blank" class="btn btn-success btn-sm"><b>Preview</b></a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('pages.show')
                                <a href="{{route('pages.show', $page->id)}}" class="btn btn-sm btn-info">View</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('pages.edit')
                                <a href="{{route('pages.edit', $page->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                        </div>
                        <div class="btn-group">
                            @can('pages.destroy')
                                <a class="btn btn-danger btn-sm waves-effect waves-light remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{!! URL::route('pages.destroy', $page->id) !!}" data-id="{{$page->id}}" data-token="{{ csrf_token() }}">Remove</a>
                            @endcan
                        </div>
                        @if(!$page->published)
                            <div class="btn-group">
                                @can('pages.publish')
                                    <a class="btn btn-default btn-sm waves-effect waves-light publish" data-toggle="modal" data-target="#publish-modal" data-url="{!! URL::route('pages.publish', $page->id) !!}" data-id="{{$page->id}}" data-token="{{ csrf_token() }}">Publish</a>
                                @endcan
                            </div>
                        @endif
                        @if($page->published)
                            <div class="btn-group">
                                @can('pages.unpublish')
                                    <a class="btn btn-default btn-sm waves-effect waves-light unpublish" data-toggle="modal" data-target="#unpublish-modal" data-url="{!! URL::route('pages.unpublish', $page->id) !!}" data-id="{{$page->id}}" data-token="{{ csrf_token() }}">No Publish</a>
                                @endcan
                            </div>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Title</th>    
                <th>Slug</th>
                <th>Content</th>
                <!--<th>Components</th>-->
                <th>Published</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Last Update</th>
                <th>Operations</th>
            </tr>
        </tfoot>
        </table>
    </div><!-- /.box-body -->
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

<form method="POST" class="publish-model">
    <div id="publish-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="publish-width-modalLabel">Publish Page</h4>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Publish This Page?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Publish</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method="POST" class="unpublish-model">
        <div id="unpublish-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width:55%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="publish-width-modalLabel">No Publish Page</h4>
                    </div>
                    <div class="modal-body">
                        <h4>You Want You Sure No Publish This Page?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">No Publish</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

<form method="POST" class="approve-to-model">
        <div id="approve-width-modal" class="modal modal-default fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width:55%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="custom-width-modalLabel">Assign Order To User</h4>
                    </div>
                    <div class="modal-body">
                        <h4>You Want You Sure Change The Status Of This Page?</h4>
                        <select class="form-control" name="is_approved">
                            <option>Created</option>
                            <option selected>Waiting Approval</option>
                            <option>Rejected</option>
                            <option>Approved</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection


