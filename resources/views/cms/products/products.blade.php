@extends('cms.cms_master')

@section('main_content')
<body>
<div class="row">
    <div class="span9">
        <div class="content">
            <div class="module message">
                <div class="module-head">
                    <span class=" add-menu">
                        <a href="{{ url('cms/products/create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Add Products</a>
                    </span>
                </div>
                <div class="module-body table">
                    <table class="table table-message">
                        <thead>
                            <tr class="heading">
                            <th>#</th>
                            <th>Product</th>
                            <th>Image</th>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                                <tr class="table-items">
                                    <td>{{ $item['id'] }}</td>
                                    <td>{{ $item['ptitle'] }}</td>
                                    <td><img src="{{ asset('images/products/' . $item['pimage']) }}"></td>
                                    <td>
                                        <a class="btn btn-small btn-primary menu-operations" href="{{ url('cms/products/' . $item['id'] . '/edit') }}"><i class="fas fa-edit"></i> Edit</a>
                                        |
                                        <a class="btn btn-small btn-danger menu-operations" href="{{ url('cms/products/' . $item['id']) }}"><i class="far fa-trash-alt"></i> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pull-left">
                        <div class="pagination d-flex">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!--/.content-->
        </div>
    </div><!--/.span9-->
</div>

@endsection