@extends('cms.cms_master')

@section('main_content')
<body>
<div class="row">
    <div class="span9">
        <div class="content">
            <div class="module message">
                <div class="module-head">
                    <h2><b>Are you Sure?</b></h2>
                </div><br>
                    <div class="content">
                        <div class="module message">
                            <div class="module-body">
                                <form action="{{ url('cms/content/' . $item_id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                        <a class="btn btn-inverse" href="{{ url('cms/content') }}">Cancel</a>
                                        <input type="submit" value="Delete" name="submit" class="btn btn-danger">
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