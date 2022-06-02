@extends('layouts.admin')
@section('title','Create Child Products')
@section('pagename','Create Child Products')
@section('menuname','Create Child Products')
@section('content')

    {!!Form::open(['route'=> 'childproducts.store', 'files' => true]) !!}
        @include('childproducts.partials.createform')
    {!!Form::close()!!}

@endsection
