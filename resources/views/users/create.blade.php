@extends('templates.app')

        {{-- Subheader directives --}}
        @section('head-title', 'Users - Create')

        @section('page-icon')<i class="icon-Home"></i> @endsection

        @section('title')<h3>Create User</h3> @endsection

        @section('breadcrumbs')
            <li class="breadcrumb-item"><a href="/"><i class="icon-Home mr-2 fs14"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
            <li class="breadcrumb-item active">Create New</li>
        @endsection

        {{-- End subheader --}}

@section('page-content')

<!-- content goes here -->
<div class="container-fluid">
    <div class='col-lg-4 col-lg-offset-4'>

        <h1><i class='fa fa-user-plus'></i> Add User</h1>
        <hr>

        {{ Form::open(array('url' => 'users')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', '', array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', '', array('class' => 'form-control')) }}
        </div>

        <div class='form-group'>
            @foreach ($roles as $role)
                {{ Form::checkbox('roles[]',  $role->id ) }}
                {{ Form::label($role->name, ucfirst($role->name)) }}<br>

            @endforeach
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password') }}<br>
            {{ Form::password('password', array('class' => 'form-control')) }}

        </div>

        <div class="form-group">
            {{ Form::label('password', 'Confirm Password') }}<br>
            {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

        </div>

        {{ Form::submit('Add', array('class' => 'btn btn-primary')) }} <a href="/users"><button class="btn btn-danger">Cancel</button></a>

        {{ Form::close() }}
        

    </div>
</div>


@endsection