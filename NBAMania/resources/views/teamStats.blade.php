@extends('layouts.layout')

@section('titrePage')
    Les stats des équipes
@endsection

@section('contenu')
<table class="table table-dark table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Equipe</th>
      <th scope="col">Assists</th>
      <th scope="col">Steals</th>
      <th scope="col">BlockedShots</th>
      <th scope="col">Turnovers</th>
      <th scope="col">PersonalFouls</th>
      <th scope="col">Points</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($stats as $stat)
    <tr>
      <th scope="row">{{ $stat->id }}</th>
      <td>{{ $stat->Name }}</td>
      <td>{{ $stat->Assists }}</td>
      <td>{{ $stat->Steals }}</td>
      <td>{{ $stat->BlockedShots }}</td>
      <td>{{ $stat->Turnovers }}</td>
      <td>{{ $stat->PersonalFouls }}</td>
      <td>{{ $stat->Points }}</td>
      <td><a class="btn btn-primary" href="{{ route('teamstats.show', $stat->id) }}">Voir</a></td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection