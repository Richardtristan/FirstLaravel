@include ('auth/header')
<body style="height: 100% !important;" id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
    <div class="container"><a class="navbar-brand" href="/login">phpapi</a>
        <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/ladder">Ladder</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="https://github.com/Richardtristan" target="_blank">Contact</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/register">New Account</a></li>
            </ul>
        </div>
    </div>
</nav>
<section id="login"
         style="width: 100%;height: auto;background: url(/../img/pikachu.jpg) center / cover no-repeat;padding-top: 15%; padding-bottom: 15%">
    <h2 class="text-uppercase text-center text-white pt-3" style="padding: 0px;margin: 40px;">Login</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <section>
                    <form method="post">
                        <h2 class="visually-hidden">Login Form</h2>
                        <div class="mb-3"><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="background: rgb(255,236,236);">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="mb-3"><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="background: rgb(255,236,236);border-color: rgb(255,236,236);">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary d-block text-black w-100" type="submit">Log In</button>
                            <a class=" pt-2 not-already" href="/register">You don't have an account? Create here.</a>
                        </div>
                    </form>

                </section>
            </div>
        </div>
    </div>
</section>
<footer style="bottom: 0;width: 100%;" class="text-center footer">
    <div style="padding-bottom: 5%" class="container ">
        <div class="row">
            <div class="col">
                <h4 class="text-uppercase">github</h4><a
                    class="btn btn-outline-light text-center btn-social rounded-circle" role="button"
                    href="https://github.com/Richardtristan" target="_blank"><i
                        class="fab fa-github"></i></a>
            </div>
        </div>
    </div>

    <div class="text-center text-white copyright py-4">
        <div class="container"><small>Copyright © Tristan RICHARD 2021</small></div>
        <div style="font-size: 10px; padding: 2%" class="container">Vos données personnelles sont conservées pour une
            durée maximale de 3 ans. En application de la loi Informatique et Libertés du 6 janvier 1978 modifiée par la
            loi du 9 août 2004 et du Règlement Général sur la Protection des Données, entrée en vigueur le 25 mai 2018,
            vous disposez d’un droit d’accès, de rectification, de modification et de suppression concernant les données
            qui vous concernent. Vous pouvez contacter le responsable pour exercer ce droit : richard.tristan.93@gmail.com. Nous mettons tout en oeuvre pour protéger vos données personnelles et empêcher
            leur diffusion. Néanmoins, si un piratage venait à entraîner une fuite de données, le responsable des
            données s’engage à prévenir toutes personnes victime d’une violation de ses données à caractère personnel.
            Parallèlement, une notification documentée de cette violation sera également adressée à la CNIL dans un
            délai maximum de 72 heures après sa découverte.</div>
    </div>
</footer>

</body>


</html>





