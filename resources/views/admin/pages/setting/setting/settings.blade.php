@extends('admin.layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <iframe 
        id="inlineFrameExample"
        title="Inline Frame Example"
        src="{{$src}}"
        style="height: calc(100vh - 114px)"
        width="100%"
        frameborder="0"
    ></iframe>
</div>
@stop