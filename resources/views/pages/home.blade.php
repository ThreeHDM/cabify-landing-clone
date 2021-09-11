@extends('layouts.default')
@section('content')
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-11 frase"><img src="{{ url('/img/frase.png') }}" border="0"></div>
    <div class="col-sm-1"></div>
    <div class="col-sm-5 menu"><a href="/video"><img src="{{ url('/img/video.png') }}" class="img-responsive" border="0"></a></div>
    <div class="col-sm-6 menu"><a href="/prospects"><img src="{{ url('/img/conocer.png') }}" class="img-responsive" border="0"></a></div>
    @include('includes.footer')
</div>
@stop