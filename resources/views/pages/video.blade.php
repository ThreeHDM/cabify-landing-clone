@extends('layouts.default')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class='embed-container'>
            <iframe src='https://player.vimeo.com/video/288534941?byline=0&portrait=0&title=0' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
    </div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4 menu-video"><a href="/prospects"><img src="{{ url('img/conocer.png') }}" class="img-responsive" border="0"></a></div>
    <div class="col-sm-4"></div>
    @include('includes.footer')
    <div class="row">
@stop