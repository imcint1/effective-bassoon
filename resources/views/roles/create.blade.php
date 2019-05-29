@extends('templates.app')

        {{-- Subheader directives --}}
        @section('head-title', 'Roles - Create')

        @section('page-icon')<i class="icon-Home"></i> @endsection

        @section('title')<h3>Create Permission</h3> @endsection

        @section('breadcrumbs')
            <li class="breadcrumb-item"><a href="/"><i class="icon-Home mr-2 fs14"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
            <li class="breadcrumb-item active">Create</li>
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
    <div class='col-lg-4 col-lg-offset-4'>

        <h1><i class='fa fa-plus'></i> Create Role</h1>
        <hr>


        {{ Form::open(array('url' => 'roles')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', '', array('class' => 'form-control')) }}
        </div>
        
        <div class='form-group'>
            @foreach ($permissions as $permission)
                {{ Form::checkbox('permissions[]',  $permission->id, false, array('class' => 'name')) }}
                {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>
            @endforeach
        </div>

        {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>

@endsection