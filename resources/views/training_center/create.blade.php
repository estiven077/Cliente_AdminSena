@extends('layouts.app')

@section('content')
    
    <h1>Formulario Registrar Centro de Formación</h1>
    
    <form action="{{ route('training_center.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>

        <br><br>

        <label>
            Ubicación:
            <br>
            <input type="text" name="location">
        </label>

        <br><br>

        <div class="mb-3">
            <label class="form-label">Imagen</label>
            <br>
            <input type="file" name="imagen" class="form-control" accept="image/*">
        </div>

        <br>

        <button type="submit">Enviar Formulario</button>

    </form>

@endsection