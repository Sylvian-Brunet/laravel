@extends('layouts.app-1')

@section('title', 'détails d\'un jeu')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $game->name }}</h1>
            <div>
                <p>
                    Développé par {{ $game->developper->name }} <br>
                    Disponible sur {{ $game->platforms->pluck('name')->implode(', ') }}
                </p>
            </div>
        </div>
    </div>
@endsection
