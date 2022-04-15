@extends('auth.layout.auth')

@section('content')
    <div class="d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class=" card shadow py-5 col-md-8">
                    <div class="card-body">
                        <h1 class="h2 ">{{ __('Reset Password') }}</h1>
                        @if (session('status'))
                            <div class="alert alert-success mb-0 mt-3" role="alert">
                                {{ session('status') }}
                            </div>
                        @else
                            <p class="mb-0">Merci de saisir votre email pour recevoir votre lien de réinitialisation dans votre messagerie.</p>
                            <form method="POST" action="{{ route('password.email') }}" class="form-validate">
                                @csrf
                                <div class="form-group">
                                    <label for="email" class=""></label>

                                    <div class="">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               name="email" placeholder="votre@email.com" value="{{ old('email') }}" required autocomplete="email"
                                               autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-0 mt-4">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">
                                            Valider
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
