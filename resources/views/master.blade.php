<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Responsive Shop Theme">
<meta name="keywords" content="responsive, retina ready, shop bootstrap template, html5, css3" />
<meta name="author" content="KingStudio.ro">

<!-- toastr -->
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
<!-- page title -->
<title>Furnish | @if ( !empty($title) ) {{ $title }} @endif</title>
<!-- bootstrap css -->
<link href="{{ asset('lib/inCart/css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- css -->
<link href="{{ asset('lib/inCart/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('lib/inCart/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('lib/inCart/css/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('lib/inCart/css/owl.theme.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/uikit.css')}}">
<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700" rel="stylesheet">
<link href="{{ asset('lib/inCart/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link href='{{ asset('lib/inCart/fonts/FontAwesome.otf') }}' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('lib/inCart/css/linear-icons.css') }}">

<!-- own css -->
<link rel="icon" href="{{asset('images/favicon.png')}}" type="image/gif">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script> var BASE_URL = "{{ url('') }}/"; </script>

</head>

<body>

<!-- preloader -->
<div id="preloader">
    <div class="spinner spinner-round"></div>
</div>
<!-- / preloader -->

<!-- header -->
<header>
<!-- top-menu-inverse -->
    @include('includes.top-menu')
<!-- / top-menu-inverse -->
</header>
<!-- / header -->


<!-- navbar -->
    @include('includes.navbar')
<!-- / navbar -->

<!-- errors -->
    @include('includes.errors')
<!-- / errors -->


<!-- content -->
    @yield('content')
<!-- / content -->

<!-- footer -->
    @include('includes.footer')
<!-- / footer -->

<!-- javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="{{ asset('lib/inCart/js/jquery.min.js') }}"></script>
<script src="{{ asset('lib/inCart/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('lib/inCart/js/jquery.easing.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<!-- scrolling-nav -->
{{-- <script src="{{ asset('lib/inCart/js/scrolling-nav.js') }}"></script> --}}
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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
crossorigin="anonymous"></script>
<script src="{{asset('js/uikit.min.js')}}"></script>
</body>

</html>