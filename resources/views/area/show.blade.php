@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="card shadow-lg border-0">

        <!-- Encabezado con Verde SENA -->
        <div class="card-header text-white" style="background-color: #16780c;">
            <h3 class="mb-0">{{ $area['name'] }}</h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID</label>
                    <div class="form-control">
                        {{ $area['id'] }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Nombre</label>
                    <div class="form-control">
                        {{ $area['name'] }}
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <label class="fw-bold">Imagen</label>
                    <div class="mt-2">
                        @if(isset($area['imagen_url']))
                            <img src="{{ $area['imagen_url'] }}" alt="{{ $area['name'] }}" width="150" height="150" style="object-fit: cover; border-radius: 8px; border: 1px solid #ddd;">
                        @else
                            <p class="text-muted">No disponible</p>
                        @endif
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">

                <div class="col-md-6">
                    <label class="fw-bold">Fecha de creación</label>
                    <div class="form-control">
                        {{ \Carbon\Carbon::parse($area['created_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="fw-bold">Última actualización</label>
                    <div class="form-control">
                        {{ \Carbon\Carbon::parse($area['updated_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-4">

        <a href="{{ route('areas.index') }}" class="btn text-white" style="background-color: #16780c; border-color: #16780c;">
            <i class="bi bi-arrow-left"></i> Volver 
        </a>

    </div>
    <br>

</div>
@endsection