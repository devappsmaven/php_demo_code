@extends('layouts.admin')
@section('title','Edit Products')
@section('pagename','Edit Products')
@section('menuname','Edit Products')
@section('content')

    {!!Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT', 'files' => true])!!}
        @include('products.partials.editform')
    {!!Form::close()!!}
    
@endsection
