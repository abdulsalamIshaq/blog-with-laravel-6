@extends('layouts.layout')

@section('content')
<div class="post col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="page-wrapper">
        @foreach($posts as $post)
        <!--add title-->
        @section('title')
            <title>{{ setting('site.title')}} - {{$post->title}}</title>
        @stop
        <div class="blog-title-area text-center">

            <span class="color-orange"><a href="/category/{{$post->category->id}}/{{str_replace(' ', '-', $post->category->slug)}}" title="">{{$post->category->name}}</a></span>

            <h3>{{$post->title}}</h3>

            <div class="blog-meta big-meta">
                <small><a href="tech-single.html" title="">{{date('d M,Y', strtotime($post->created_at))}}</a></small>
                <!--<small><a href="tech-author.html" title="">by {{$post->name}}</a></small>-->
                <!--<small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>-->
            </div><!-- end meta -->

            <div class="post-sharing">
                <ul class="list-inline">
                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                    <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
            <!-- end post-sharing -->
        </div>
        <!-- end title -->

        <div class="blog-content">
            <div class="pp">
                <blockquote>{!!$post->body!!}</blockquote>
            </div>
        </div><!-- end content -->
        @endforeach

        <div class="blog-title-area">
            <!--<div class="tag-cloud-single">
                <span>Tags</span>
                <small><a href="#" title="">lifestyle</a></small>
                <small><a href="#" title="">colorful</a></small>
                <small><a href="#" title="">trending</a></small>
                <small><a href="#" title="">another tag</a></small>
            </div> end meta -->

            <div class="custombox clearfix">
                <h4 class="small-title">You may also like</h4>
                <div class="row">
                    @foreach($morePost as $p)
                    <div class="col-lg-6">
                        <div class="blog-box">
                            <h4><a href="/post/{{$post->id}}/{{str_replace(' ', '-', $post->title)}}" title="">{{$p->title}}</a></h4>
                            <div class="blog-meta">
                                <small><a href="/category/{{$post->category->id}}/{{str_replace(' ', '-', $post->category->slug)}}" title="">{{$p->category->name}}</a></small>
                                <small><a href="#" title="">{{date('d M, Y', strtotime($p->created_at))}}</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                    </div><!-- end col -->
                    @endforeach
                </div><!-- end row -->
            </div><!-- end custom-box -->

            <hr class="invis1">
            @foreach($comments as $comment)
            <div class="custombox clearfix" style="padding:0rem 0rem;">
                <!--<h4 class="small-title">3 Comments</h4>-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="comments-list">
                            <div class="media">
                                <a class="media-left" href="#">
                                    <img src="{{voyager::image('/users/default.png')}}" alt="" class="rounded-circle">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading user_name">{{$comment->name}} <small>{{date('d M, Y', strtotime($comment->created_at))}}</small></h4>
                                    <p>{{$comment->content}}</p>
                                    <a href="#reply" class="btn btn-primary btn-sm">Reply</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end custom-box -->
            @endforeach

            <hr class="invis1">

            <div class="custombox clearfix">
                <h4 class="small-title reply">Leave a Reply</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-wrapper" method="post">
                            @csrf
                            <input type="text" class="form-control" name="name" placeholder="Your name">
                            <input type="text" class="form-control" name="email" placeholder="Email address">
                            <textarea class="form-control" name="content" placeholder="Your comment"></textarea>
                            <button type="submit" class="btn btn-primary">Submit Comment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- end page-wrapper -->
    </div>
</div>
@stop