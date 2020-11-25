@extends('cms.cms_master')

@section('main_content')
<!--/.span3-->
<div class="span9">
    <div class="content">
        <div class="btn-controls">
            <div class="btn-box-row row-fluid">
                <a href="#" class="btn-box big span4"><i class="fas fa-user-clock"></i><b>284</b>
                    <p class="text-muted">Entries This Month</p>
                </a><a href="#" class="btn-box big span4"><i class="fas fa-user-plus"></i><b>15</b>
                    <p class="text-muted">New Users</p>
                </a><a href="#" class="btn-box big span4"><i class="fas fa-chart-line"></i><b>15,152</b>
                    <p class="text-muted">Profit</p>
                </a>
            </div>
            <div class="btn-box-row row-fluid">
                <div class="span8">
                    <div class="row-fluid">
                        <div class="span12">
                            <a href="#" class="btn-box small span4"><i class="far fa-envelope"></i><b>Messages</b></a>
                            <a href="#" class="btn-box small span4"><i class="far fa-address-card"></i><b>Clients</b></a>
                            <a href="#" class="btn-box small span4"><i class="far fa-thumbs-up"></i><b>Social Feed</b></a>
                        </div>
                    </div>
                </div>
                <ul class="widget widget-usage unstyled span4">
                    <li>
                        <p>
                            <strong>Windows 8</strong> <span class="pull-right small muted">78%</span>
                        </p>
                        <div class="progress tight">
                            <div class="bar" style="width: 78%;">
                            </div>
                        </div>
                    </li>
                    <li>
                        <p>
                            <strong>Mac</strong> <span class="pull-right small muted">56%</span>
                        </p>
                        <div class="progress tight">
                            <div class="bar bar-success" style="width: 56%;">
                            </div>
                        </div>
                    </li>
                    <li>
                        <p>
                            <strong>Linux</strong> <span class="pull-right small muted">44%</span>
                        </p>
                        <div class="progress tight">
                            <div class="bar bar-warning" style="width: 44%;">
                            </div>
                        </div>
                    </li>
                    <li>
                        <p>
                            <strong>iPhone</strong> <span class="pull-right small muted">67%</span>
                        </p>
                        <div class="progress tight">
                            <div class="bar bar-danger" style="width: 67%;">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="module message">
                <div class="module-head">
                    <h3><b>Message</b></h3>
                </div>
                <div class="module-option clearfix">
                    <div class="pull-left">
                        <div class="btn-group">
                            <button class="btn">
                                Inbox</button>
                            <button class="btn" data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Inbox(11)</a></li>
                                <li><a href="#">Sent</a></li>
                                <li><a href="#">Draft(2)</a></li>
                                <li><a href="#">Trash</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Settings</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="btn btn-primary">Compose</a>
                    </div>
                </div>
                <div class="module-body table">
                    <table class="table table-message">
                        <tbody>
                            <tr class="heading">
                                <td class="cell-check">
                                    <input type="checkbox" class="inbox-checkbox">
                                </td>
                                <td class="cell-icon">
                                </td>
                                <td class="cell-author hidden-phone hidden-tablet">
                                    Sender
                                </td>
                                <td class="cell-title">
                                    Subject
                                </td>
                                <td class="cell-icon hidden-phone hidden-tablet">
                                </td>
                                <td class="cell-time align-right">
                                    Date
                                </td>
                            </tr>
                            <tr class="unread">
                                <td class="cell-check">
                                    <input type="checkbox" class="inbox-checkbox">
                                </td>
                                <td class="cell-icon">
                                    <i class="icon-star"></i>
                                </td>
                                <td class="cell-author hidden-phone hidden-tablet">
                                    John Donga
                                </td>
                                <td class="cell-title">
                                    Sample Work
                                </td>
                                <td class="cell-icon hidden-phone hidden-tablet">
                                    <i class="icon-paper-clip"></i>
                                </td>
                                <td class="cell-time align-right">
                                    18:24
                                </td>
                            </tr>
                            <tr class="unread starred">
                                <td class="cell-check">
                                    <input type="checkbox" class="inbox-checkbox">
                                </td>
                                <td class="cell-icon">
                                    <i class="icon-star"></i>
                                </td>
                                <td class="cell-author hidden-phone hidden-tablet">
                                    John Donga
                                </td>
                                <td class="cell-title">
                                    Test Title
                                </td>
                                <td class="cell-icon hidden-phone hidden-tablet">
                                    <i class="icon-paper-clip-no"></i>
                                </td>
                                <td class="cell-time align-right">
                                    18:01
                                </td>
                            </tr>
                            <tr class="unread">
                                <td class="cell-check">
                                    <input type="checkbox" class="inbox-checkbox">
                                </td>
                                <td class="cell-icon">
                                    <i class="icon-star"></i>
                                </td>
                                <td class="cell-author hidden-phone hidden-tablet">
                                    Facebook
                                </td>
                                <td class="cell-title">
                                    Dongi sents you a friend request!
                                </td>
                                <td class="cell-icon hidden-phone hidden-tablet">
                                    <i class="icon-paper-clip"></i>
                                </td>
                                <td class="cell-time align-right">
                                    23:58
                                </td>
                            </tr>
                            <tr class="unread">
                                <td class="cell-check">
                                    <input type="checkbox" class="inbox-checkbox">
                                </td>
                                <td class="cell-icon">
                                    <i class="icon-star"></i>
                                </td>
                                <td class="cell-author hidden-phone hidden-tablet">
                                    John Donga
                                </td>
                                <td class="cell-title">
                                    Something
                                </td>
                                <td class="cell-icon hidden-phone hidden-tablet">
                                    <i class="icon-paper-clip"></i>
                                </td>
                                <td class="cell-time align-right">
                                    22:17
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        <div class="module">
            <div class="module-head">
                <h3><b>Orders</b></h3>
            </div>
            <div class="module message">
                <div class="module-body table">
                    <table class="table table-message">
                        <thead>
                            <tr class="heading">
                            <th>User</th>
                            <th>Order Detail</th>
                            <th>Status</th>
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
                                    <td>@if($item->status == 1) Shipped @else Not Shipped @endif</td>
                                    <td>${{ $item->total }}</td>
                                    <td>{{ date('d/m/Y H:m'), strtotime($item->created_at) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--/.module-->
    </div><!--/.content-->
</div><!--/.span9-->
@endsection