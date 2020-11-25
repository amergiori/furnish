@extends('master')
@section('content')
<div class="row">
    {{ Breadcrumbs::render('login') }}
</div>

<!-- content -->

<!-- login-register -->
<section id="login-register">
    <div class="container">
        <div class="row">
            <!-- login form 1 -->
            <div class="col-sm-6">
                <div id="login-form">
                    <form action="" method="POST" novalidate="novalidate" autocomplete="off">
                        @csrf
                        <h3 class="log-title">Log In</h3>
                        <div class="form-group">
                            <label for="email">* Email</label>
                            <input type="text" class="form-control" id="email" value="{{ old('email') }}" name="email" placeholder="Email" >
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="password">* Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- log-line -->
                        <div class="log-line">
                            <div class="pull-left">
                                <div class="checkbox checkbox-primary space-bottom">
                                    <label class="hide"><input type="checkbox"></label>
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1"><span>Remember Me</span></label>
                                </div>
                            </div>
                            <div class="pull-right">
                                <input type="submit" value="Log In" href="my-account.html" class="btn btn-md btn-primary-filled btn-log btn-rounded">
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div><!-- / log-line -->
                        <a href="#x" class="forgot-password">Forgot your Password?</a>
                    </form>
                </div>
            </div><!-- / col-sm-6 -->
            <!-- / login form 1 -->
        </div><!-- / row -->
        <!-- / form 1 -->
    </div><!-- / container -->
</section>
<!-- / login-register -->

<!-- / content -->
@endsection 