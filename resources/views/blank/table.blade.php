@extends('templates.app')

{{-- Subheader directives --}}

@section('head-title', 'Test')

@section('page-icon')
    <i class="icon-Home"></i>
@endsection

@section('title')
    <h3>Welcome <strong>{{ Auth::user()->name }}</strong></h3>
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="index.html"><i class="icon-Home mr-2 fs14"></i></a></li>
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

{{-- End subheader --}}

@section('page-content')

<!-- content goes here -->

<div class="container-fluid">
<div class="row">
    <div class="col-lg-12 mb-30">
        <div class="portlet-box">
            <div class="portlet-header flex-row flex d-flex align-items-center">
                <div class="flex d-flex flex-column"> 
                    <h2>Table Title</h2>
                    <span>Subtitle Line</span>
                </div>
            </div>
            <div class="portlet-body no-padding">
              <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th>#</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
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
</div>
</div>

@endsection