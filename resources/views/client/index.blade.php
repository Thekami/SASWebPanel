@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1 class="m-0 text-dark">Clientes</h1>
@stop

@section('content')
    {{-- <livewire:client.index/> --}}
    @livewire('client.index')
@stop
