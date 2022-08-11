@extends('auth.layout.auth')

@section('content')
    <div class="container-fluid p-0">
        <div class="row min-height-100vh p-0 m-0">
            <div class="col-md-6 col-lg-5 col-xl-4 p-0 d-flex align-items-center">
                <div class="p-lg-5 p-0 w-100">
                    <div class="p-3 bg-white">
                        <h1 class="mb-2">Login</h1>
                        @include('app.layout.common.alerts')
                        <form method="POST" action="{{ route('login') }}" class="form-validate">
                            @csrf
                            <div class="form-floating mb-3">
                                {{ Form::email('email','',['class' => 'form-control',"required",'placeholder' => 'email']) }}
                                {{ Form::label('email',"Email") }}
                            </div>
                            <div class="form-floating mb-3">
                                {{ Form::password('password',['class' => 'form-control',"required",'placeholder' => 'password']) }}
                                {{ Form::label('password',"Password") }}
                            </div>

                            <div class="row align-items-center">
                                <div class="col-xxl-6">
                                    <button class="btn btn-primary px-4" type="submit">Login <i
                                            class="fa fa-arrow-right ms-2"></i></button>
                                </div>
                                <div class="col-xxl-6 text-xxl-end">
                                    <a href="{{ route('password.request') }}" class="btn btn-link px-0">Forgot your
                                        password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-7 col-xl-8 d-md-block d-none bg-image login-side-image">
            </div>
        </div>
    </div>
@endsection
