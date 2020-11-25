<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Responsive Shop Theme">
<meta name="keywords" content="responsive, retina ready, shop bootstrap template, html5, css3" />
<meta name="author" content="KingStudio.ro">
<title>Furnish | @if ( !empty($title) ) {{ $title }} @endif</title>
<!-- toastr -->
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
<!-- favicon -->
<link rel="icon" href="{{ asset('images/favicon.png') }}">
<!-- page title -->
<title>Furnish | Control Panel</title>
<!-- bootstrap css -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link type="text/css" href="{{ asset('lib/edmin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link type="text/css" href="{{ asset('lib/edmin/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">

<!-- css -->
<link href="{{ asset('lib/inCart/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('lib/inCart/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('lib/inCart/css/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('lib/inCart/css/owl.theme.css') }}" rel="stylesheet">
<link type="text/css" href="{{ asset('lib/edmin/css/theme.css')}}" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">

<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700" rel="stylesheet">
<link href="{{ asset('lib/inCart/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link href='{{ asset('lib/inCart/fonts/FontAwesome.otf') }}' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('lib/inCart/css/linear-icons.css') }}">

<!-- own css -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script> var BASE_URL = "{{ url('') }}/"; </script>

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

<!-- preloader -->
<div id="preloader">
    <div class="spinner spinner-round"></div>
</div>
<!-- / preloader -->

<!-- header -->
<header>
<!-- top-menu -->
    @include('includes.top-menu')
<!-- / top-menu -->
</header>
<!-- / header -->
<nav class="navbar navbar-default">
        <div class="navbar-collapse collapse">
            <img src="{{ asset('images/logo-test1.png') }}" class="col-md-4 logo-img img-fluid pull-left" style="border-radius: 5px;" alt="logo">
            </div><!-- / navbar-header -->
            <div class="navbar">
                <ul class="nav navbar-nav cms-menu"> 
                    <li><a href="{{url('/')}}" target="_blank">Home</a></li>
                    @if ( !empty($menu) )
                        @foreach ($menu as $item)
                            <li><a href="{{ url($item['url']) }}" target="_blank">{{ $item['link'] }}</a></li>
                        @endforeach
                    @endif
                    <li><a href="{{ url('shop') }}" target="_blank">Shop</a></li>
                    <li class="dropdown w-image">
                        <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('lib/inCart/images/eng.png') }}" alt=""> <span class="caret"></span></a>
                        <ul class="dropdown-menu pulse animated">
                            <li><a href="#"><img src="{{ asset('lib/inCart/images/israel.png') }}" alt=""> ISR</a></li>
                        </ul>
                    </li>    
                </ul>
            </div><!--/ nav-collapse -->
        </div><!-- / container -->
    </nav>

<div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <div class="sidebar">
                        <h1>@if ( !empty($title) ) <b style="color:#2d2b32;">{{ $title }}<b> @endif</h1><hr id="hr-dashborad">
                        <ul class="widget widget-menu unstyled dashboard">
                            <li></li>
                            <li><a href="{{ url('cms/dashboard') }}"><i class="menu-icon fas fa-tachometer-alt"></i>Dashboard </a></li>
                                <li><a href="{{ url('errors.404') }}"><i class="menu-icon fas fa-inbox"></i>Inbox <b class="label green pull-right">
                                        11</b> </a></li>
                            <li><a href="{{ url('cms/menu') }}"><i class="menu-icon fas fa-book"></i> Menu </a></li>
                            <li><a href="{{ url('cms/content') }}"><i class="menu-icon fas fa-inbox"></i>Content</a></li>
                            <li><a href="{{ url('cms/categories') }}"><i class="menu-icon fas fa-list-ul"></i> Categories</a></li>
                            <li><a href="{{ url('cms/products') }}"><i class="menu-icon far fa-clipboard"></i>&nbsp;Products</a></li>
                            <li><a href="{{ url('cms/users') }}"><i class="fas fa-users-cog"></i>&nbsp; Users</a></li>
                            <li><a href="{{ url('cms/orders') }}"><i class="menu-icon fas fa-truck"></i>Orders</a></li>
                            <li><a href="{{url('errors.404')}}"><i class="menu-icon fas fa-chart-line"></i> Charts </a></li>
                        </ul>
                        <!--/.widget-nav-->

                    </div>
                    <!--/.sidebar-->
                </div>

                @yield('main_content')
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->
    <div class="footer">
        <div class="container">
            <b class="copyright">&copy; {{date('Y')}} Ori Emergui - Web Developer </b>All rights reserved.
        </div>
    </div>
    <script src="{{ asset('lib/edmin/scripts/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('lib/edmin/scripts/flot/jquery.flot.js')}}" type="text/javascript"></script>
    <script src="{{ asset('lib/edmin/scripts/flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
    <script src="{{ asset('lib/edmin/scripts/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
    <script src="{{ asset('lib/edmin/scripts/common.js')}}" type="text/javascript"></script>


<!-- javascript -->
<script src="{{ asset('lib/inCart/js/jquery.min.js') }}"></script>
<script src="{{ asset('lib/inCart/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('lib/inCart/js/jquery.easing.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<!-- wysiwyg -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>

<!-- scrolling-nav -->
<script src="{{ asset('lib/inCart/js/scrolling-nav.js') }}"></script>
<!-- / scrolling-nav -->

<!-- sliders -->
<script src="{{ asset('lib/inCart/js/owl.carousel.min.js') }}"></script>
<!-- featured-products carousel -->
<script>
    $(document).ready(function() {
      $("#products-carousel").owlCarousel({
        autoPlay: 3000, //set autoPlay to 3 seconds.
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
      });

    });
</script>
<!-- / featured-products carousel -->

<!-- brands carousel -->
<script>
    $(document).ready(function() {
      $("#brands-carousel").owlCarousel({
        autoPlay: 5000, //set autoPlay to 5 seconds.
        items : 5,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });

    });
</script>
<!-- / brands carousel -->
<!-- / sliders -->

<!-- shuffle grid-resizer -->
<script src="{{ asset('lib/inCart/js/jquery.shuffle.min.js') }}"></script>
<script src="{{ asset('lib/inCart/js/custom.js') }}"></script>
<!-- / shuffle grid-resizer -->

<!-- preloader -->
<script src="{{ asset('lib/inCart/js/preloader.js') }}"></script>
<!-- / preloader -->

<!-- my own script -->
<script src="{{ asset('js/script.js') }}"></script>
<!-- / javascript -->
@if ( Session::has('sm') )
    <script>
    toastr.options.positionClass = '{{Session::get('sm-position')}}';
    toastr.success('{{Session::get('sm')}}');
    </script>
@endif
<script>
$('#article').summernote({
    height: 300
});
</script>
</body>

</html>