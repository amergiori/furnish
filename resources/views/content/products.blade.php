@extends('master')

@section('content')

<!-- list of products -->
@if ( !empty($products) )
<div class="row">
    {{ Breadcrumbs::render('products', $curl) }}
</div>
<section id="{{ $products[0]->title }} products">
                <div class=" text-center wsub">
                    <h2>{{ $products[0]->title }}</h2>
                    <p class="total-products-display">Total of {{ $total_count }} products were found</p>
                    <div class="container">
                            <a href="{{ url()->current() . '?orderBy=asc' }}"><button class="btn btn-outline-secondary" type="button"  aria-haspopup="true" aria-expanded="false">Lowest first</button></a>
                            <a href="{{ url()->current() . '?orderBy=desc' }}"><button class="btn btn-outline-secondary" type="button"  aria-haspopup="true" aria-expanded="false">Hightest first</button></a>
                    </div>
                </div><!--/ page-header -->
                <br>
             <!-- sidebar-area -->
            <div class="col-sm-4 col-md-3 sidebar-area">
    
                    <!-- categries widget -->
                    <div class="categories-sidebar-widget widget no-border">
                        <h5 class="widget-title">Categories</h5>
                        
                        @foreach ($categories as $category)
                        <p class="product-category">
                            <a href="{{ url('shop/' . $category['url']) }}">{{ $category['title'] }}</a>
                        </p><!-- / category -->
                        @endforeach
    
                    </div>
                    <!-- / categories-sidebar-widget -->
    
                    <!-- tags-sidebar-widget -->
                    <div class="tags-sidebar-widget widget">
                        <div class="widget-title">
                            <h5 class="widget-title">Product Tags</h5>
                        </div>
                        <p>
                            <a href="#" class="btn btn-xs btn-primary-filled btn-rounded">Fashion</a>
                            <a href="#" class="btn btn-xs btn-primary-filled btn-rounded">Furniture</a>
                            <a href="#" class="btn btn-xs btn-primary-filled btn-rounded">Art</a>
                            <a href="#" class="btn btn-xs btn-primary-filled btn-rounded">Webshop</a>
                            <a href="#" class="btn btn-xs btn-primary-filled btn-rounded">Online Store</a>
                        </p>
                    </div>
                    <!-- / tags-sidebar-widget -->
    
                </div><!-- / sidebar-area -->
                <div class="container">
                    <div id="grid" class="row">
                
                        @foreach ($products as $product)        
                        <!-- product -->
                        <div class="col-xs-6 col-md-4 product">
                            <a href="{{ strtolower(url('shop/' . $product->url . '/' . $product->purl)) }}" class="product-link"></a>
                            <!-- / product-link -->
                            <img src="{{ asset('images/products/' . $product->pimage)}}" alt="{{$product->ptitle}}">
                            <!-- / product-image -->                      
                
                            <!-- product-hover-tools -->
                            <div class="product-hover-tools">
                                <a href="{{ strtolower(url('shop/' . $product->url . '/' . $product->purl)) }}" class="view-btn">
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
                                <h3 class="product-title">{{$product->ptitle}}</h3>
                                <span class="pull-right">Stock:{{$product->stock}}</span>
                                <br>
                                <h6 class="product-price">Price: {{$product->price}}</h6>
                            </div><!-- / product-details -->
                        </div><!-- / product -->
                        @endforeach

                
                        <!-- grid-resizer -->
                        <div class="col-xs-6 col-md-4 shuffle_sizer"></div>
                        <!-- / grid-resizer -->
                
                    </div><!-- / row -->
                </div><!-- / container -->
                @if ( isset($_REQUEST['orderBy']) )
                <div class="container">
                        <div class="pagination">
                            {{ $products->appends(['orderBy' => $_REQUEST['orderBy']])->links() }}
                        </div>
                    </div>
                @else
                <div class="container">
                        <div class="pagination">
                            {{ $products->links() }}
                        </div>
                    </div>
                @endif
                
</section><!-- / list of products -->
@endif
@endsection 