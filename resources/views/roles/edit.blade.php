@extends('layouts.admin')
@section('title','Edit Role')
@section('pagename','Edit Role')
@section('menuname','Edit Role')
@section('content')

{!!Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'PUT', 'class' => 'roles_form', 'novalidate' =>'novalidate'])!!}
    @include('roles.partials.editform')
{!!Form::close()!!}

@endsection
