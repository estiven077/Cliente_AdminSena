@extends('layouts.app')

@section('content')
    <h1>Actualizar Centro de Formación</h1>
    <br>

    <form action="{{ route('training_center.update', $training_center['id']) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $training_center['name']) }}">
        </label>
        <br><br>

        <label>
            Ubicación:
            <br>
            <input type="text" name="location" value="{{ old('location', $training_center['location']) }}">
        </label>
        <br><br>

        <div class="mb-3">
            <label class="form-label">Imagen Actual:</label>
            <br>
            @if(isset($training_center['imagen_url']))
                <img src="{{ $training_center['imagen_url'] }}" alt="{{ $training_center['name'] }}" width="80" height="80" style="object-fit: cover; border-radius: 4px; margin-bottom: 10px;">
            @else
                <p>No tiene imagen registrada</p>
            @endif
            <br>
            <label class="form-label">Cambiar Imagen:</label>
            <br>
            <input type="file" name="imagen" class="form-control" accept="image/*">
        </div>
        <br>

        <button type="submit">Actualizar Centro de Formación</button>
        <br>
        <br>

        <a href="{{ route('training_center.index') }}" class="btn btn-success mb-3">
            <i class="bi bi-arrow-left"></i> Volver
        </a>

    </form>
@endsection