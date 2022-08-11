@extends('auth.layout.auth')

@section('content')
    <div class="container-fluid p-0">
        <div class="row min-height-100vh p-0 m-0">
            <div class="col-md-6 col-lg-5 col-xl-4 d-flex align-items-center">
                <div class="p-lg-5 w-100">
                    <h1 class="mb-3">Register</h1>
                    <form method="POST" action="{{ route('register') }}" class="mx-auto form-validate">
                        @csrf
                        @include('app.layout.common.alerts')
                        <div class="form-floating mb-3">
                            {{ Form::text('first_name','',['class' => 'form-control',"required",'placeholder' => "first_name"]) }}
                            {{ Form::label('first_name','First Name') }}
                        </div>
                        <div class="form-floating mb-3">
                            {{ Form::text('last_name','',['class' => 'form-control',"required",'placeholder' => "last_name"]) }}
                            {{ Form::label('last_name','Last Name') }}
                        </div>
                        <div class="form-floating mb-3">
                            {{ Form::email('email','',['class' => 'form-control',"required",'placeholder' => "email"]) }}
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

                        <div class="row align-items-center">
                            <div class="col-xl-6 order-1 order-xl-0">
                                <a href="{{ route('login') }}"
                                   class="btn btn-link small px-0">Already have an account?</a>
                            </div>
                            <div class="text-end col-xl-6 order-0 order-xl-1">
                                <button type="submit" class="btn btn-primary"> Register <i
                                        class="fa fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-md-6 col-lg-7 col-xl-8 d-md-block d-none bg-image register-side-image" >
            </div>
        </div>
    </div>
@endsection
