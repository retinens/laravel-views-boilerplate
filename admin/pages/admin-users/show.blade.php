@extends('admin.layout.admin')
@section('breadcrumbs')
    <li class="breadcrumb-item">
        <a href="{{ route('admin.admin-users.index') }}">Utilisateurs CMS</a>
    </li>
    <li class="breadcrumb-item active">{{ $adminUser->full_name }}</li>
@stop
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
                <span>
                    {{$adminUser->title}}
                </span>
                <span>
                    Nom : {{$adminUser->last_name}}
                </span>
                <span>
                    Prénom : {{$adminUser->first_name}}
                </span>
                <span>
                    Adresse mail : {{$adminUser->email}}
                </span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body">
                <form action="{{ route('admin.admin-users.reset-password',$adminUser) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">Réinitialiser le mot de passe</button>
                </form>
            </div>
        </div>
    </div>
@stop
