<div class="top-menu top-menu-primary">
        <div class="container">
            <p>
                @if (Session::has('user_name'))
                <span class="left">Hi, {{ Session::get('user_name') }}</span>    
                @else
                <span class="left">Free Worldwide shipping on orders over <span class="text-primary"><strong>$100</strong></span>!</span>    
                @endif
                
                <span class="right">
                    @if ( Session::has('user_id') )
                        <a href="{{ url('user/profile') }}"><i class="lnr lnr-user"></i><span>My Account</span></a>
                        <a href="{{ url('user/logout') }}"><i class="lnr lnr-lock"></i><span>Logout</span></a>
                        <a href="{{ url('shop/checkout') }}"><i class="lnr lnr-cart"></i><span>Shopping Cart ({{ Cart::getTotalQuantity() }})</span></a>
                    @if (Session::has('is_admin'))
                        <a href="{{ url('cms/dashboard') }}"><i class="fas fa-cogs"></i><span>Control Panel</span></a>
                    @endif
                    @else
                        <a href="{{ url('user/login') }}"><i class="fas fa-sign-in-alt"></i><span>Login</span></a>
                        <a href="{{ url('user/register') }}"><i class="fas fa-user-plus"></i></i><span>Register</span></a>
                        <a href="{{ url('shop/checkout') }}"><i class="fas fa-shopping-cart"></i></i><span>Shopping Cart ({{ Cart::getTotalQuantity() }})</span></a>
                    @endif
                </span>
            </p>
        </div><!-- / container -->
    </div>