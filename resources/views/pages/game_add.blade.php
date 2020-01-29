@extends('layouts.app-1')

@section('title', 'Ajouter un jeu')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Ajouter un jeu : </h2>
            <form action="{{ route('game_add_post') }}" method="post">
                @csrf
                @if ($errors->has('name'))
                    <small style="color: red">{{ $errors->first('name') }}</small>
                @endif
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend"><div class="input-group-text">Nom du jeu : </div></div>
                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                </div>
                @if ($errors->has('pegi'))
                    <small style="color: red">{{ $errors->first('pegi') }}</small>
                @endif
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend"><div class="input-group-text">PEGI : </div></div>
                    <input type="text" name="pegi" class="form-control" id="pegi" value="{{ old('pegi') }}">
                </div>
                @if ($errors->has('developper_id'))
                    <small style="color: red">{{ $errors->first('developper_id') }}</small>
                @endif
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend"><div class="input-group-text">Développeur : </div></div>
                    <select class="form-control" name="developper_id">
                        <option value="">--</option>
                        @foreach($developpers as $dev)
                            <option value="{{$dev->id}}" @if(old('developper_id') == $dev->id) selected @endif>
                                {{ $dev->name }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <div class="form-check">
                    <input class="form-check-input" name="physical_release" type="checkbox" id="physical_release" value="1">
                    <label class="form-check-label" for="physical_release">
                        Sortie Physique
                    </label>
                </div>
                <input type="submit" value="Ajouter" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
