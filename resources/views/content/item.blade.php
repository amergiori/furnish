@extends('master')

@section('content')
<div class="row">
    {{ Breadcrumbs::render('item', $curl, $purl) }}
</div>

 <!-- content -->

<!-- shop single-product -->
<section id="shop">
        <div class="container">
            <div class="row">
    
                <!-- product content area -->
                <div class="col-sm-6 col-md-7 content-area">
                    <div class="product-content-area">
                        <div id="product-slider" class="carousel slide" data-ride="carousel">
                            <!-- wrapper for slides -->
                            <div class="carousel-inner" role="listbox" uk-lightbox="animation: fade">
                                <div class="item active">
                                    <a href="{{ asset('images/products/' . $product['pimage'])}}" data-caption="{{$product['ptitle']}}">
                                        <img src="{{ asset('images/products/' . $product['pimage'])}}" alt="{{$product['ptitle']}}">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="{{ asset('images/products/' . $product['pimage'])}}"  data-caption="{{$product['ptitle']}}">
                                        <img src="{{ asset('images/products/' . $product['pimage'])}}">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="{{ asset('images/products/couches/couch7.jpg')}}" data-caption="{{$product['ptitle']}}">
                                        <img src="{{ asset('images/products/couches/couch7.jpg')}}">
                                    </a>
                                </div>
                            </div>
                            <!-- / wrapper for slides -->
    
                            <!-- controls -->
                            <a class="left carousel-control" href="#product-slider" role="button" data-slide="prev">
                                <span class="lnr lnr-chevron-left" aria-hidden="true"></span>
                            </a>
                            <a class="right carousel-control" href="#product-slider" role="button" data-slide="next">
                                <span class="lnr lnr-chevron-right" aria-hidden="true"></span>
                            </a>
                            <!-- / controls -->

                        </div><!-- / product-slider -->

                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#description" role="tab" data-toggle="tab" aria-expanded="true">Description</a></li>
                            <li class=""><a href="#info" role="tab" data-toggle="tab" aria-expanded="false">Product Info</a></li>
                            <li class=""><a href="#reviews" role="tab" data-toggle="tab" aria-expanded="false">Reviews (2)</a></li>
                        </ul>
                        <!-- / nav-tabs -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane animated fadeIn active" id="description">
                                <p>{!! $product['article'] !!}</p>
                            </div>
                            <!-- / description-tab -->
    
                            <div role="tabpanel" class="tab-pane animated fadeIn" id="info">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>Sizes:</th>
                                                    <td>Small, Medium, Large</td>
                                                </tr>
                                                <tr>
                                                    <th>Colors:</th>
                                                    <td>Grey, Black, Blue</td>
                                                </tr>
                                                <tr>
                                                    <th>Fabric:</th>
                                                    <td>100% Cotton</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
    
                                    <div class="col-sm-6">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>Weight:</th>
                                                    <td>0.34 Kg</td>
                                                </tr>
                                                <tr>
                                                    <th>Made In:</th>
                                                    <td>USA</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- / row -->
                            </div>
                            <!-- / info-tab -->
    
                            <div role="tabpanel" class="tab-pane animated fadeIn" id="reviews">
                                <div class="reviews">
                                    <div class="review-author pull-left">
                                      <img src="" alt="">
                                    </div>
                                    <div class="review-content">
                                        <h4 class="review-title no-margin">Simply the Best!</h4>
                                        <div class="review-stars">
                                            <span class="product-rating">
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </span>
                                        </div><!-- / review-stars -->
                                        <p>Aliquam pellentesque nisl nec ultricies scelerisque. Proin vel blandit magna. Class aptent taciti sociosqu.</p>
                                        <cite> - Johana Doe</cite>
                                    </div><!-- / review-content -->
    
                                    <div class="space-25">&nbsp;</div>
    
                                    <div class="review-author pull-left">
                                      <img src="" alt="">
                                    </div>
                                    <div class="review-content">
                                        <h4 class="review-title no-margin">Good Product.</h4>
                                        <div class="review-stars">
                                            <span class="product-rating">
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i>
                                            </span>
                                        </div><!-- / review-stars -->
                                        <p>Vestibulum luctus justo justo, ac iaculis dolor luctus nec. In nec molestie mi. Praesent blandit interdum neque.</p>
                                        <cite> - Nicole Dowe</cite>
                                    </div><!-- / review-content -->
                                </div><!-- / reviews -->
                            </div>
                            <!-- / reviews-tab -->
                        </div>
                        <!-- / tab-content -->
                    </div><!-- / product-content-area -->
    
                    <!-- add review -->
                    <div id="add-review" class="space-top-30">
                        <h4>Leave a review</h4>
                        <div class="row">
                            <div class="col-sm-4 review-form">
                                <input type="text" class="form-control" placeholder="*Name" required>
                            </div>
                            <div class="col-sm-4 review-form">
                                <input type="email" class="form-control" placeholder="*Email" required>
                            </div>
                            <div class="col-sm-4 review-form">
                                <select class="form-control">
                                    <option>5 Stars</option>
                                    <option>4 Stars</option>
                                    <option>3 Stars</option>
                                    <option>2 Stars</option>
                                    <option>1 Star</option>
                                </select>
                            </div>
                            <div class="col-sm-12 review-form">
                                <textarea rows="7" class="form-control" placeholder="*Review" required></textarea>
                                <button type="submit" class="btn btn-submit btn-primary-filled btn-rounded">Submit Review</button>
                            </div>
                        </div><!-- / row -->
                    </div>
                    <!-- / add review --> 
    
                </div>
                <!-- / project-content-area -->
    
                <!-- project sidebar area -->
                <div class="col-sm-6 col-md-5 product-sidebar">
                    <div class="product-details">
                        <h4>{{ $product['ptitle']}}</h4>
                        <p>{{ $product['article'] }}</p>
                        <h4 class="space-top-30">Product Info</h4>
                        <div class="product-info">
                            <div class="info">
                                <p><i class="lnr lnr-tag"></i><span>Price: ${{ $product['price'] }}</span></p>
                            </div>
                            <div class="info">
                                <p><i class="lnr lnr-tag"></i><span>Stock: {{ $product['stock'] }}</span></p>
                            </div>
                            <div class="info">
                                <p><i class="lnr lnr-heart"></i><span>Category: <a href="#"> </a></span></p>
                            </div>
                            <div class="info">
                                <p><i class="lnr lnr-star"></i><span>Reviews: <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></span></p>
                            </div>
                        </div><!-- / project-info -->
    
                        <div class="buy-product">
                            <div class="options">
                                <input type="number" step="1" min="0" name="cart" value="1" title="Qty" class="input-text qty text" size="4">
                                <span class="selectors">
                                    <select class="selectpicker">
                                        <optgroup label="Size:">
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </optgroup>
                                    </select>
                                    <select class="selectpicker two">
                                        <optgroup label="Color:">
                                            <option>Grey</option>
                                            <option>Black</option>
                                            <option>Blue</option>
                                        </optgroup>
                                    </select>
                                </span>
                            </div>
                            <!-- / options -->
    
                            <div class="space-25">&nbsp;</div>
                            
                            @if ( Cart::get($product['id']) )
                                <a data-id="{{ $product['id'] }}"  class="btn btn-primary-filled btn-rounded remove-from-cart-btn text-white"><i class="fas fa-times"></i><span> Remove From Cart</span></a>
                            @else 
                                <a data-id="{{ $product['id'] }}"  class="btn btn-primary-filled btn-rounded add-to-cart-btn text-white"><i class="lnr lnr-cart"></i><span> Add to Cart</span></a>
                            @endif
                            <a href="{{url('shop/checkout')}}" class="btn btn-success-filled btn-rounded"><i class="fas fa-credit-card"></i><span> Checkout</span></a>
                        </div>
    
                    </div><!-- product-details -->
    
                </div><!-- / col-sm-4 col-md-3 -->
                <!-- / project sidebar area -->
    
            </div><!-- / row -->
        </div><!-- / container -->
    </section>
    <!-- / shop single-product -->
    
    <!-- / content -->
    
@endsection 