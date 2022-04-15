@extends('auth.layout.auth')

@section('content')
    <div class="d-lg-flex align-items-center pt-5 hero-login" style="">
        <div class="container  pt-lg-0">
            <div class="row justify-content-center ">
                <div class="col-md-8 px-0">
                    <div class="card-group">
                        <div class="card p-lg-4 ">
                            <div class="card-body">
                                <h1>Créer votre compte</h1>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label for="first_name" class="col-md-4 col-form-label text-md-right">Prénom*</label>

                                        <div class="col-md-6">
                                            <input id="first_name" type="text"
                                                   class="form-control @error('first_name') is-invalid @enderror"
                                                   name="first_name" value="{{ old('first_name') }}" required
                                                   autocomplete="first_name" placeholder="Prénom">

                                            @error('first_name')
                                            <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="last_name" class="col-md-4 col-form-label text-md-right">Nom*</label>

                                        <div class="col-md-6">
                                            <input id="last_name" type="text"
                                                   class="form-control @error('last_name') is-invalid @enderror"
                                                   name="last_name" value="{{ old('last_name') }}"placeholder="Nom" required autofocus>

                                            @error('last_name')
                                            <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="email"
                                               class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}*</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror" name="email"
                                                   value="{{ old('email') }}" placeholder="adresse@email.com" required autocomplete="email">

                                            @error('email')
                                            <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="password"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Password') }}* <br> <span style="font-size: smaller">Min. 8 caractères, 1 chiffre et 1 lettre</span></label>

                                        <div class="col-md-6">
                                            <div class="input-group" id="show_hide_password">
                                                <label for="password" class="sr-only">{{__('Password')}}</label>
                                                <div class="input-group">

                                                    <input id="password" type="password" style="margin-left: 1px"
                                                           class="form-control rounded @error('password') is-invalid @enderror"
                                                           name="password" placeholder="Entrez votre mot de passe" required autocomplete="new-password">
                                                    <a href="" class="input-group-text py-2"><i class="fa fa-eye-slash" id="password-icon" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <input id="password-confirm" type="password" class="form-control mt-lg-0 mt-3"
                                                   name="password_confirmation" placeholder="Retapez votre mot de passe" required autocomplete="new-password">


                                            @error('password')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row mt-3 mb-0">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary">
                                                Je crée mon compte
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <p class="mt-4 mb-1 small">Les champs suivis d'une (*) sont obligatoires
                                </p>
                                <a href="{{ route("login") }}" class="small">Me connecter à mon compte</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
