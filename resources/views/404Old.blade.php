@extends('layouts.app')
@section('title','404')
@section('menuname','404')
@section('content')
<div class="theme-section mb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title  text-center mb-40">
                    <h2 class="uppercase mb-30">404 Oops! Page not found.</h2>
                    <p>
                    We could not find the page you were looking for.
                    Meanwhile, you may <a href="{{ asset('index') }}">return to index</a> or try using the search form.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
