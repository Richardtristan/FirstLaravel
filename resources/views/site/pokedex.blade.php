@extends('layouts.app')


@section('content')
    <body style="height: 100% !important;" id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav"
          data-bs-offset="72">

    <section id="pokedex" style="width: 100%; height: 100%; background-color: #FE5858">
        <h2 class="text-uppercase text-center text-white mb-0" style="padding: 0px;margin: 40px;"><br><strong>My
                pokedex</strong><br><br></h2>
        <div class="container" style="padding-top: 5%">


            <div class="row g-2 mx-auto p-12 w-100" style="width: 100%">
                <div  class="col-sm-6 col-md-4 col-xl-4 ">
                    <div class="card bg-secondary "
                         style="margin-left: auto; margin-right: auto;">
                        <div class="text-center text-white ">
                            Number: </div>
                        <div class="row">
                            <img id=""  style="margin-left: auto; margin-right: auto; width: auto ; height: 50%"
                                 class="imgHover card-text col-1 "
                                 src="" alt="Card image pokemon"
                                 data-shiny=""
                                 data-default=""/>

                            <div style="margin-left: auto; margin-right: auto; padding-top: 5%" class=" nameHovercard-text col-6 text-center text-white"> time(s) catch</div>

                            <div data-name="" class="nameHover card-text col-6 text-white" style="margin-left: auto; margin-right: auto;padding-left: 0"></div>
                        </div>
                        <div class=" row justify-content-around">


                            <div style=" margin: 4% !important;"
                                 class="card-text col-auto text-white "></div>

                        </div>
                        <hr  style=" width: 80%; background-color: black">
                        <div class=" row justify-content-around text-white">


                            <div class=" typoAbility card-text col-auto pb-2"></div>
                        </div>
                    </div>
                </div>
                <div class="card text-center" style="margin-left: auto; margin-right: auto;">
                    <img class="card-img-top" src="{{ asset('/img/pikachu-pleure.gif') }}"
                         style="width: 25%; height: auto; margin-left: auto; margin-right: auto !important;"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">Pokedex empty </h5>
                        <p class="card-text text-center">You dont have any Pokemons.</p>
                        <a href="/lucky" class=" btn btn-primary text-center">Go test your chance</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    </body>
@endsection
