<header class="tech-header header">
    <div class="container-fluid naijablaze-fluid">
        <div class="naijablaze-logo page-title lb single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2> <img src="{{voyager::image(setting('site.logo'))}}" alt="" class="img-fluid float-left">
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Author</a></li>
                            <li class="breadcrumb-item active">Jessica</li>
                        </ol>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container fixed-top -->
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark  bg-primary">
            <a class="navbar-brand" href="/"><img src="{{voyager::image(setting('site.logo'))}}" alt="NAIJA BLAZE"></a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    @foreach ($nav as $nav)
                    <li class="nav-item">
                        <a class="nav-link" href="/category/{{$nav->id}}/{{$nav->name}}">{{$nav->name}}</a>
                    </li>
                    @endforeach
                    <li class="nav-item">
                        <a class="nav-link" href="/About-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Contact-us">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-rss"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-android"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-apple"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div><!-- end container-fluid -->
</header>