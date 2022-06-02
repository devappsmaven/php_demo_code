@extends('layouts.admin')
@section('title','Create Role')
@section('pagename','Create Role')
@section('menuname','Create Role')
@section('content')

{!!Form::open(['route'=> 'roles.store', 'class' => 'roles_form', 'novalidate' =>'novalidate'])!!}
    @include('roles.partials.createform')
{!!Form::close()!!}

@endsection
