@extends('master')

@section('content')
<!-- my-account -->
<section id="my-account">
  <div class="container">
      <div class="row">

          <div class="col-sm-2 account-sidebar">
              <img src="images/account-img.jpg" alt="">
              <p><a href="#personal-info" class="page-scroll">Personal Info</a></p>
              <p><a href="#shipping-info" class="page-scroll">Shipping Info</a></p>
              <p><a href="#my-orders" class="page-scroll">My Orders</a></p>
              <p><a href="#my-reviews" class="page-scroll">My Reviews</a></p>
              <p><a href="#wishlist" class="page-scroll">Wishlist</a></p>
          </div><!-- / account-sidebar -->

          <div class="col-sm-10 account-info">
              <div id="personal-info" class="account-info-content">
                <h4>Personal Info <span class="pull-right"><a href="{{url('user/profile/'. $user->id .'/edit')}}" class="btn btn-sm btn-primary btn-rounded no-margin"><i class="lnr lnr-pencil"></i><span>Edit</span></a></span></h4>
                  <div class="row">

                      <div class="col-xs-6 col-sm-4 col-md-2">
                      <img src="{{ asset('images/' . $user->profile_image) }}" alt="">
                          <a href="#x" class="btn btn-primary btn-xs btn-rounded no-margin">Profile Image</a>
                      </div>

                      <div class="col-xs-6 col-sm-8 col-md-10">
                          <p><u>Name:</u> <span>{{ $user->name }}</span></p>
                          <p><u>Email:</u> <span>{{ $user->email }}</span></p>
                          <p><u>Phone:</u> <span>{{ $user->phone }}</span></p>
                          <p><u>Joined:</u> <span>{{ date('d-m-Y H:i', strtotime($user->created_at)) }}</span></p>
                          <p><u>last Update:</u> <span>{{ date('d-m-Y H:i', strtotime($user->updated_at)) }}</span></p>
                      </div>

                  </div><!-- / row -->
              </div><!-- / personal-info -->

              <div id="shipping-info" class="account-info-content">
                  <h4>Shipping Info <span class="pull-right"><a href="#x" class="btn btn-sm btn-primary btn-rounded no-margin"><i class="lnr lnr-pencil"></i><span>Edit</span></a></span></h4>
                  <p class="space-bottom"><span><strong>John Doe - me@mysite.com</strong></span></p>
                  <p>Country: <span>USA</span></p>
                  <p>State: <span>Florida</span></p>
                  <p>City: <span>Miami</span></p>
                  <p>Address Line: <span>S Miami Ave, SW 20th, Suite 3864</span></p>
                  <p>ZIP Code: <span>33222</span></p>
                  <div class="account-info-footer"><a href="#x" class="btn btn-sm btn-primary btn-rounded no-margin"><i class="fa fa-plus"></i><span>Add New Address</span></a></div>
              </div><!-- / shipping-info -->

              <!-- my-account -->
              @if($orders)
              <div id="my-orders" class="account-info-content">
                <h4>My Orders</h4>
                @foreach ($orders as $event)
                    @foreach (unserialize($event->data) as $order)
                    <p><b>Order {{ $order['id'] }}</b><br>
                        <span>Status: @if ($event->status) Shipped @else Not Shipped @endif </span><br>
                    Items: <span>{{ $order['name'] }}</span><br>
                    Price: <span>{{ $order['price'] }}</span><br>
                    Quantity: <span>{{ $order['quantity'] }}</span><br>
                    Total: <span>{{ $event->total }}</span><br>
                    </p>
                    @endforeach
                @endforeach
                </div><!-- / my-orders -->

                <div id="my-reviews" class="account-info-content">
                    <h4>My Reviews <span class="pull-right"><a href="#x" class="btn btn-sm btn-primary btn-rounded no-margin"><i class="lnr lnr-pencil"></i><span>Edit</span></a></span></h4>
                    <p><a href="#x">Order #38726</a> - <span>Review: <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </i></span></p>
                    <p><a href="#x">Order #34823</a> - <span>Review: <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </i></span></p>
                    <p><a href="#x">Order #23463</a> - <span>Review: <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></span></p>
                </div><!-- / my-reviews -->
                
                <div id="wishlist" class="account-info-content">
                    <h4>Wishlist <span class="pull-right"><a href="#x" class="btn btn-sm btn-primary btn-rounded no-margin"><i class="lnr lnr-pencil"></i><span>Edit</span></a></span></h4>
                    <p><a href="#x">Product 1</a> - <span>Price: $29</span></p>
                    <p><a href="#x">Product 2</a> - <span>Price: $59</span></p>
                    <p><a href="#x">Product 3</a> - <span>Price: $69</span></p>
                </div><!-- / wishlist -->
            </div><!-- / account-info -->
                @endif
                <!-- / my-account -->  
      </div><!-- / row -->
  </div><!-- / container -->
</section>
<!-- / my-account -->    
@endsection