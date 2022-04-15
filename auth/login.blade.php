@extends('auth.layout.auth')
@section('content')
    <div class="d-lg-flex align-items-center pt-5" >
        <div class="container  pt-lg-0">
            <div class="row justify-content-center ">
                <div class="col-md-8 px-0">
                    <div class="card-group">
                        <div class="card p-lg-4 ">
                            <div class="card-body">
                                <h1>Connectez-vous à votre compte</h1>
                                @include('admin.layout.alerts')
                                <form method="POST" action="{{ route('login') }}" class="form-validate my-4">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="email" class="col-lg-2 col-form-label">{{__('Email')}}</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="email" type="email" name="email" required placeholder="adresse@email.com">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="password" class="col-lg-2 col-form-label">{{__('Password')}}</label>
                                        <div class="col-lg-10">
                                            <div class="input-group" id="show_hide_password">
                                                <label for="password" class="sr-only">{{__('Password')}}</label>
                                                <div class="input-group">
                                                    <input style="margin-left: 1px" class="form-control rounded" id="password" type="password" required name="password" placeholder="Entrez votre mot de passe">
                                                    <a href="" class="input-group-text py-2"><i class="fa fa-eye-slash" id="password-icon" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col-md-6 offset-lg-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <button class="btn btn-primary btn-block px-4" type="submit">{{ __('Login') }}</button>
                                        </div>
                                        <div class="col-12 text-center mt-4">
                                            <a href="{{ route('password.request') }}" class="px-0" type="button">Vous avez oublié votre mot de passe&nbsp;?</a>
                                            -
                                            <a href="{{ route('register') }}" class="px-0" type="button">Créer un compte</a>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
