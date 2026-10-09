@extends('layouts.app')

@section('content')
<h1>Lista de Computadores</h1>
<br>

<div class="container">

    <a href="{{ route('computer.create') }}" class="btn btn-success mb-3">
        <i class="bi bi-plus-circle"></i> Nuevo Computador </a>

    <table id="idComputador" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <!-- 1. Agregamos la columna Foto en el encabezado -->
                <th>Foto</th>
                <th>Number</th>
                <th>Brand</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>

        <tbody> 

            @foreach ($computers as $computer)
            <tr>
                <td>{{ $computer->id }}</td>

                <!-- 2. Agregamos la celda para renderizar la imagen -->
                <td>
                    @if ($computer->urlFoto)
                    <img src="{{ asset('storage/images/' . $computer->urlFoto) }}" alt="Foto Computador" width="60" class="img-thumbnail">
                    @else
                    <span class="badge bg-secondary">Sin foto</span>
                    @endif
                </td>

                <td>{{ $computer->number }}</td>
                <td>{{ $computer->brand }}</td>

                <td>
                    <a href="{{ route('computer.show', $computer->id) }}">Mostrar</a>
                </td>

                <td>
                    <a href="{{ route('computer.edit', $computer->id) }}">Editar</a>
                </td>

                <td>
                    <form action="{{ route('computer.destroy', $computer->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

</div>
@endsection