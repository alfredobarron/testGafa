@extends('layout')

@section('content')
    <div class="title m-b-md">
        Perfil
    </div>

    <div class="links">
        <form action="{{route('perfil.save')}}" method="post">
            @csrf
            <div class="form-group row">
                <label for="perfil--name">Nombre</label>
                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="perfil--name" type="text" name="name" value="{{$user->profile->name}}"/>
                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group row">
                <label for="perfil--phone">Teléfono</label>
                <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" id="perfil--phone" type="text" name="phone" value="{{$user->profile->phone}}"/>
                @if ($errors->has('phone'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group row mb-0">
                <input class="btn btn-primary btn-block" type="submit" value="Salvar"/>
            </div>
        </form>
    </div>
@endsection
