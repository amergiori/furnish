@extends('cms.cms_master')

@section('main_content')
<body>
<div class="row">
    <div class="span9">
        <div class="content">
            <div class="module message">
                <div class="module-head">
                    <h3><b>Add Content</b></h3>
                </div><br>
                    <div class="content">
                        <div class="module message">
                            <div class="module-body">
                                <form action="{{ url('cms/content') }}" method="POST" novalidate="novalidate" autocomplete="off">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="w-100 field-input-cms">
                                                <label for="menu-id" class="input-group-text h-50"><span class="text-danger">*</span><b> Menu Link:</b></label>
                                                <select name="menu_id" id="menu-id" class="custom-select span-8">
                                                    <option value="">Choose Menu Link...</option>
                                                    @foreach ($menu as $item)
                                                        <option @if ( old('menu_id')== $item['id'] ) selected="selected" @endif value="{{ $item['id'] }}">{{ $item['link'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <small class="text-muted help-text">Please select one option</small><br>
                                            <span class="text-danger">&nbsp; {{ $errors->first('menu_id') }}</span>
                                        </div>
                                            <div class="w-100 field-input-cms">
                                                <label for="ctitle" class="input-group-text h-100"><span class="text-danger">*</span><b> Title:</b></label>        
                                                <input type="text" value="{{ old('ctitle') }}" name="ctitle" id="ctitle" style="width:100%" class="form-control original-text" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                            </div>
                                            <small class="text-muted help-text">Title of content. chars: min-3|max-255</small><br>
                                            <span class="text-danger">&nbsp; {{ $errors->first('link') }}</span>
                                            <div class="input-group mb-3 field-input-cms">
                                                <div class="w-100 field-input-cms">
                                                    <label for="article" class="input-group-text"><span class="text-danger">*</span><b> Article:</b></label>        
                                                    <textarea name="article" id="article" class="form-control">{{ old('article') }}</textarea>
                                                </div>
                                                <small class="text-muted help-text">Description of item. chars: min-3</small><br>
                                                <span class="text-danger">&nbsp; {{ $errors->first('article') }}</span>
                                            </div>
                                        <a class="btn btn-inverse" href="{{ url('cms/content') }}">Cancel</a>
                                        <input type="submit" value="Save Content" name="submit" class="btn btn-primary">
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