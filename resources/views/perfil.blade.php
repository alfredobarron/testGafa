@extends('layout')

@section('content')
    <div class="title m-b-md">
        Perfil
    </div>

    <div class="links">
        <form action="{{route('perfil')}}" method="post">
            <div>
                <label for="perfil--name">Nombre</label>
                <input id="perfil--name" type="text" name="namm" value="{{$user->name or ''}}"/>
            </div>
            <div>
                <label for="perfil--phone">Teléfono</label>
                <input id="perfil--phone" type="text" name="phone" value="{{$user->phonne or ''}}"/>
            </div>
            <div>
                <input type="submit" value="Salvar"/>
            </div>
        </form>
    </div>
@endsection
