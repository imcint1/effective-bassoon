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
                    <h2>User Roles</h2>
                    <span>A concise description of the contents</span>
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
                        <td>{{ $role->permissions()->pluck('name') }}</td>
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
                        <td></td>
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