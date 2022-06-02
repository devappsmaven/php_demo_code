@extends('layouts.admin')
@section('title','500 Internal Server Error')
@section('pagename','500 Internal Server Error')
@section('menuname','500 Internal Server Error')
@section('content')
@guest

@endguest
<div class="error-page">
    <h2 class="headline text-red"> 500</h2>
    <div class="error-content">
      <h3><i class="fa fa-warning text-red"></i> Oops! Internal Server Error.</h3>
      <p>
        We could not find the page you were looking for.
        Meanwhile, you may <a href="{{ route('admin.profile') }}">return to profile</a> or try using the search form.
      </p>
    </div>
  </div>
@endsection