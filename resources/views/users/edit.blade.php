@extends('layouts.admin')
@section('title','Edit Users')
@section('pagename','Edit Users')
@section('menuname','Edit Users')
@section('content')

    {!!Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT', 'files' => true, 'class' => 'users_form', 'novalidate' =>'novalidate' ])!!}
        @include('users.partials.editform')
    {!!Form::close()!!}

@endsection
