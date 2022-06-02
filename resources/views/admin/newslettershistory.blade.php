@extends('layouts.admin')
@section('title','Newsletters History')
@section('pagename','Newsletters History')
@section('menuname','Newsletters History')
@section('content')
@guest

@endguest
<ul class="timeline timeline-inverse">
    @foreach ($newsletters as $newsletter)
        <!-- timeline time label -->
        <li class="time-label">
            <span class="bg-green">
                {{$newsletter->created_at->format('l jS \\of F Y h:i:s A')}}
            </span>
        </li>
        <!-- /.timeline-label -->
        <!-- timeline item -->
        <li>
            <i class="fa fa-envelope bg-blue"></i>
            <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> {{$newsletter->created_at->diffForHumans()}}</span>
                <h3 class="timeline-header"><a href="#">{{$newsletter->subject}}</a></h3>
                <div class="timeline-body">
                        {{$newsletter->message}}
                </div>
                <div class="timeline-footer">
                    Attach: 
                    @php
                        $attachlist = explode('|', $newsletter->attach);    
                    @endphp
                    @foreach ($attachlist as $file)
                        @if($file)
                            <a class="btn btn-primary btn-xs" href="{{asset('img/newsletters')}}{{'/'}}{{$file}}">{{$file}}</a>
                        @endif
                    @endforeach
                </div>
            </div>
        </li>
    @endforeach
    <li>
        <i class="fa fa-clock-o bg-gray"></i>
    </li>
</ul>
@endsection