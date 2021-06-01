@extends('layouts.layout')

@section('titrePage')
  {{ ($player->FirstName).' '.($player->LastName) }}
@endsection

@section('contenu')
<div class="card mb-3 text-white bg-dark" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ $player->PhotoUrl }}" class="img-fluid mx-auto my-auto d-block" style="width:100%;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ '#'.($player->id).' '.($player->FirstName).' '.($player->LastName) }}</h5>
        <p class="card-text">Statut : {{$player->Status}}</p>
        <p class="card-text">Equipe : {{$player->Team}}</p>
        <p class="card-text">Poste : {{$player->Position}}</p>
        <p class="card-text">Taille : {{$player->Height}}</p>
        <p class="card-text">Poids : {{$player->Weight}}</p>
        <p class="card-text">Date de naissance : {{substr($player->BirthDate,0,10)}}</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
@endsection