@extends('templates.app')

        {{-- Subheader directives --}}
        @section('head-title', 'Test')

        @section('page-icon')<i class="icon-Home"></i> @endsection

        @section('title')<h3>Welcome <strong>{{ Auth::user()->name }}</strong></h3> @endsection

        @section('breadcrumbs')
            <li class="breadcrumb-item"><a href="/"><i class="icon-Home mr-2 fs14"></i></a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        @endsection

        {{-- End subheader --}}

@section('page-content')

<!-- content goes here -->

@endsection