@extends('layout')

@section('content')
    <div class="title m-b-md">
        Laravel
    </div>

    <div class="links">
        <a href="{{route('perfil')}}">Perfil</a>
        <a href="{{route('lorem')}}">Lorem</a>
        <a href="{{route('clientes')}}">Clientes</a>
    </div>
@endsection
