@extends('templates.app')

@section('page-subheader')

    <!-- sub header with breadcrumbs page specific
        Todo: load these with controller -->

    <!-- bottom padding is included in this section -->
@endsection


@section('page-content')

<!-- content goes here -->

<div class="container-fluid">
<div class="row">
    <div class="col-lg-12 mb-30">
        <div class="portlet-box">
            <div class="portlet-header flex-row flex d-flex align-items-center">
                <div class="flex d-flex flex-column"> 
                    <h2>Users</h2>
                    <span>A concise description of the contents</span>
                </div>
            </div>
            <div class="portlet-body no-padding">
              <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>User Roles</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="table-active">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                        <td>{{ $user->roles()->pluck('name')->implode(' ') }}</td>
                        <td>
                            @role('Admin')
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left" style="margine-right: 3px;">Edit</a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            @endrole
                        </td>
                    </tr>
                @endforeach    
                </tbody>
            </table>
            </div>
        </div>
        <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>
    </div>
</div>
</div>

@endsection