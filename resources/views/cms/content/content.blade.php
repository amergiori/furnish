@extends('cms.cms_master')

@section('main_content')
<body>
<div class="row">
    <div class="span9">
        <div class="content">
            <div class="module message">
                <div class="module-head">
                        <span class=" add-menu">
                            <a href="{{ url('cms/content/create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Add content</a>
                        </span>
                </div>
                <div class="module-body table">
                    <table class="table table-message">
                        <thead>
                            <tr class="heading">
                            <th>#</th>
                            <th>Title</th>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contents as $item)
                                <tr class="table-items">
                                    <td>{{ $item['id'] }}</td>
                                    <td>{{ $item['ctitle'] }}</td>
                                    <td>
                                        <a class="btn btn-small btn-primary menu-operations" href="{{ url('cms/content/' . $item['id'] . '/edit') }}"><i class="fas fa-edit"></i> Edit</a>
                                        |
                                        <a class="btn btn-small btn-danger menu-operations" href="{{ url('cms/content/' . $item['id']) }}"><i class="far fa-trash-alt"></i> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
        <!--/.content-->
    </div>
    <!--/.span9-->
</div>

@endsection