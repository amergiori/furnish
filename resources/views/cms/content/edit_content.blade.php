@extends('cms.cms_master')

@section('main_content')
<body>
<div class="row">
    <div class="span9">
        <div class="module message">
            <div class="module-head">
                <h3><b>Edit Content</b></h3>
            </div><br>
            <form action="{{ url('cms/content/' . $content_item['id']) }}" method="POST" novalidate="novalidate" autocomplete="off">
                <div class="module-body">
                    @method('PUT')
                    @csrf
                    <div class="w-100 field-input-cms">
                            <label for="menu-id" class="input-group-text h-50"><span class="text-danger">*</span><b> Menu Link:</b></label>
                            <select name="menu_id" id="menu-id" class="custom-select span-8">
                                <option value="">Choose Menu Link...</option>
                                @foreach ($menu as $item)
                                    <option @if ( $content_item['menu_id'] == $item['id'] ) selected="selected" @endif value="{{ $item['id'] }}">{{ $item['link'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <small class="text-muted help-text">Please select one option</small><br>
                        <span class="text-danger">&nbsp; {{ $errors->first('menu_id') }}</span>
                    </div>
                    <div class="w-100 field-input-cms">
                            <label for="ctitle" class="input-group-text h-100"><span class="text-danger">*</span><b> Title:</b></label>        
                            <input type="text" value="{{ $content_item['ctitle'] }}" name="ctitle" id="ctitle" style="width:100%" class="form-control original-text" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <small class="text-muted help-text">Title of content. chars: min-3|max-255</small><br>
                        <span class="text-danger">&nbsp; {{ $errors->first('link') }}</span>
                        <div class="input-group mb-3 field-input-cms">
                            <div class="w-100 field-input-cms">
                                <label for="article" class="input-group-text"><span class="text-danger">*</span><b> Article:</b></label>        
                                <textarea name="article" id="article" class="form-control">{{ $content_item['article'] }}</textarea>
                            </div>
                            <small class="text-muted help-text">Description of item. chars: min-3</small><br>
                            <span class="text-danger">&nbsp; {{ $errors->first('article') }}</span>
                        </div>
                        <a class="btn btn-inverse" href="{{ url('cms/content') }}">Cancel</a>
                        <input type="submit" value="Update Content" name="submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>        
    </div><!--/.span9-->
</div>

@endsection