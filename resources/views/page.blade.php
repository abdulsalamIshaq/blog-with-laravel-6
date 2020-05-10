@extends('layouts.layout')
@section('content')
<div class="post col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="page-wrapper">
        @foreach($pages as $page)
        @section('title')
        <title>{{ setting('site.title')}} - {{$page->title}}</title>
        @stop
        <div class="page blog-title-area text-center page-title lb single-wrapper ">
            <h3>{{$page->title}}</h3>
        </div>
        <div class="blog-content">
            <div class="pp">
                {!!$page->body!!}
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop