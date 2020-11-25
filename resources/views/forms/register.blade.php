@extends('master')
@section('content')
<div class="row">
    {{ Breadcrumbs::render('register') }}
</div>
<!-- content -->

<!-- login-register -->
<section id="login-register">
    <div class="container">
        <div class="row">
            <!-- register form 1 -->
            <div class="col-sm-6">
                <div id="register-form">
                    <form action="" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data">
                      @csrf
                        <h3 class="log-title">Register</h3>
                        <div class="form-group">
                            <label for="name">* Name</label>
                            <input type="name" class="form-control" name="name" placeholder="Name">
                            <div class="help-block with-errors text-danger"> {{ $errors->first('name') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="email">* Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <div class="help-block with-errors text-danger"> {{ $errors->first('email') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="phone">* Phone</label>
                            <input type="phone" class="form-control" name="phone" placeholder="Phone">
                            <div class="help-block with-errors text-danger"> {{ $errors->first('phone') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="password">* Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <div class="help-block with-errors text-danger"> {{ $errors->first('password') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="confirm-password">* Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="image">* Image</label>
                            <input type="file" class="form-control" name="profile_image">
                            <div class="help-block with-errors">{{ $errors->first('profile_image') }}</div>
                        </div>
                        <!-- log-line -->
                        <div class="log-line reg-form-1 no-margin">
                            <div class="pull-left">
                                <div class="checkbox checkbox-primary space-bottom">
                                    <label class="hide"><input type="checkbox"></label>
                                    <input id="checkbox2" type="checkbox">
                                    <label for="checkbox2"><span><a href="#x">Terms & Conditions</a></span></label>
                                </div>
                            </div>
                            <div class="pull-right">
                                <button type="submit" name="submit" class="btn btn-md btn-primary-filled btn-log btn-rounded">Register</button>
                                <div id="register-msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div><!-- / log-line -->
                    </form>
                </div>
            </div><!-- / col-sm-6 -->
            <!-- / register form 1 -->
        </div><!-- / row -->
        <!-- / form 1 -->
    </div><!-- / container -->
</section>
<!-- / login-register -->

<!-- / content -->
@endsection 