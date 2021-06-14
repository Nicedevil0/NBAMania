@extends('layouts.layout')

@section('contenu')
<br>
<div class="container">
<div class="row card text-white bg-dark">
<h4 class="card-header">Ajouter un joueur</h4>
<div class="card-body">
    <form action="{{ route('players.store') }}" method="POST">
        @csrf
        <br>
        <div class="form-group">
        <input type="text" class="form-control @error('FirstName') is-invalid @enderror" name="FirstName" id="FirstName" placeholder="Prénom du joueur">
        @error('FirstName')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <br>
        <div class="form-group">
        <input type="text" class="form-control @error('LastName') is-invalid @enderror" name="LastName" id="LastName" placeholder="Nom du joueur">
        @error('LastName')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <br>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="Status" value="Active" id="Status1" checked>
                <label class="form-check-label" for="Status1">Actif</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="Status" value="Inactive" id="Status2">
                <label class="form-check-label" for="Status2">Inactif</label>
            </div>
        <br>
        <div class="form-group">
            <select class="form-select" aria-label="Equipe" name="team_id" id="team_id">
                @foreach($teams as $team)
                <option value="{{ $team->id }}">{{ ($team->City).' '.($team->Name) }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <select class="form-select" aria-label="Position" name="Position" id="Position">
                <option value="SG">Shooting Guard</option>
                <option value="SF">Small Forward</option>
                <option value="PF">Power Forward</option>
                <option value="C">Center</option>
                <option value="PG">Point Guard</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <input type="number" class="form-control @error('Height') is-invalid @enderror" name="Height" id="Height" placeholder="Taille du joueur">
            @error('Height')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <input type="number" class="form-control @error('Weight') is-invalid @enderror" name="Weight" id="Weight" placeholder="Poids du joueur">
            @error('Weight')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <input type="text" class="form-control @error('BirthDate') is-invalid @enderror" name="BirthDate" id="BirthDate" placeholder="Date de naissance du joueur">
            @error('BirthDate')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <button type="submit" class="btn btn-secondary">-> Envoyer -></button>
    </form>
@endsection