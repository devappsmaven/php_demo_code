@extends('layouts.admin')
@section('title','Create Associates')
@section('pagename','Create Associates')
@section('menuname','Create Associates')
@section('content')

    {!!Form::open(['route'=> 'associates.store', 'files' => true, 'class' => 'associates_form', 'novalidate' =>'novalidate' ]) !!}
        @include('associates.partials.createform')
    {!!Form::close()!!}

@endsection
