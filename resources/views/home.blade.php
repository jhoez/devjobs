@extends('layouts.main')

@section('titulopagina')
    Principal
@endsection

@section('titulo')
    Pagina principal
@endsection

@section('contenido')


<div class="container mx-auto text-center">
    <p>pagina home.</p>
    <p>{{'Usuario logeado: '.auth()->user()->username}}</p>
</div>

@endsection