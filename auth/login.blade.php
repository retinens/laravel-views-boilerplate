@extends('auth.layout.auth')

@section('content')
    <div class="container-fluid p-0">
        <div class="row min-height-100vh p-0 m-0">
            <div class="col-md-6 col-lg-4 d-flex align-items-center">
                <div class="p-md-5 w-100">
                    <h1>Connexion</h1>
                    @include('app.layout.common.alerts')
                    <form method="POST" action="{{ route('login') }}" class="form-validate">
                        @csrf
                        <div class="form-floating mb-3">
                            {{ Form::email('email','',['class' => 'form-control',"required"]) }}
                            {{ Form::label('email',"Email") }}
                        </div>
                        <div class="form-floating mb-3">
                            {{ Form::password('password',['class' => 'form-control',"required"]) }}
                            {{ Form::label('password',"Mot de passe") }}
                        </div>

                        <div class="row">
                            <div class="col-xxl-6 pb-3">
                                <button class="btn btn-primary px-4" type="submit">Login <i class="fa fa-arrow-right ms-2"></i></button>
                            </div>
                            <div class="col-xxl-6 text-xxl-end">
                                <a href="{{ route('password.request') }}" class="btn btn-link p-0">Mot de passe oublié</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-lg-8 d-md-block d-none bg-image" style="background-image:url('/images/website/auth/login.jpg');">
            </div>
        </div>
    </div>
@endsection
