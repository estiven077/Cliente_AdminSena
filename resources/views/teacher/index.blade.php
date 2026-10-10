@extends('layouts.app')

@section('content')

<h1>Lista de Instructores</h1>
<br>

<div class="container">

    <!-- Botón de acción para redirigir al formulario de creación -->
    <a href="{{ route('teacher.create') }}" class="btn btn-success mb-3">
        <i class="bi bi-plus-circle"></i> Nuevo Instructor
    </a>

    <table id="idTeacher" class="table table-striped table-bordered" style="width:100%">

        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Area</th>
                <th>Training Center</th>
                <th>Ficha Técnica</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>

        <tbody> 
            @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher['id'] }}</td>
                <td>{{ $teacher['name'] }}</td>
                <td>{{ $teacher['email'] }}</td>
                <td>{{ $teacher['area']['name'] ?? 'Sin Área' }}</td>
                <td>{{ $teacher['training_center']['name'] ?? $teacher->trainingCenter->name ?? 'Sin Centro' }}</td>

                <td>
                    <!-- Botón Perfil con datos reales del modelo -->
                    <button type="button"
                        class="btn btn-sm text-white btn-perfil"
                        style="background-color: #16780c; border-color: #16780c;"
                        data-id="{{ $teacher['id'] }}"
                        data-name="{{ $teacher['name'] }}"
                        data-email="{{ $teacher['email'] }}"
                        data-area="{{ $teacher['area']['name'] ?? 'Sin Área' }}"
                        data-center="{{ $teacher['training_center']['name'] ?? $teacher['trainingCenter']['name'] ?? 'Sin Centro' }}"
                        data-age="{{ $teacher['age'] ? $teacher['age'] . ' años' : 'Edad no registrada' }}"
                        data-phone="{{ $teacher['phone'] ?? 'No registrado' }}"
                        data-profession="{{ $teacher['profession'] ?? 'No especificada' }}"
                        data-biography="{{ $teacher['biography'] ?? 'Sin información de biografía' }}"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#panelInstructor">
                        <i class="bi bi-person-badge"></i> Perfil
                    </button>
                </td>

                <td>
                    <a href="{{ route('teacher.show', $teacher['id']) }}">Mostrar</a>
                </td>

                <td>
                    <a href="{{ route('teacher.edit', $teacher['id']) }}">Editar</a>
                </td>

                <td>
                    <form action="{{ route('teacher.destroy', $teacher['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Desea eliminar este instructor?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    <br>
</div>

<!-- PANEL OFFCANVAS -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="panelInstructor" style="width: 400px;">

    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title fw-bold">
            <i class="bi bi-person-lines-fill me-2"></i>Perfil del Instructor
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body p-4">

        <div class="text-center mb-4">
            <div class="mx-auto mb-3 d-flex align-items-center justify-content-center rounded-circle fw-bold border" style="width: 70px; height: 70px; font-size: 1.5rem; background-color: #f8f9fa; color: #16780c;" id="panelAvatar">
                --
            </div>
            <h4 class="fw-bold mb-1" id="panelNombre">Nombre Instructor</h4>
            <p class="text-muted small mb-1" id="panelEmail">correo@ejemplo.com</p>
            <p class="small text-muted" id="panelEdad">00 años</p>
        </div>

        <hr>

        <div class="mb-3">
            <label class="fw-bold small text-muted d-block mb-1">CENTRO / SEDE DE FORMACIÓN</label>
            <p class="border p-2 rounded bg-light" id="panelCentro">--</p>
        </div>

        <div class="mb-3">
            <label class="fw-bold small text-muted d-block mb-1">ÁREA TÉCNICA</label>
            <p class="border p-2 rounded bg-light" id="panelArea">--</p>
        </div>

        <div class="mb-3">
            <label class="fw-bold small text-muted d-block mb-1">PROFESIÓN Y TÍTULOS</label>
            <p class="border p-2 rounded bg-light" id="panelProfesion">--</p>
        </div>

        <div class="mb-3">
            <label class="fw-bold small text-muted d-block mb-1">TELÉFONO DE CONTACTO</label>
            <p class="border p-2 rounded bg-light" id="panelTelefono">--</p>
        </div>

        <div class="mb-3">
            <label class="fw-bold small text-muted d-block mb-1">BIOGRAFÍA / PERFIL</label>
            <p class="border p-2 rounded bg-light" id="panelBiografia">--</p>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const botonesPerfil = document.querySelectorAll('.btn-perfil');

        botonesPerfil.forEach(btn => {
            btn.addEventListener('click', function() {
                const {
                    name,
                    email,
                    area,
                    center,
                    age,
                    phone,
                    profession,
                    biography
                } = this.dataset;

                // Genera las iniciales
                const iniciales = name ?
                    name.trim().split(/\s+/).map(n => n[0]).join('').substring(0, 2).toUpperCase() :
                    '--';

                // Asigna los datos a la vista del panel
                document.getElementById('panelAvatar').innerText = iniciales;
                document.getElementById('panelNombre').innerText = name || 'Sin Nombre';
                document.getElementById('panelEmail').innerText = email || 'Sin correo';
                document.getElementById('panelEdad').innerText = age || 'Edad no registrada';

                document.getElementById('panelCentro').innerText = center || 'Sin centro';
                document.getElementById('panelArea').innerText = area || 'Sin área';
                document.getElementById('panelProfesion').innerText = profession || 'No especificada';
                document.getElementById('panelTelefono').innerText = phone || 'No registrado';
                document.getElementById('panelBiografia').innerText = biography || 'Sin biografía';
            });
        });
    });
</script>

@endsection