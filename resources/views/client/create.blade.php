@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1 class="m-0 text-dark">Nuevo cliente</h1>
@stop

@section('content')

    <div class="row">
    
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('client.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="">Nombres</label>
                                <input type="text" name="first_name" class="form-control">
                                @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col-6">
                                <label for="">Apellidos</label>
                                <input type="text" name="last_name" class="form-control">
                                @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-4">
                                <label for="">Telefono</label>
                                <input type="text" name="phone" class="form-control">
                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col-4">
                                <label for="">Correo electrónico</label>
                                <input type="email" name="email" class="form-control">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col-4">
                                <label for="">RFC</label>
                                <input type="text" name="rfc" class="form-control">
                                @error('rfc') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <input type="submit" value="Guardar" class="btn btn-primary col-12">
                            </div>
                        </div>
                    </form> 
                </div>

                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

            </div>
        </div>
    </div>
    
@stop
