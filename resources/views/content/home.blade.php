@extends('master')

@section('content')
<div class="row">
    {{ Breadcrumbs::render('home') }}
</div>
<div id="header-sliders">
    <!-- slider -->
    <div id="slider" class="carousel slide">  
        <div class="carousel-inner">

            <!-- slide 1 -->
        <div class="item active slide1 slider-item" style="background: url({{ asset('images/couches.jpg') }});">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-12 slider-content">
                                <h1 class="slide-title fadeInDown animated first text-white" ><b>{{ $categories[0]['title'] }}</b></h1>
                                <a href="{{ url('shop/' . $categories[0]['url']) }}" class="page-scroll btn btn-lg btn-primary-filled btn-pill fadeInUp animated third"><i class="lnr lnr-cart"></i> <span>Shop Now</span></a>
                            </div><!-- slider-content -->
                        </div><!-- / row -->
                    </div><!-- / carousel-caption -->
                </div><!-- / container -->
            </div><!-- / slide 1 -->

            <!-- slide 2 -->
            <div class="item slide2 slider-item" style="background: url({{ asset('images/table.jpg') }});">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-12 slider-content">
                                <h3 class="slide-title fadeInDown animated first"><b>{{ $categories[1]['title'] }}</b></h3>
                                <a href="{{ url('shop/' . $categories[1]['url']) }}" class="btn btn-lg btn-primary-filled btn-pill fadeInUp animated third"><i class="lnr lnr-store"></i> <span>Shop Now</span></a>
                            </div><!-- slider-content -->
                        </div><!-- / row -->
                    </div><!-- / carousel-caption -->
                </div><!-- / container -->
            </div><!-- / slide 2 -->

            <!-- slide 3 -->
            <div class="item slide3 slider-item" style="background: url({{ asset('images/dresser-carousel.jpg') }});">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-12 slider-content">
                                <h3 class="slide-title fadeInDown animated first"><b>{{ $categories[2]['title'] }}</b></h3>
                                <a href="{{ url('shop/' . $categories[2]['url']) }}" class="btn btn-lg btn-primary-filled btn-pill fadeInUp animated third"><i class="lnr lnr-store"></i> <span>Shop Now</span></a>
                            </div><!-- slider-content -->
                        </div><!-- / row -->
                    </div><!-- / carousel-caption -->
                </div><!-- / container -->
            </div><!-- / slide 3 -->

        </div><!-- /carousel-inner -->

        <!-- controls -->
        <a class="left carousel-control" href="#slider" data-slide="prev"><span class="lnr lnr-chevron-left"></span></a>
        <a class="right carousel-control" href="#slider" data-slide="next"><span class="lnr lnr-chevron-right"></span></a>
        <!-- / controls -->

    </div>
    <!-- / slider-->
</div><!-- / sliders -->

</header>
<!-- / header -->

<!-- content -->

<!-- categories -->
<section id="categories">
<div class="container">
    <div class="page-header text-center wsub">
        <h2>Shop Categories</h2>
    </div><!--/ page-header -->
    <p class="title-description text-center">When it comes to furnishing your home, finding the perfect furniture that is both stylish and functional is one of the best parts about owning a home. You can let your inner interior designer flourish sorting through all the decoration options, deciding on how to blend colors, patterns, and materials</p>
    <div class="row">

        @foreach ($categories as $category)
        <div class="col-sm-4 category">
            <a href="{{ url('shop/' . $category['url']) }}">
                <div class="category-item">
                    <img src="{{ asset('images/' . $category['image']) }}" alt="" style="height:370px">
                    <div class="overlay">
                        <div class="caption">
                            <h4>{{ $category['title'] }}</h4>
                        </div>
                    </div>
                </div><!-- / category-item -->
            </a>
        </div><!-- / category -->   
        @endforeach

    </div><!-- / row -->
</div><!-- / container -->
</section>
<!-- / categories -->

<!-- featured-products -->
<section id="featured-products">
<div class="page-header text-center wsub">
    <h2>Featured Products</h2>
</div><!--/ page-header -->
<div id="products-carousel" class="owl-carousel">

@foreach ($data as $product)
<!-- item -->
<div class="item product">
    <a href="#" class="product-link"></a>
    <!-- / product-link -->
    <img src="{{ asset('images/products/' . $product->pimage) }}" alt="">
    <!-- / product-image -->

    <!-- product-hover-tools -->
    <div class="product-hover-tools">
            <a href="{{ url('shop/' . $product->url . '/' . $product->purl) }}" class="view-btn">
                <i class="lnr lnr-eye"></i>
            </a>
            @if ( Cart::get($product->id) )
            <a data-id="{{ $product->id }}" class="add-to-cart remove-from-cart-btn">
                <i class="fas fa-times"></i>
            </a>
            @else 
            <a data-id="{{ $product->id }}"  class="add-to-cart add-to-cart-btn">
                <i class="lnr lnr-cart"></i>
            </a>
            @endif
    </div><!-- / product-hover-tools -->

    <!-- product-details -->
    <div class="product-details">
        <h3 class="product-title">{{ $product->ptitle}}</h3>
        <h6 class="product-price">{{ $product->price }}</h6>
    </div><!-- / product-details -->
</div>
<!-- / item -->
@endforeach
    
</div> <!-- / products-carousel -->
</section>
<!-- / featured-products -->

<!-- shop 3col -->
<section id="shop">
<div class="page-header text-center wsub">
    <h2>New Arrivals</h2>
</div><!--/ page-header -->
<div class="container">
    <div id="grid" class="row">
        
        @foreach ($data as $product)           
        <!-- product -->
        <div class="col-xs-6 col-md-4 product">
            <span class="sale-label">SALE</span>
            <a href="{{ url('shop/' . $product->url . '/' . $product->purl) }}" class="product-link"></a>
            <!-- / product-link -->
            <img src="{{ asset('images/products/' . $product->pimage) }}" alt="">
            <!-- / product-image -->
            
            <!-- product-hover-tools -->
            <div class="product-hover-tools">
                <a href="{{ url('shop/' . $product->url . '/' . $product->purl) }}" class="view-btn">
                    <i class="lnr lnr-eye"></i>
                </a>
                @if ( Cart::get($product->id) )
                <a data-id="{{ $product->id }}" class="add-to-cart remove-from-cart-btn">
                    <i class="fas fa-times"></i>
                </a>
                @else 
                <a data-id="{{ $product->id }}"  class="add-to-cart add-to-cart-btn">
                    <i class="lnr lnr-cart"></i>
                </a>
                @endif
            </div><!-- / product-hover-tools -->
            
            <!-- product-details -->
            <div class="product-details">
                <h3 class="product-title">{{ $product->ptitle}}</h3>
                <h6 class="product-price">{{ $product->price}}</h6>
            </div><!-- / product-details -->
        </div><!-- / product -->
        @endforeach
        

        <!-- grid-resizer -->
        <div class="col-xs-6 col-md-4 shuffle_sizer"></div>
        <!-- / grid-resizer -->

    </div><!-- / row -->
</div><!-- / container -->
</section>
<!-- / shop 3col -->

<!-- features section 3col -->
<section id="features">
<div class="container">
    <div class="row">
        <!-- feature-block -->
        <div class="col-md-4 feature-center">
            <div class="feature block">
                <div class="feature-icon">
                    <i class="lnr lnr-gift"></i>
                </div>
                <h5>Free Shipping</h5>
                <p>Free Worldwide shipping</p>
            </div>
        </div><!-- / col-md-4 -->
        <!-- / feature-block -->

        <!-- feature-block -->
        <div class="col-md-4 feature-center">
            <div class="feature block">
                <div class="feature-icon">
                    <i class="lnr lnr-clock"></i>
                </div>
                <h5>Fast Delivery</h5>
                <p>Ultra fast WoldWide delivery</p>
            </div>
        </div><!-- / col-md-4 -->
        <!-- / feature-block -->

        <!-- feature-block -->
        <div class="col-md-4 feature-center">
            <div class="feature block">
                <div class="feature-icon">
                    <i class="lnr lnr-exit"></i>
                </div>
                <h5>Money Back</h5>
                <p>Money back guarantee</p>
            </div>
        </div><!-- / col-md-4 -->
        <!-- / feature-block -->
    </div><!-- / row -->
</div><!-- / container -->
</section>
<!-- / features section 3col -->

<!-- newsletter -->
<section id="newsletter">
<div class="container">
    <div class="page-header text-center">
        <h2>Subscribe for Newsletter</h2>
    </div>
    <div class="input-group">
        <input type="text" class="form-control rounded" placeholder="Your email address...">
        <span class="input-group-btn">
            <button class="btn btn-primary-filled btn-left btn-newsletter btn-rounded inside" type="button"><i class="lnr lnr-enter"></i><span>Subscribe</span></button>
        </span>
    </div><!-- /input-group -->
</div><!-- / container -->
</section>
<!-- / newsletter -->

<!-- brands carousel -->
<section id="brands">
<h2 class="hidden">&nbsp;</h2>
<div class="container">
    <div id="brands-carousel" class="owl-carousel">
        <div class="item"><img src="{{ asset('lib/inCart/images/brand1.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('lib/inCart/images/brand2.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('lib/inCart/images/brand3.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('lib/inCart/images/brand4.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('lib/inCart/images/brand5.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('lib/inCart/images/brand6.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('lib/inCart/images/brand7.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('lib/inCart/images/brand8.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('lib/inCart/images/brand9.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('lib/inCart/images/brand10.png') }}" alt=""></div>
    </div> 
</div><!-- / container -->
</section>
<!-- / brands carousel -->

<!-- / content -->
@endsection 