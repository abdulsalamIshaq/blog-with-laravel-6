<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
    <div class="sidebar">

        <div class="widget">
            <div class="custombox clearfix" style="padding: 15px 15px;margin:0px;">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-wrapper" method="post" action="/search">
                            @csrf
                            <input type="text" class="form-control" name="search" placeholder="What are you looking for ?">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="widget">
            <h2 class="widget-title">Popular Posts</h2>
            <div class="blog-list-widget">
                <div class="list-group">
                    @foreach($w_post as $wp)
                    <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 justify-content-between">
                            <img src="{{voyager::image($wp->image)}}" alt="" class="img-fluid float-left">
                            <h5 class="mb-1">{{$wp->title}}</h5>
                            <small>{{date('d M, Y', strtotime($wp->created_at))}}</small>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div><!-- end blog-list -->
        </div>

        <div class="widget">
            <h2 class="widget-title">Follow Us</h2>

            <div class="row text-center">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <a href="#" class="social-button facebook-button">
                        <i class="fa fa-facebook"></i>
                        <p>27k</p>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <a href="#" class="social-button twitter-button">
                        <i class="fa fa-twitter"></i>
                        <p>98k</p>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <a href="#" class="social-button google-button">
                        <i class="fa fa-instagram"></i>
                        <p>17k</p>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <a href="#" class="social-button youtube-button">
                        <i class="fa fa-youtube"></i>
                        <p>22k</p>
                    </a>
                </div>
            </div>
        </div><!-- end widget -->

        <hr class="invis1">

    </div><!-- end sidebar -->
</div>