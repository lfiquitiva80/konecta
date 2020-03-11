@extends('master')
@section('content')

Bienvenido <strong>{{ auth()->user()->name }}</strong>, su perfil es @if(Auth::user()->perfil_id == 1) <strong>Administrador</strong> @else <strong>Vendedor </strong>@endif


@endsection