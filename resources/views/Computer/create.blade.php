@extends('layouts.app')

@section('content')
    
    <h1>Formulario Registrar Computador</h1>
    
    <!-- 1. Agregamos enctype="multipart/form-data" para permitir envío de archivos -->
    <form action="{{ route('computer.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Numero:
            <br>
            <input type="text" name="number">
        </label>
        <br><br>

        <label>
            Marca:
            <br>
            <input type="text" name="brand">
        </label>
        <br><br>

        <!-- 2. Agregamos el input para subir la foto (el name debe ser 'urlFoto') -->
        <label>
            Foto del Computador:
            <br>
            <input type="file" name="urlFoto">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>

    </form>

@endsection