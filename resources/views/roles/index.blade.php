@extends('templates.app')

        {{-- Subheader directives --}}
        @section('head-title', 'Roles / Permissions')

        @section('page-icon')<i class="icon-Home"></i> @endsection

        @section('title') @endsection

        @section('breadcrumbs')
            <li class="breadcrumb-item"><a href="/"><i class="icon-Home mr-2 fs14"></i></a></li>
            <li class="breadcrumb-item active">Roles/Permissions</li>
            
        @endsection

        {{-- End subheader --}}


@section('page-content')

    <!-- content goes here -->
<div class="container-fluid">
    
    @include('flash::message')
    
<div class="row">
    <div class="col-lg-12 mb-30">
        <div class="portlet-box">
            <div class="portlet-header flex-row flex d-flex align-items-center">
                <div class="flex d-flex flex-column"> 
                    <h2>User Roles</h2>
                    <span>A concise description of the contents</span>
                </div>
                <div class="d-flex justify-content-end h-md-down">
                    <a href="{{ route('roles.create') }}"><button class="btn btn-success">Add Role</button></a>
                </div>
            </div>
            <div class="portlet-body no-padding">
              <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Guard</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Permissions</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr class="table-active">
                        <th scope="row">{{ $role->id }}</th>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->guard_name }}</td>
                        <td>{{ $role->created_at }}</td>
                        <td>{{ $role->updated_at }}</td>
                        <!--<td>{{ $role->permissions()->pluck('name') }}</td>-->
                        <td>
                            <ul>
                            @foreach( $role->permissions as $perm )
                            <li>
                                {{ $perm->name }}
                            </li>
                            @endforeach
                            </ul>
                        </td>
                        <td>
                            @if($role->id != 1)
                                @role('Admin')
                                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-info pull-left" style="margine-right: 3px;">Edit</a>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                                @endrole
                            @endif
                        </td>
                        
                    </tr>
                @endforeach    
                </tbody>
            </table>
            </div>
        </div>
    </div>
    
    <div class="col-lg-12 mb-30">
        <div class="portlet-box">
            <div class="portlet-header flex-row flex d-flex align-items-center">
                <div class="flex d-flex flex-column">
                    <h2>Permissions</h2> 
                    <span>Can be give to a role, or an individual user</span>
                </div>
            </div>
            <div class="portlet-body no-padding">
              <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Guard</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Roles</th>
                </tr>
                </thead>
                <tbody>
                @foreach($permissions as $permission)
                    <tr class="table-active">
                        <th scope="row">{{ $permission->id }}</th>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->guard_name }}</td>
                        <td>{{ $permission->created_at }}</td>
                        <td>{{ $permission->updated_at }}</td>
                        <td>{{ $permission->roles()->pluck('name') }}</td>
                    </tr>
                @endforeach    
                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>
</div>
    


@endsection