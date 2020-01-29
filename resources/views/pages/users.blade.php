@extends('layouts.app-1')

@section('title', 'Liste des Utilisateurs')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Liste des Utilisateurs</h1>
            <div>
                <ul>
                    @foreach($users as $user)
                        <li>
                            {{ $user->name }} ({{ $user->email }})
                        </li>
                    @endforeach
                    {{ $users->links() }}
                </ul>
            </div>
        </div>
    </div>
@endsection
