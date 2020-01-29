@extends('layouts.app-1')

@section('title', 'Liste des développeurs')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Liste des développeurs</h1>
            <div>
                <ul>
                    @foreach($developpers as $dev)
                        <li>
                            Jeux développer par {{ $dev->name }} :
                            <ul>
                                @foreach($dev->games as $game)
                                    <li>
                                        <a href="{{ route('game_details', ['game_id' => $game->id]) }}">{{ $game->name }}</a>
                                        disponible sur {{ $game->platforms->pluck('name')->implode(', ') }}
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
