@extends('templates.app')

        {{-- Subheader directives --}}
        @section('head-title', 'Roles - Edit')

        @section('page-icon')<i class="icon-Home"></i> @endsection

        @section('title')<h3>Edit Permission</h3> @endsection

        @section('breadcrumbs')
            <li class="breadcrumb-item"><a href="/"><i class="icon-Home mr-2 fs14"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
            <li class="breadcrumb-item active">Edit</li>
        @endsection

        {{-- End subheader --}}

@section('page-content')

<!-- content goes here -->

<div class="container-fluid">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif
    
    <h1><i class='fa fa-plus'></i> Edit Role - {{ $role->name }}</h1>
    <div class='col-lg-4 col-lg-offset-4'>

        
        <hr>


        {{-- Form model binding --}}
        {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PATCH')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>
        
        <div class='form-group'>
            @foreach ($permission as $value)
                {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                {{ Form::label($value->name, ucfirst($value->name)) }}<br>
            @endforeach
        </div>

        {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>

@endsection