@extends('layouts.admin')
@section('title','Edit Child Products')
@section('pagename','Edit Child Products')
@section('menuname','Edit Child Products')
@section('content')

    {!!Form::model($childproduct, ['route' => ['childproducts.update', $childproduct->id], 'method' => 'PUT', 'files' => true])!!}
        @include('childproducts.partials.editform')
    {!!Form::close()!!}

@endsection
