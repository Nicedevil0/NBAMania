@extends('layouts.layout')

@section('titrePage')
    {{ $team->Name }}
@endsection

@section('contenu')
<div class="card mb-3 text-white bg-dark" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ $team->WikipediaLogoUrl }}" class="img-fluid mx-auto my-auto d-block" style="width:100%;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ '#'.($team->id).' '.($team->City).' '.($team->Name) }}</h5>
        <p class="card-text">Abréviation : {{$team->Key}}</p>
        <p class="card-text">Ville : {{$team->City}}</p>
        <p class="card-text">Nom : {{$team->Name}}</p>
        <p class="card-text">Nom complet : {{($team->City).' '.($team->Name)}}</p>
        <p class="card-text">ID de ligue : {{$team->LeagueID}}</p>
        <p class="card-text">ID de stade : {{$team->StadiumID}}</p>
        <p class="card-text">Conférence : {{$team->Conference}}</p>
        <p class="card-text">Division : {{$team->Division}}</p>
        <p class="card-text">Couleurs : {{ ($team->PrimaryColor).' et '.($team->SecondaryColor)}}</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Statistiques de cette saison
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
     {{ $standing->City }}
  </div>
</div>
@endsection