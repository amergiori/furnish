@extends('cms.cms_master')

@section('main_content')
<body>
<div class="row">
    <div class="span9">
        <div class="content">
            <div class="module message">
                <div class="module-head">
                    <h3><b>Edit Product</b></h3>
                </div><br>
                    <div class="content">
                        <div class="module message">
                            <div class="module-body">
                                    <form action="{{ url('cms/users/' . $user->id) }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data">
                                        <div class="module-body">
                                            @method('PUT')
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $user->id}}">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="w-100 field-input-cms">
                                                <label for="category-id" class="input-group-text h-50"><span class="text-danger">*</span><b> Permissions:</b></label>
                                                <select name="role_id" class="custom-select span-8">
                                                    <option @if ( $user->role_id == 8 ) selected="selected" @endif value="8">Admin</option>
                                                    <option @if ( $user->role_id == 2 ) selected="selected" @endif value="2">Regular</option>
                                                </select>
                                            </div>
                                            <small class="text-muted help-text">Please select one option</small><br>
                                            <span class="text-danger">&nbsp; {{ $errors->first('category_id') }}</span>
                                        </div>
                                        <div class="w-100 field-input-cms">
                                            <label for="name" class="input-group-text h-100"><span class="text-danger">*</span><b> Name:</b></label>        
                                            <input type="text" value="{{ $user->name }}" name="name" style="width:100%" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <small class="text-muted help-text">Name of user</small><br>
                                        <span class="text-danger">&nbsp; {{ $errors->first('name') }}</span>
                                        <div class="field-input-cms w-100">
                                            <label for="email" class="input-group-text"><span class="text-danger">*</span><b> Email:</b></label>        
                                            <input type="text" value="{{ $user->email }}" name="email" size="120" class="form-control mw-100" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <small class="text-muted text-balck help-text"> Email of user</small><br>
                                        <span class="text-danger">&nbsp; {{ $errors->first('email') }}</span>
                                        <div class="field-input-cms w-100">
                                            <label for="phone" class="input-group-text"><span class="text-danger">*</span><b> Phone:</b></label>        
                                            <input type="text" value="{{ $user->phone }}" name="phone" size="120" class="form-control mw-100" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <small class="text-muted text-balck help-text"> Phone number of user</small><br>
                                        <span class="text-danger">&nbsp; {{ $errors->first('phone') }}</span>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="profile_image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                    <label class="custom-file-label" name="profile_image" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>
                                            <small class="text-muted help-text">Image must be: jpg, jpeg, png, gif. Max: 5mb</small><br>
                                            <span class="text-danger">&nbsp; {{ $errors->first('profile_image') }}</span>
                                        </div>
                                        <div class="form-group">
                                            <img id="cms-profile-image" src="{{ asset('images/' . $user->profile_image) }}" >
                                        </div><br>
                                        <a class="btn btn-inverse" href="{{ url('cms/users') }}">Cancel</a>
                                        <input type="submit" value="Save Product" name="submit" class="btn btn-primary">
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