@extends('cms.cms_master')

@section('main_content')
<body>
<div class="row">
    <div class="span9">
        <div class="content">
            <div class="module message">
                <div class="module-head">
                    <h3><b>Fill In the Form</b></h3>
                </div><br>
                    <div class="content">
                        <div class="module message">
                            <div class="module-body">
                                <form action="{{ url('cms/menu') }}" method="POST" novalidate="novalidate" autocomplete="off">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="w-100 field-input-cms">
                                                <label for="link" class="input-group-text"><span class="text-danger">*</span><b> Link:</b></label>        
                                                <input type="text" value="{{ old('link') }}" name="link" id="link" size="120" style="width:100%" class="form-control original-text" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                            </div>
                                            <small class="text-muted help-text">Text of menu link. chars: min-3|max-50</small><br>
                                            <span class="text-danger">&nbsp; {{ $errors->first('link') }}</span>
                                            <hr>
                                            <div class="field-input-cms w-100">
                                                <label for="url" class="input-group-text"><span class="text-danger">*</span><b> Url:</b></label>        
                                                <input type="text" value="{{ old('url') }}" name="url" id="url" size="120" class="form-control target-text mw-100" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                            </div>
                                            <small class="text-muted text-balck help-text"> Text of url. only small letters, 0-9 & "-"</small><br>
                                            <span class="text-danger">&nbsp; {{ $errors->first('url') }}</span>
                                            <hr>
                                            <div class="field-input-cms w-100">
                                                <label for="title" class="input-group-text"><span class="text-danger">*</span><b> Title:</b></label>        
                                                <input type="text" value="{{ old('title') }}" name="title" id="title" size="120" class="form-control mw-100" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                            </div>
                                            <small class="text-muted text-balck help-text"> Title of the page. chars: min-3|max-50</small><br><br>
                                            <span class="text-danger pull-right">&nbsp; {{ $errors->first('title') }}</span>
                                        </div>
                                    </div>
                                    <a class="btn btn-inverse" href="{{ url('cms/menu') }}">Cancel</a>
                                    <input type="submit" value="Save Page Link" name="submit" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
            </div>        
        </div> <!--/.content-->
    </div><!--/.span9-->
</div>

@endsection