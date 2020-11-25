@extends('master')

@section('content')
<!-- login-register -->
<section id="login-register">
  <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <form action="{{url('user/profile/'. $user->id )}}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data">
            @method('PUT')
            @csrf
          <div id="login-form">
                  <h3 class="log-title">Edit Profile</h3>
                  <div class="form-group">
                    <label for="name">Name</label><br>
                      <input type="text" class="form-control" name="name" value="{{ $user->name }}" >
                      <div class="help-block with-errors">{{$errors->first('name')}}</div>
                  </div>
                  <div class="form-group">
                      <label for="email">Email:</label><br>
                      <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                      <div class="help-block with-errors">{{$errors->first('email')}}</div>
                  </div>
                  <div class="form-group">
                      <label for="phone">Phone:</label><br>
                      <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                      <div class="help-block with-errors">{{$errors->first('phone')}}</div>
                  </div>
                  <div class="form-group">
                      <label for="password">Password:</label><br>
                      <input type="password" class="form-control" name="password">
                      <div class="help-block with-errors">{{$errors->first('password')}}</div>
                  </div>
                  <div class="form-group">
                      <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" class="form-control" name="password_confirmation">
                    <div class="help-block with-errors"></div>
                </div>
                  <br><br><br>
                  <div class="form-group">
                    <label for="profile_image">Profile Image:</label>
                      <input type="file" class="form-control" name="profile_image">
                      <div class="help-block with-errors">{{$errors->first('profile_image')}}</div>
                  </div>
                  <!-- log-line -->
                  <div class="log-line">
                      <div class="pull-right">
                        <a href="{{ url('user/profile') }}" class="btn btn-md btn-danger-filled btn-log btn-rounded">Cancel</a>
                        <button type="submit" name="submit" class="btn btn-md btn-primary-filled btn-log btn-rounded">Update</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                      </div>
                  </div><!-- / log-line -->
              </div>
            </form>
          </div><!-- / col-sm-6 -->
      </div><!-- / row -->
      <!-- / form 1 -->
  </div><!-- / container -->
</section>
<!-- / login-register -->
@endsection