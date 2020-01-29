@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @guest
                        You're here as a visitor!
                    @endguest

                    @auth
                        You are logged in!
                        @elseauth
                            You're not logged in!
                    @endauth

                    @ifSylvian
                        COUCOU CONNARD
                    @endifSylvian

                    @if(\Auth::check())
                            You're logged in as {{ Auth::user()->name }}!
                        @else
                            You're not logged in!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
