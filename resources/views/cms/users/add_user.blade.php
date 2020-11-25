@extends('cms.cms_master')

@section('main_content')
<body>
<div class="row">
    <div class="span9">
        <div class="content">
            <div class="module message">
                <div class="module-head">
                    <h3><b>Add User</b></h3>
                </div><br>
                    <div class="content">
                        <div class="module message">
                            <div class="module-body">
                                <form action="{{ url('cms/users') }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="w-100 field-input-cms">
                                                <label for="role_id" class="input-group-text h-50"><span class="text-danger">*</span><b> Permissions:</b></label>
                                                <select name="role_id" class="custom-select span-8">
                                                    <option value="">Choose Permission...</option>
                                                    <option value="8">Admin</option>
                                                    <option value="2">Regular</option>
                                                </select>
                                            </div>
                                            <small class="text-muted help-text">Please select one option</small><br>
                                            <span class="text-danger">&nbsp; {{ $errors->first('role_id') }}</span>
                                        </div>
                                        <div class="w-100 field-input-cms">
                                            <label for="name" class="input-group-text h-100"><span class="text-danger">*</span><b> Name:</b></label>        
                                            <input type="text" name="name" style="width:100%" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <small class="text-muted help-text">Name of user. chars: min-3|max-255</small><br>
                                        <span class="text-danger">&nbsp; {{ $errors->first('name') }}</span>
                                        <div class="field-input-cms w-100">
                                            <label for="email" class="input-group-text"><span class="text-danger">*</span><b> Email:</b></label>        
                                            <input type="text" name="email" size="120" class="form-control mw-100" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <small class="text-muted text-balck help-text"> Email of user</small><br>
                                        <span class="text-danger">&nbsp; {{ $errors->first('email') }}</span>
                                        <div class="form-group">
                                            <label for="name" class="input-group-text h-100"><span class="text-danger">*</span><b> Password:</b></label>
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                            <div class="help-block with-errors text-danger"> {{ $errors->first('password') }}</div>
                                        </div>
                                        <div class="form-group">
                                                <label for="name" class="input-group-text h-100"><span class="text-danger">*</span><b> Confirm Password:</b></label>
                                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="field-input-cms w-100">
                                            <label for="phone" class="input-group-text"><span class="text-danger">*</span><b> Phone:</b></label>        
                                            <input type="text" name="phone" size="120" class="form-control mw-100" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <small class="text-muted text-balck help-text"> Password of user</small><br>
                                        <span class="text-danger">&nbsp; {{ $errors->first('phone') }}</span>
                                        <div class="input-group mb-3 field-input-cms">
                                                <div class="w-100 field-input-cms">
                                                    <label for="profile_image" class="input-group-text"><span class="text-danger">*</span><b> Profile Image:</b></label>        
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" name="profile_image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                    </div>
                                                    </div>
                                                <small class="text-muted help-text">Image must be: jpg, jpeg, png, gif. Max: 5mb</small><br>
                                                <span class="text-danger">&nbsp; {{ $errors->first('Profile_image') }}</span>
                                            </div>
                                        <a class="btn btn-inverse" href="{{ url('cms/users') }}">Cancel</a>
                                        <input type="submit" value="Save User" name="submit" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>        
        </div> <!--/.content-->
    </div><!--/.span9-->
</div>

@endsection