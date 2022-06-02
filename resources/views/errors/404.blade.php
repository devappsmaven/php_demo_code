@extends('layouts.admin')
@section('title','404 Not Found')
@section('pagename','404 Not Found')
@section('menuname','404 Not Found')
@section('content')
@guest
@endguest
<div class="error-page">
    <h2 class="headline text-red"> 404</h2>

    <div class="error-content">
      <h3><i class="fa fa-warning text-red"></i> Oops! Page not found.</h3>

      <p>
        We could not find the page you were looking for.
        Meanwhile, you may <a href="{{ route('admin.profile') }}">return to profile</a> or try using the search form.
      </p>
    </div>
    <!-- /.error-content -->
  </div>
@endsection