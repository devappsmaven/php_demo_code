@extends('layouts.admin')
@section('title','Edit Associate')
@section('pagename','Edit Associate')
@section('menuname','Edit Associate')
@section('content')

    {!!Form::model($associate, ['route' => ['associates.update', $associate->id], 'method' => 'PUT', 'files' => true, 'class' => 'associates_form', 'novalidate' =>'novalidate' ])!!}
        @include('associates.partials.editform')
    {!!Form::close()!!}

@endsection
