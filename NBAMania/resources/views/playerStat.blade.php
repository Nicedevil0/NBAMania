@extends('layouts.layout')

@section('titrePage')
@endsection

@section('contenu')
<div class="card mb-3 text-white bg-dark" style="max-width: 540px;">
  <div class="row g-0">
    <div class="card-body">
    <h5 class="card-title">Statistiques de {{$playerSeasonStat->Name}}</h5>
    <p class="card-text">Victoires : {{$playerSeasonStat->Wins}}</p>
    <p class="card-text">Défaites : {{$playerSeasonStat->Losses}}</p>
    <p class="card-text">Assists : {{$playerSeasonStat->Assists}}</p>
    <p class="card-text">Steals : {{$playerSeasonStat->Steals}}</p>
    <p class="card-text">BlockedShots : {{$playerSeasonStat->BlockedShots}}</p>
    <p class="card-text">Turnovers : {{$playerSeasonStat->Turnovers}}</p>
    <p class="card-text">PersonalFouls : {{$playerSeasonStat->PersonalFouls}}</p>
    <p class="card-text">Points : {{$playerSeasonStat->Points}}</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
@endsection