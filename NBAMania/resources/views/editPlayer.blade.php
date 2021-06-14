@extends('layouts.layout')

@section('contenu')
<br>
<div class="container">
<div class="row card text-white bg-dark">
<h4 class="card-header">Modifier un joueur</h4>
<div class="card-body">
    <form action="{{ route('players.update',$player->id) }}" method="POST">
        @csrf
        @method('put')
        <br>
        <div class="form-group">
        <input type="text" class="form-control @error('FirstName') is-invalid @enderror" name="FirstName" id="FirstName" value="{{ old('FirstName', $player->FirstName) }}" placeholder="Prénom du joueur">
        @error('FirstName')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <br>
        <div class="form-group">
        <input type="text" class="form-control @error('LastName') is-invalid @enderror" name="LastName" id="LastName" value="{{ old('LastName', $player->LastName) }}" placeholder="Nom du joueur">
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
                    @if($team->id == old('team_id', $player->team_id))
                        <option value="{{ $team->id }}" selected>{{ ($team->City).' '.($team->Name) }}</option>
                    @else
                        <option value="{{ $team->id }}">{{ ($team->City).' '.($team->Name) }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <select class="form-select" aria-label="Position" name="Position" id="Position">
                <option value="SG" 
                    @if('SG' == old('Position', $player->Position))
                        selected
                    @endif
                >Shooting Guard</option>
                <option value="SF" 
                    @if('SF' == old('Position', $player->Position))
                        selected
                    @endif
                >Small Forward</option>
                <option value="PF" 
                @if('PF' == old('Position', $player->Position))
                    selected
                @endif
                >Power Forward</option>
                <option value="C" 
                @if('C' == old('Position', $player->Position))
                    selected
                @endif
                >Center</option>
                <option value="PG" 
                @if('PG' == old('Position', $player->Position))
                    selected
                @endif
                >Point Guard</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <input type="number" class="form-control @error('Height') is-invalid @enderror" name="Height" id="Height" value="{{ old('Height', $player->Height) }}" placeholder="Taille du joueur">
            @error('Height')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <input type="number" class="form-control @error('Weight') is-invalid @enderror" name="Weight" id="Weight" value="{{ old('Weight', $player->Weight) }}" placeholder="Poids du joueur">
            @error('Weight')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <input type="text" class="form-control @error('BirthDate') is-invalid @enderror" name="BirthDate" id="BirthDate" value="{{ old('BirthDate', $player->BirthDate) }}" placeholder="Date de naissance du joueur">
            @error('BirthDate')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <button type="submit" class="btn btn-secondary">-> Envoyer -></button>
    </form>
@endsection