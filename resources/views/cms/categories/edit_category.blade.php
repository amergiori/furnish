@extends('cms.cms_master')

@section('main_content')
<body>
<div class="row">
    <div class="span9">
        <div class="content">
            <div class="module message">
                <div class="module-head">
                    <h3><b>Edit Category</b></h3>
                </div><br>
                    <div class="content">
                        <div class="module message">
                            <div class="module-body">
                                    <form action="{{ url('cms/categories/' . $category_item['id']) }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data">
                                        <div class="module-body">
                                            @method('PUT')
                                            @csrf
                                            <input type="hidden" name="item_id" value="{{ $category_item['id']}}">
                                    <div class="form-group">
                                            <div class="w-100 field-input-cms">
                                                <label for="title" class="input-group-text h-100"><span class="text-danger">*</span><b> Title:</b></label>        
                                                <input type="text" value="{{ $category_item['title'] }}" name="title" id="title" style="width:100%" class="form-control original-text" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                            </div>
                                            <small class="text-muted help-text">Title of content. chars: min-3|max-255</small><br>
                                            <span class="text-danger">&nbsp; {{ $errors->first('title') }}</span>
                                            <div class="field-input-cms w-100">
                                                    <label for="url" class="input-group-text"><span class="text-danger">*</span><b> Url:</b></label>        
                                                    <input type="text" value="{{ $category_item['url'] }}" name="url" id="url" size="120" class="form-control target-text mw-100" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                </div>
                                                <small class="text-muted text-balck help-text"> Text of url. only small letters, 0-9 & "-"</small><br>
                                                <span class="text-danger">&nbsp; {{ $errors->first('url') }}</span>
                                            <div class="input-group mb-3 field-input-cms">
                                                <div class="w-100 field-input-cms">
                                                    <label for="description" class="input-group-text"><span class="text-danger">*</span><b> Description:</b></label>        
                                                    <textarea name="description" id="article" class="form-control">{{ $category_item['description'] }}</textarea>
                                                </div>
                                                <small class="text-muted help-text">Description of category. chars: min-3</small><br>
                                                <span class="text-danger">&nbsp; {{ $errors->first('description') }}</span>
                                            </div>
                                            <div class="input-group mb-3 field-input-cms">
                                                <div class="w-100 field-input-cms">
                                                    <label for="image" class="input-group-text"><span class="text-danger">*</span><b> Image:</b></label>        
                                                </div>
                                                <div class="form-group">
                                                    <img width="50" src="{{ asset('images/' . $category_item['image']) }}">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Change image</label>
                                                    </div>
                                                    </div>
                                                <small class="text-muted help-text">Image must be: jpg, jpeg, png, gif. Max: 5mb</small><br>
                                                <span class="text-danger">&nbsp; {{ $errors->first('image') }}</span>
                                            </div>
                                        <a class="btn btn-inverse" href="{{ url('cms/categories') }}">Cancel</a>
                                        <input type="submit" value="Update Category" name="submit" class="btn btn-primary">
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