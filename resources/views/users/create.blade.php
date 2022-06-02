@extends('layouts.admin')
@section('title','Create Users')
@section('pagename','Create Users')
@section('menuname','Create Users')
@section('content')

    {!!Form::open(['route'=> 'users.store', 'files' => true, 'class' => 'users_form', 'novalidate' =>'novalidate' ]) !!}
        @include('users.partials.createform')
    {!!Form::close()!!}

@endsection
