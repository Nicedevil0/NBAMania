@extends('layouts.layout')

@section('titrePage')
    NBA Mania
@endsection

@section('contenu')
<div class="text-center mb-4">
    <h1>Bienvenue sur NBA Mania !</h1>
</div>
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://www.fiba.basketball/api/img/graphic/c5132053-5932-4af1-9e9b-8597ed500e94/940/529" class="d-block mx-auto img-fluid">
            <div class="carousel-caption d-none d-md-block">
                <h5>Les équipes</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://www.fiba.basketball/api/img/graphic/c5132053-5932-4af1-9e9b-8597ed500e94/940/529" class="d-block mx-auto img-fluid">
            <div class="carousel-caption d-none d-md-block">
                <h5>Les joueurs</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://www.fiba.basketball/api/img/graphic/c5132053-5932-4af1-9e9b-8597ed500e94/940/529" class="d-block mx-auto">
             <div class="carousel-caption d-none d-md-block">
                <h5>Les statistiques</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
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