@extends('auth.layout.app')

@section('content')
    <div class="container-fluid p-0">
        <div class="row min-height-100vh p-0 m-0">
            <div class="col-xxl-4 col-lg-6 col-md-6 d-flex align-items-center">
                <div class="p-4" style="position:absolute;top: 0;left: 0;">
                    <a href="{{ route('home') }}"><i class="fa fa-arrow-left me-2"></i>{{ trans("base.back") }}</a>
                </div>
                <div class="p-0 p-md-5 w-100">
                    <h1>MaFacturation</h1>
                    <p class="text-muted">{{ trans("auth.register-title") }}</p>
                    <form method="POST" action="{{ route('register') }}" class="mx-auto form-validate">
                        @csrf
                        @include('app.layout.common.alerts')
                        <div class="form-floating mb-3">
                            {{ Form::text('first_name','',['class' => 'form-control',"required"]) }}
                            {{ Form::label('first_name',ucfirst(trans('validation.attributes.first_name'))) }}
                        </div>
                        <div class="form-floating mb-3">
                            {{ Form::text('last_name','',['class' => 'form-control',"required"]) }}
                            {{ Form::label('last_name',ucfirst(trans('validation.attributes.last_name'))) }}
                        </div>
                        <div class="form-floating mb-3">
                            {{ Form::email('email','',['class' => 'form-control',"required"]) }}
                            {{ Form::label('email',ucfirst(trans('validation.attributes.email'))) }}
                        </div>
                        <div class="form-floating mb-3">
                            {{ Form::password('password',['class' => 'form-control',"required","autocomplete" =>"new-password"]) }}
                            {{ Form::label('password',ucfirst(trans('validation.attributes.password'))) }}
                        </div>
                        <div class="form-floating mb-3">
                            {{ Form::password('password_confirmation',['class' => 'form-control',"required","autocomplete" =>"new-password"]) }}
                            {{ Form::label('password_confirmation',ucfirst(trans('validation.attributes.password_confirmation'))) }}
                        </div>

                        <div class="row">
                            <div class="col-lg-6 order-1 order-lg-0">
                                <a href="{{ route('login') }}"
                                   class="btn btn-link px-0">{{ trans("auth.account-btn") }}</a>
                            </div>
                            <div class="text-lg-end col-lg-6 order-0 order-lg-1">
                                <button type="submit" class="btn btn-primary"> {{ trans("auth.register-btn") }} <i
                                        class="fa fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xxl-8 col-md-6 d-none d-md-block bg-image"
                 style="background-image:url('/images/website/auth/register.jpg.webp');"></div>
        </div>
    </div>
@endsection
