@extends('layouts.app')

@section('content')
    <h1>Actualizar Area</h1>
    <br>

    <form action="{{ route('areas.update', $area['id']) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('put')
        
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $area['name']) }}">
        </label>
        <br><br>

        <div class="mb-3">
            <label class="form-label">Imagen actual:</label>
            <br>
            @if(isset($area['imagen_url']))
                <img src="{{ $area['imagen_url'] }}" alt="{{ $area['name'] }}" width="80" height="80" style="object-fit: cover; border-radius: 4px; margin-bottom: 10px;">
            @endif
            <br>
            <label class="form-label">Cambiar Imagen</label>
            <input type="file" name="imagen" class="form-control" accept="image/*">
        </div>
        <br>
        
        <button type="submit">Actualizar Area</button>
        <br><br>
        <a href="{{ route('areas.index') }}" class="btn btn-success mb-3">
            <i class="bi bi-arrow-left"></i> Volver </a>

    </form>
@endsection