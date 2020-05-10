@extends('layouts.layout')
@section('content')
@section('title')
<title>{{ setting('site.title')}} - {{setting('site.description')}}</title>
@stop
@foreach($posts as $post)
<div class="post col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="post-thumbnail">
        <a href="/post/{{$post->id}}/{{str_replace(' ', '-', $post->title)}}">
            <div class="blog-imade-wrapp" style="max-height:200px; overflow: hidden;">
                <img src="{{voyager::image($post->image)}}" height="100" class="img-thumbnail">
            </div>
        </a>
    </div>
    <div class="post-details">
        <div class="post-meta d-flex justify-content-between">
            <div class="category firstsmall">
                <a href="/category/{{$post->category->id}}/{{str_replace(' ', '-', $post->category->slug)}}">{{$post->category->name}}</a>
            </div>
            <div class="date meta-last">{{date('d M, Y', strtotime($post->created_at))}}</div>
        </div>
        <a href="/post/{{$post->id}}/{{str_replace(' ', '-', $post->title)}}">
            <h3 class="h4">{{$post->title}}</h3>
        </a>
        <p class="text-muted">{{$post->excerpt}}</p>
    </div>
</div>
@endforeach
<div class="col-md-12">
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-start">
            {{$posts->links()}}
        </ul>
    </nav>
</div>
@stop