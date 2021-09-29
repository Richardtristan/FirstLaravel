@extends('layouts.app')


@section('content')

    <body style="height: 100% !important;" id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav"
          data-bs-offset="72">

    <section id="verify" style="width: 100%;height: auto;background: url({{ asset('img/pikachu.jpg') }}) center / cover no-repeat;padding-top: 15%; padding-bottom: 15%">
        <div class="container">
            <div class="row justify-content-center pt-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Two factor authentication') }}</div>

                        <div class="card-body">
                            <form method="POST" action="/user/two-factor-authentication">
                                @csrf

                                @if (auth()->user()->two_factor_secret)
                                    @method('DElETE')

                                    <div class="pb-5">
                                        {!! auth()->user()->twoFactorQrCodeSvg() !!}
                                    </div>

                                    <div>
                                        <h3>Recovery Codes:</h3>

                                        <ul>
                                            @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes)) as $code)
                                                <li>{{ $code }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <button class="btn btn-danger">Disable</button>
                                @else
                                    <button class="btn btn-primary">Enable</button>
                                @endif
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </body>
@endsection
