@extends('layouts.layout')

@section('titrePage')
    Les joueurs
@endsection

@section('contenu')
<table class="table table-dark table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Equipe</th>
      <th scope="col">Poste</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($players as $player)
    <tr>
      <th scope="row">{{ $player->id }}</th>
      <td>{{ $player->LastName }}</td>
      <td>{{ $player->FirstName }}</td>
      <td>{{ $player->Team }}</td>
      <td>{{ $player->Position }}</td>
      <td><a class="btn btn-primary" href="{{ route('players.show', $player->id) }}">Voir</a></td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection