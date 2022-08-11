@extends('auth.layout.auth')

@section('content')
    <div class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class=" card col-md-8">
                    <div class="card-body">
                        <h1>{{ __('Reset Password') }}</h1>
                        <form method="POST" action="{{ route('password.update') }}" class="form-validate">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-floating mb-3">
                                {{ Form::email('email',$email ?? '',['class' => 'form-control',"required",'placeholder' => "email"]) }}
                                {{ Form::label('email','Email') }}
                            </div>
                            <div class="form-floating mb-3">
                                {{ Form::password('password',['class' => 'form-control',"required","autocomplete" =>"new-password",'placeholder' => "password"]) }}
                                {{ Form::label('password','Password') }}
                            </div>
                            <div class="form-floating mb-3">
                                {{ Form::password('password_confirmation',['class' => 'form-control',"required","autocomplete" =>"new-password",'placeholder' => "password_confirmation"]) }}
                                {{ Form::label('password_confirmation','Password confirmation') }}
                            </div>
                            <div class="text-end">

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
