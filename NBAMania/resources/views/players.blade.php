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
      <th></th>
      <th><a class="btn btn-success" href="{{ route('players.create') }}">Nouveau joueur</a></th>
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
      <td><a class="btn btn-warning" href="{{ route('players.edit', $player->id) }}">Modifier</a></td>
      <td>
        <form action="{{ route('players.destroy', $player->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Supprimer</button>
        </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection