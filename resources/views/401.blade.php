@extends('layouts.app')
@section('title','401')
@section('menuname','401')
@section('content')
<div class="theme-section mb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title  text-center mb-40">
                    <h2 class="uppercase mb-30">401</h2>
                    <h6 class="mb-40">Oops! Unauthorized.</h6>
                    <p>
                    We could not find the page you were looking for.
                    Meanwhile, you may <a href="{{ asset('/') }}">return to index</a> or try using the search form.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
