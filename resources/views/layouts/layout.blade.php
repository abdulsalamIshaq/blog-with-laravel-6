<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!--Title-->
  @yield('title')

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- FontAwesome Icons core CSS -->
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
  <link href="{{ asset('css/tech.css') }}" rel="stylesheet">
</head>

<body>
  <div id="wrapper">
    @include('layouts.nav')
    <div class="container">
      <div class="row section single-wrapper box">
        <main class="posts-listing col-lg-8">
          <div class="row">
            @yield('content')
          </div>
        </main>
        @include('layouts.sidebar')
      </div>
    </div>
    <div <!-----------footer------------------>
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="widget">
                <div class="footer-text text-left">
                  <a href="index.html"><img src="{{voyager::image(setting('site.logo'))}}" alt="" class="img-fluid"></a>
                  <p>we sharing marketing, news and gadget articles.</p>
                  <div class="social">
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a>
                  </div>

                  <hr class="invis">

                  <div class="newsletter-widget text-left">
                    <form class="form-inline">
                      <input type="text" class="form-control" placeholder="Enter your email address">
                      <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </form>
                  </div><!-- end newsletter -->
                </div><!-- end footer-text -->
              </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
              <div class="widget">
                <h2 class="widget-title">Popular Categories</h2>
                <div class="link-widget">
                  <ul>
                    @foreach($cats as $n_footer)
                    <li>
                      <a href="/category/{{$n_footer->id}}/{{$n_footer->name}}">{{$n_footer->name}}
                        <span>({{$n_footer->post->count()}})</span>
                      </a>
                    </li>
                    @endforeach
                  </ul>
                </div><!-- end link-widget -->
              </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
              <div class="widget">
                <h2 class="widget-title">Copyrights</h2>
                <div class="link-widget">
                  <ul>
                    @foreach($page as $pg)
                    <li><a href="/page/{{$pg->title}}">{{$pg->title}}</a></li>
                    @endforeach
                  </ul>
                </div><!-- end link-widget -->
              </div><!-- end widget -->
            </div><!-- end col -->
          </div>

          <div class="row">
            <div class="col-md-12 text-center">
              <br>
              <div class="copyright">{{date('Y')}} &copy; Copyright NinjaBlaze. Powered by <a href="https://mobile.facebook.com/abdulsalamkayode.ishaq.5">Abdulsalam Ishaq</a>.</div>
            </div>
          </div>
        </div><!-- end container -->
      </footer>
      <div class="dmtop" style="bottom: 25px;">Scroll to Top</div>
      <a class="scroll-to-top visible" href="#" id="scrollToTop"><i class="icon icon-chevron-up icon-white"></i></a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>