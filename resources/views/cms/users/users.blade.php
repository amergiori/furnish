@extends('cms.cms_master')

@section('main_content')
<body>
<div class="row">
    <div class="span9">
        <div class="content">
            <div class="module message">
                <div class="module-head">
                        <span class=" add-menu">
                            <a href="{{ url('cms/users/create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Add User</a>
                        </span>
                </div>
                <div class="module-body table">
                    <table class="table table-message">
                        <thead>
                            <tr class="heading">
                            <th>#</th>
                            <th>Profile Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Joined at</th>
                            <th>Premissions</th>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="table-items">
                                    <td>{{ $user->id }}</td>
                                    <td><img class="users-list" src="{{ asset('images/' . $user->profile_image) }}"></td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ date('d-m-Y H:i', strtotime($user->created_at)) }}</td>
                                    @if ( $user->role_id == '8')
                                    <td>Admin</td>
                                    @else
                                    <td>Regular</td>
                                    @endif
                                    <td>
                                        <a class="btn btn-small btn-primary menu-operations" href="{{ url('cms/users/' . $user->id . '/edit') }}"><i class="fas fa-edit"></i> Edit</a>
                                        <a class="btn btn-small btn-danger menu-operations" href="{{ url('cms/users/' . $user->id) }}"><i class="far fa-trash-alt"></i> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <div class="pull-left">
                        <div class="pagination d-flex">
                            {{ $users->links() }}
                        </div>
                    </div> --}}
                </div>
            </div>
            <!--/.content-->
        </div>
    </div><!--/.span9-->
</div>

@endsection