@extends('cms.cms_master')

@section('main_content')
<body>
<div class="row">
    <div class="span9">
        <div class="content">
            <div class="module message">
                <div class="module-head">
                    <h3><b>Add Product</b></h3>
                </div><br>
                    <div class="content">
                        <div class="module message">
                            <div class="module-body">
                                <form action="{{ url('cms/products') }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="w-100 field-input-cms">
                                                <label for="category-id" class="input-group-text h-50"><span class="text-danger">*</span><b> Category:</b></label>
                                                <select name="category_id" id="category-id" class="custom-select span-8">
                                                    <option value="">Choose Category...</option>
                                                    @foreach ($categories as $item)
                                                      <option @if ( old('category_id')== $item['id'] ) selected="selected" @endif value="{{ $item['id'] }}">{{ $item['title'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <small class="text-muted help-text">Please select one option</small><br>
                                            <span class="text-danger">&nbsp; {{ $errors->first('category_id') }}</span>
                                        </div>
                                        <div class="w-100 field-input-cms">
                                            <label for="ptitle" class="input-group-text h-100"><span class="text-danger">*</span><b> Title:</b></label>        
                                            <input type="text" value="{{ old('ptitle') }}" name="ptitle" id="ptitle" style="width:100%" class="form-control original-text" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <small class="text-muted help-text">Title of product. chars: min-3|max-255</small><br>
                                        <span class="text-danger">&nbsp; {{ $errors->first('ptitle') }}</span>
                                        <div class="field-input-cms w-100">
                                            <label for="purl" class="input-group-text"><span class="text-danger">*</span><b> Url:</b></label>        
                                            <input type="text" value="{{ old('purl') }}" name="purl" id="purl" size="120" class="form-control target-text mw-100" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <small class="text-muted text-balck help-text"> Text of url. only small letters, 0-9 & "-"</small><br>
                                        <span class="text-danger">&nbsp; {{ $errors->first('purl') }}</span>
                                        <div class="w-100 field-input-cms">
                                            <label for="stock" class="input-group-text h-100"><span class="text-danger">*</span><b> Stock:</b></label>        
                                            <input type="number" step="1" min="1" value="{{ old('stock') }}" name="stock" style="width:100%" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <small class="text-muted help-text">stock of product.  min-1</small><br>
                                        <span class="text-danger">&nbsp; {{ $errors->first('stock') }}</span>
                                        <div class="field-input-cms w-100">
                                            <label for="price" class="input-group-text"><span class="text-danger">*</span><b> Price:</b></label>        
                                            <input type="number" step="0.01" min="0" value="{{ old('price') }}" name="price" id="price" size="120" class="form-control mw-100" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <small class="text-muted text-balck help-text"> Price of product. Accepcts numbers only</small><br>
                                        <span class="text-danger">&nbsp; {{ $errors->first('price') }}</span>
                                        <div class="input-group mb-3 field-input-cms">
                                            <div class="w-100 field-input-cms">
                                                <label for="article" class="input-group-text"><span class="text-danger">*</span><b> Article:</b></label>        
                                                <textarea name="article" id="article" class="form-control">{{ old('article') }}</textarea>
                                            </div>
                                            <small class="text-muted help-text">Description of product. chars: min-3</small><br>
                                            <span class="text-danger">&nbsp; {{ $errors->first('description') }}</span>
                                        </div>
                                        <div class="input-group mb-3 field-input-cms">
                                                <div class="w-100 field-input-cms">
                                                    <label for="pimage" class="input-group-text"><span class="text-danger">*</span><b> Image:</b></label>        
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" name="pimage" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                    </div>
                                                    </div>
                                                <small class="text-muted help-text">Image must be: jpg, jpeg, png, gif. Max: 5mb</small><br>
                                                <span class="text-danger">&nbsp; {{ $errors->first('pimage') }}</span>
                                            </div>
                                        <a class="btn btn-inverse" href="{{ url('cms/products') }}">Cancel</a>
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