@extends('admin.layout.admin')
@section('breadcrumbs')
    <li class="breadcrumb-item">
        <a href="{{ route('admin.admin-users.index') }}">Utilisateurs admin</a>
    </li>
    <li class="breadcrumb-item active">{{ $user->full_name }}</li>
@stop
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
            </div>
        </div>
    </div>
@stop
