@extends('layouts.layout')

@section('titrePage')
    Les équipes
@endsection

@section('contenu')
<table class="table table-dark table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ville</th>
      <th scope="col">Nom</th>
      <th scope="col">Conférence</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($teams as $team)
    <tr>
      <th scope="row">{{ $team->id }}</th>
      <td>{{ $team->City }}</td>
      <td>{{ $team->Name }}</td>
      <td>{{ $team->Conference }}</td>
      <td><a class="btn btn-primary" href="{{ route('teams.show', $team->id) }}">Voir</a></td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection