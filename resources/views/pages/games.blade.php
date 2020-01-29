@extends('layouts.app-1')

@section('title', 'Liste de jeux')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Liste des jeux</h1>
            <div>
                <ul>
                    @foreach($games as $game)
                        <li> {{ $game->name }}, <small>edited by {{$game->developper->name}}</small></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
