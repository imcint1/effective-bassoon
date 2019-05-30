@extends('templates.app')

        {{-- Subheader directives --}}
        @section('head-title', 'Test')

        @section('page-icon')<i class="icon-Home"></i> @endsection

        @section('title')<h3>Edit User</h3> @endsection

        @section('breadcrumbs')
            <li class="breadcrumb-item"><a href="/"><i class="icon-Home mr-2 fs14"></i></a></li>
            <li class="breadcrumb-item"><a href="/users">Users</a></li>
            <li class="breadcrumb-item active">Edit User</li>
        @endsection

        {{-- End subheader --}}

@section('page-content')

<!-- content goes here -->
<div class='col-lg-4 col-lg-offset-4'>
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

    <h1><i class='fa fa-user-plus'></i> Edit {{$user->name()}}</h1>
    <hr>

    {{-- Form model binding to automatically populate our fields with user data --}}
    {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PATCH')) }}
    
    <div class="form-group">
        {{ Form::label('first_name', 'First Name') }}
        {{ Form::text('first_name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('last_name', 'Last Name') }}
        {{ Form::text('last_name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    <h5><b>Give Role</b></h5>

    <div class='form-group'>
        @foreach ($roles as $role)
            {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
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

    {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection