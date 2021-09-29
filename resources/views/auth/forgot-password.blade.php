@extends('layouts.app')

@section('content')
    <body style="height: 100% !important;" id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav"
          data-bs-offset="72">

    <section id="forgot" style="width: 100%;height: auto;background: url({{ asset('img/pikachu.jpg') }}) center / cover no-repeat;padding-top: 15%; padding-bottom: 15%">
        <h2 class="text-uppercase text-center text-white pt-3" style="padding: 0px;margin: 40px;">Forgot</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-light bg-opacity-10 border-0 rounded">

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-0 form-group row pt-2">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
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
    </body>
@endsection
