@extends('layouts.layout')

@section('titrePage')
    Stats des {{ $teamSeasonStat->Name }}
@endsection

@section('contenu')
<div class="card mb-3 text-white bg-dark" style="max-width: 540px;">
  <div class="row g-0">
    <div class="card-body">
    <h5 class="card-title">{{ 'Statistiques des '.($teamSeasonStat->Name) }}</h5>
    <p class="card-text">Victoires : {{$teamSeasonStat->Wins}}</p>
    <p class="card-text">Défaites : {{$teamSeasonStat->Losses}}</p>
    <p class="card-text">Assists : {{$teamSeasonStat->Assists}}</p>
    <p class="card-text">Steals : {{$teamSeasonStat->Steals}}</p>
    <p class="card-text">BlockedShots : {{$teamSeasonStat->BlockedShots}}</p>
    <p class="card-text">Turnovers : {{$teamSeasonStat->Turnovers}}</p>
    <p class="card-text">PersonalFouls : {{$teamSeasonStat->PersonalFouls}}</p>
    <p class="card-text">Points : {{$teamSeasonStat->Points}}</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
@endsection