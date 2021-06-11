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
        @if($stadium != null)
          <p class="card-text">Stade : {{$stadium->Name}}</p>
        @endif
        @if($team->Conference != null)
          <p class="card-text">Conférence : {{$team->Conference}}</p>
        @endif
        @if($team->Division != null)
          <p class="card-text">Division : {{$team->Division}}</p>
        @endif
        @if($team->PrimaryColor != null)
          <p class="card-text">Couleurs : {{ ($team->PrimaryColor).' et '.($team->SecondaryColor)}}</p>
        @endif
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
@foreach($standings as $standing)
<div class="card mb-3 text-white bg-dark" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ $team->WikipediaLogoUrl }}" class="img-fluid mx-auto my-auto d-block" style="width:100%;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Les standings des {{$team->Name}}</h5>
        <p class="card-text">Saison : {{$standing->id}}</p>
        <p class="card-text">Victoires : {{$standing->Wins}}</p>
        <p class="card-text">Défaites : {{$standing->Losses}}</p>
        <p class="card-text">Pourcentage de victoires : {{$standing->Percentage}}</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
@endforeach
<div class="card mb-3 text-white bg-dark" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ $team->WikipediaLogoUrl }}" class="img-fluid mx-auto my-auto d-block" style="width:100%;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">L'effectif des {{$team->Name}}</h5>
        <table class="table table-dark table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Prénom</th>
              <th scope="col">Nom</th>
              <th scope="col">Poste</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
          @foreach($players as $player)
            <tr>
              <th scope="row">{{ $player->id }}</th>
              <td>{{ $player->FirstName }}</td>
              <td>{{ $player->LastName }}</td>
              <td>{{ $player->Position }}</td>
              <td><a class="btn btn-primary" href="{{ route('players.show', $player->id) }}">Voir</a></td>
            </tr>
          @endforeach
          </tbody>
        </table>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
@endsection