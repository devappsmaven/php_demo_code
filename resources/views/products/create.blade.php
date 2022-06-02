@extends('layouts.admin')
@section('title','Create Products')
@section('pagename','Create Products')
@section('menuname','Create Products')
@section('content')

    {!!Form::open(['route'=> 'products.store', 'files' => true, 'class' => 'products_form', 'novalidate' =>'novalidate' ]) !!}
        @include('products.partials.createform')
    {!!Form::close()!!}

@endsection
