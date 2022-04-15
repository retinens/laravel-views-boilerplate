@extends('admin.layout.admin')

@section('breadcrumbs')
    <li class="breadcrumb-item">
        <a href="{{ route('admin.admin-users.index') }}">Utilisateurs admin</a>
    </li>
    <li class="breadcrumb-item active">Modifier un utilisateur</li>
@stop
@section('content')
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.admin-users.update',$adminUser) }}" class="form-validate" method="post">
                            @csrf
                            @method("PATCH")
                            @include('admin.pages.admin-users._partials._form')
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Enregistrer les modifications</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

