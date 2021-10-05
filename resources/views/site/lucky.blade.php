@extends('layouts.app')


@section('content')
    <section id="lucky"
             style="width: 100%;height: auto;background: url({{ asset('img/pikachu.jpg') }}) center / cover no-repeat;padding-top: 15%; padding-bottom: 15%">
        <div class="container">
            <h1 class="text-center text-dark bg-light rounded">Try to catch 1 pokemon every 2 hours</h1>
{{--            <div style='display: block' class='myModal modal is-valid' tabindex='-1'></div>--}}
{{--            <div class=' myModal modal-dialog'>--}}
{{--                <div class='modal-content'>--}}
{{--                    <div class='modal-header'>--}}
{{--                        <h5 class='text-center modal-title'>WIN</h5>--}}
{{--                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>--}}
{{--                    </div>--}}
{{--                    <div class='modal-body row container'>--}}
{{--                        <p class='text-center'>You receive</p>--}}
{{--                        <img class='text-center modal-header col-4' src='' alt='Card image pokemon'/>--}}
{{--                        <p class='modal-dialog col-4'>$name</p>--}}
{{--                    </div>--}}
{{--                    <div class='modal-footer'>--}}
{{--                        <a class='btn btn-primary' href='/pokedex'>My Pokedex</a>--}}
{{--                        <a class='btn btn-danger' href='/lucky'>close</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
                <div id='modalLucky' style='display: block' class='myModal modal is-valid' tabindex='-1'>
                    <div class='myModal modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title'>come back later</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <div class='modal-body'>
                                <p> {{$error}} </p>
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary ' data-bs-dismiss='modal'>Close</button>
                            </div>
                        </div>
                    </div>
                </div>

        <form class="w-50 h-50" method="post"
              style="padding-top: 5%;  display: block; margin-left: auto; margin-right: auto; ">
            @csrf
            <input name="pokemon" data-toggle="tooltip" data-placement="top" title="Click on me" type="image"
                   src="{{ asset('img/pokeball.png') }}" alt="Submit" width="100%" height="100%">
        </form>
        </div>
    </section>
@endsection
