<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/a39aa234fd.js" crossorigin="anonymous"></script>
        <title>@yield('titrePage')</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/index') }}">
                    <img src="images/logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
                    NBAMania
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('teams.index') }}">Equipes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('players.index') }}">Joueurs</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Statistiques
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Stats des équipes</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Stats des joueurs</a></li>
                            </ul>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mx-auto my-4" style="width:80%">
        @yield('contenu')
        </div>
        <footer class="bg-dark text-center text-white">
            <div class="container p-4 pb-0">
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/nba" role="button">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/nba" role="button">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com/search?q=nba&rlz=1C1CHBF_frFR919FR919&ei=IQa1YPnRK56H1fAP_4-WkAM&gs_ssp=eJzj4tDP1TcwzSqrMGD0Ys5LSgQAIikESg&oq=NB&gs_lcp=Cgdnd3Mtd2l6EAEYADINCC4QsQMQgwEQQxCTAjIKCAAQsQMQgwEQQzIKCAAQsQMQgwEQQzIKCAAQsQMQgwEQQzIKCAAQsQMQgwEQQzIECAAQQzIICAAQsQMQgwEyBAgAEEMyCAguELEDEIMBMggIABCxAxCDAToECC4QQzoFCAAQsQNQvRhYjytg_jhoAXACeACAAWOIAeACkgEBNJgBAKABAaoBB2d3cy13aXrAAQE&sclient=gws-wiz" role="button">
                        <i class="fab fa-google"></i>
                    </a>
                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/explore/tags/nba/?hl=fr" role="button">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/company/national-basketball-association/?originalSubdomain=fr" role="button">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/Nicedevil0" role="button">
                        <i class="fab fa-github"></i>
                    </a>
                </section>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 3AInfo - 2020
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>