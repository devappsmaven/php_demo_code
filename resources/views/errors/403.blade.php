@extends('layouts.admin')
@section('title','403 Forbidden')
@section('pagename','403 Forbidden')
@section('menuname','403 Forbidden')
@section('content')
@guest
@endguest
<div class="error-page">
    <h2 class="headline text-yellow"> 403</h2>

    <div class="error-content">
      <h3><i class="fa fa-info-circle text-yellow"></i> Oops! Forbidden.</h3>

      <p>
        We could not find the page you were looking for.
        Meanwhile, you may <a href="{{ route('admin.profile') }}">return to profile</a> or try using the search form.
      </p>
    </div>
    <!-- /.error-content -->
  </div>
@endsection