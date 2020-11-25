@extends('cms.cms_master')

@section('main_content')
<body>
<div class="row">
    <div class="span9">
        <div class="content">
            <div class="module message">
                <div class="module-head">
                        <span class=" add-menu">
                            <a href="{{ url('cms/categories/create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Add Category</a>
                        </span>
                </div>
                <div class="module-body table">
                    <table class="table table-message">
                        <thead>
                            <tr class="heading">
                            <th>#</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $item)
                                <tr class="table-items">
                                    <td>{{ $item['id'] }}</td>
                                    <td>{{ $item['title'] }}</td>
                                    <td><img src="{{ asset('images/' . $item['image']) }}"></td>
                                    <td>
                                        <a class="btn btn-small btn-primary menu-operations" href="{{ url('cms/categories/' . $item['id'] . '/edit') }}"><i class="fas fa-edit"></i> Edit</a>
                                        |
                                        <a class="btn btn-small btn-danger menu-operations" href="{{ url('cms/categories/' . $item['id']) }}"><i class="far fa-trash-alt"></i> Delete</a>
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