@extends('layouts.app')

@section('content')
    <section id="register"
             style="width: 100%;height: auto;background: url({{ asset('img/pikachu.jpg') }}) center / cover no-repeat;padding-top: 15%; padding-bottom: 15%">
        <h1 class="text-uppercase text-center text-white mb-0" style="padding: 0px;margin: 40px;">
            <br><strong>{{__('Register')}}</strong><br><br></h1>
        {{--                                <div style="display: block" class="myModal modal is-valid" tabindex="-1">--}}
        {{--                                    <div class="modal-dialog">--}}
        {{--                                        <div class="modal-content">--}}
        {{--                                            <div class="modal-header">--}}
        {{--                                                <h5 class="modal-title">Thanks</h5>--}}
        {{--                                                <button type="button" class="btn-close" data-bs-dismiss="modal"--}}
        {{--                                                        aria-label="Close"></button>--}}
        {{--                                            </div>--}}
        {{--                                            <div class="modal-body">--}}
        {{--                                                <p>You have registered</p>--}}
        {{--                                            </div>--}}
        {{--                                            <div class="modal-body">An email has been sent to activate your account--}}
        {{--                                            </div>--}}
        {{--                                            <div class="modal-footer">--}}
        {{--                                                <a class="btn btn-primary" href="/login">Log In</a>--}}
        {{--                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">--}}
        {{--                                                    Close--}}
        {{--                                                </button>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card bg-light bg-opacity-10 border-0 rounded">


                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row pt-2">
                                    <label for="name"
                                           class="col-md-4 col-form-label text-md-right ">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row pt-2">
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row pt-2">
                                    <label for="password"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row pt-2">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6 pb-2">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0 ">
                                    <div class="col-md-6 offset-md-4 ">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection




