@extends('auth.layout.auth')

@section('content')
    <div class="container-fluid p-0">
        <div class="row min-height-100vh p-0 m-0">
            <div class="col-md-6 col-lg-5 col-xl-4 p-0 d-flex align-items-center">
                <div class="p-lg-5 p-0 w-100">
                    <div class="p-3 bg-white">

                        <h1 class="h2 ">{{ __('Reset Password') }}</h1>
                        @if (session('status'))
                            <div class="alert alert-success mb-0 mt-3" role="alert">
                                {{ session('status') }}
                            </div>
                        @else
                            <p class="">
                                Please enter your email address to reset your password.
                            </p>
                            @include('app.layout.common.alerts')
                            <form method="POST" action="{{ route('password.email') }}" class="form-validate">
                                @csrf
                                <div class="form-floating mb-3">
                                    {{ Form::email('email','',['class' => 'form-control',"required",'placeholder' => "email"]) }}
                                    {{ Form::label('email','Email') }}
                                </div>
                                <button type="submit" class="btn btn-primary w-100">
                                    Reset
                                </button>

                            </form>
                        @endif

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-7 col-xl-8 d-md-block d-none bg-image login-side-image">
            </div>
        </div>
    </div>
@endsection
