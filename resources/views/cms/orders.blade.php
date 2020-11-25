@extends('cms.cms_master')

@section('main_content')
<body>
<div class="row">
    <div class="span9">
        <div class="content">
            <div class="module message">
                <div class="module-body table">
                    <table class="table table-message">
                        <thead>
                            <tr class="heading">
                            <th>User</th>
                            <th>Order Detail</th>
                            <th>Total</th>
                            <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                                <tr class="table-items">
                                    <td><u>{{ $item->name }}</u></td>
                                    <td>
                                        <ul>
                                            @foreach (unserialize($item->data) as $order)
                                                <li id="orders-list">{{ $order['name'] }},<br>Quantity: {{ $order['quantity'] }},<br>Price: ${{ $order['price'] }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>${{ $item->total }}</td>
                                    <td>{{ date('d/m/Y H:i:s', strtotime($item->created_at))  }}</td>
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