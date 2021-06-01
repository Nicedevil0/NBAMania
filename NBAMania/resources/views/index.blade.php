@extends('layouts.layout')

@section('titrePage')
    NBA Mania
@endsection

@section('contenu')
<div class="text-center mb-4">
    <h1>Bienvenue sur NBA Mania !</h1>
</div>
<div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="https://www.beinsports.com/france/nba/?gr=www">
                <img src="images/nbacom.jpg" class="d-block mx-auto">
                <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0,0,0,0.9);">
                    <h5>Site officiel de la NBA</h5>
                </div>
            </a>
        </div>
        <div class="carousel-item">
            <a href="{{ route('teams.index') }}">
                <img src="images/teams.jpg" class="d-block mx-auto">
                <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0,0,0,0.9);">
                    <h5>Les équipes</h5>
                    <p>Venez voir les équipes de notre base de donnée.</p>
                </div>
            </a>
        </div>
        <div class="carousel-item">
            <a href="https://www.beinsports.com/france/nba/?gr=www">
                <img src="images/players.jpg" class="d-block mx-auto">
                <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0,0,0,0.9);">
                    <h5>Les joueurs</h5>
                    <p>Venez voir les équipes de notre base de donnée.</p>
                </div>
            </a>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
    </button>
</div>
@endsection