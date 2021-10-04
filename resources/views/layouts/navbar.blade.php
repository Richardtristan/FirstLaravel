
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
    <div class="container"><a class="navbar-brand" href="/">phpapi</a>
        <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                class="fa fa-bars"></i></button>
        @auth
            <form class="nav-item mx-0 mx-lg-1"  id="logout-form" action="{{ route('logout') }}" method="POST"> @csrf <button style="font-weight: bold; !important; " class="text-white text-uppercase btn-danger border-0 nav-link py-3 px-0 px-lg-3 rounded font-weight-bold" type="submit">Logout</button> </form>
        @endauth
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/ladder">Ladder</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="https://github.com/Richardtristan" target="_blank">Contact</a></li>

                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/register">New Account</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/login">Log In</a></li>
                @endguest

                @auth

                    <li class="nav-item dropdown">
                        <li class="nav-item dropdown">
                            <a style="padding: 16px;" class="nav-link dropdown-toggle padd" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profil
                            </a>
                            <ul class="dropdown-menu btn-secondary" aria-labelledby="navbarScrollingDropdown">
                                <li style="font-weight: bold; !important; " class="nav-item mx-0 mx-lg-1"><a class="nav-link  py-3 px-0 px-lg-3 rounded" href="/authentification">Double Authentification</a></li>
                            </ul>
                        </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/pokedex">My Pokedex</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/lucky">Lucky</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/ladder">Ladder</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="https://github.com/Richardtristan" target="_blank">Contact</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>


