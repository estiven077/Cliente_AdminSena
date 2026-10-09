@extends('layouts.app')

@section('content')
<!-- CSS mínimo y al grano solo para el movimiento al pasar el mouse -->
<style>
    .hover-move {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-move:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15) !important;
    }
</style>

<div class="container-fluid px-4 py-3">

    <!-- Encabezado principal -->
    <div class="text-center my-4">
        <span class="badge bg-success bg-opacity-10 text-success fw-bold px-3 py-2 rounded-pill mb-2">
            Plataforma Institucional
        </span>
        <h1 class="display-5 fw-bold text-dark">
            Sistema de Administración SENA
        </h1>
        <p class="text-muted fs-6">Gestión integral de la formación profesional y recursos académicos</p>
    </div>

    <!-- =================== CARRUSEL =================== -->
    <div id="carouselExampleCaptions" class="carousel slide mb-5 shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel">
        <div class="carousel-indicators mb-3">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="{{ asset('img/img1.jpg') }}" class="d-block w-100 object-fit-cover" style="height: 480px;" alt="Bienvenido">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded-3 p-4 mb-3 shadow">
                    <h5 class="fw-bold fs-4 text-success">Bienvenido</h5>
                    <p class="mb-0 text-light opacity-75">Sistema de Administración SENA.</p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="{{ asset('img/img2.jpg') }}" class="d-block w-100 object-fit-cover" style="height: 480px;" alt="Cursos">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded-3 p-4 mb-3 shadow">
                    <h5 class="fw-bold fs-4 text-success">Cursos</h5>
                    <p class="mb-0 text-light opacity-75">Consulta todos los cursos.</p>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="{{ asset('img/img3.jpg') }}" class="d-block w-100 object-fit-cover" style="height: 480px;" alt="Aprendices">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded-3 p-4 mb-3 shadow">
                    <h5 class="fw-bold fs-4 text-success">Aprendices</h5>
                    <p class="mb-0 text-light opacity-75">Administra aprendices e instructores.</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon rounded-circle bg-dark p-3" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon rounded-circle bg-dark p-3" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- =================== SECCIÓN: QUIÉNES SOMOS =================== -->
    <div id="quienes-somos" class="my-5 py-2">
        <h2 class="text-center fw-bold text-success display-6 mb-4">¿Quiénes Somos?</h2>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow p-4 p-md-5 rounded-4 bg-white hover-move">
                    <div class="card-body text-center">
                        <h3 class="fw-bold mb-3 text-dark">
                            Sistema de Administración SENA
                        </h3>

                        <div class="row justify-content-center mb-4">
                            <div class="col-md-9">
                                <p class="text-secondary fs-6 mb-3">
                                    Admin SENA es un sistema diseñado para facilitar la
                                    administración y organización de la información
                                    relacionada con la formación del SENA.
                                </p>
                                <p class="text-secondary fs-6">
                                    Nuestro sistema permite gestionar de manera sencilla
                                    aprendices, instructores, cursos, áreas, centros de
                                    formación y computadores, manteniendo la información
                                    organizada y accesible.
                                </p>
                            </div>
                        </div>

                        <!-- Tres características principales -->
                        <div class="row g-4 mt-2">
                            <div class="col-md-4">
                                <div class="p-4 rounded-4 bg-light border-0 h-100 shadow-sm hover-move">
                                    <i class="fas fa-users text-success fa-2x mb-3"></i>
                                    <h5 class="fw-bold text-dark">Aprendices</h5>
                                    <p class="text-muted small mb-0">
                                        Administración de la información de los aprendices.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="p-4 rounded-4 bg-light border-0 h-100 shadow-sm hover-move">
                                    <i class="fas fa-chalkboard-teacher text-success fa-2x mb-3"></i>
                                    <h5 class="fw-bold text-dark">Instructores</h5>
                                    <p class="text-muted small mb-0">
                                        Gestión de instructores y su información relacionada.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="p-4 rounded-4 bg-light border-0 h-100 shadow-sm hover-move">
                                    <i class="fas fa-book text-success fa-2x mb-3"></i>
                                    <h5 class="fw-bold text-dark">Formación</h5>
                                    <p class="text-muted small mb-0">
                                        Gestión de cursos, áreas y centros de formación.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> 
            </div>
        </div>
    </div>

    <!-- =================== SECCIÓN: MÓDULOS DE ADMINISTRACIÓN SENA =================== -->
    <div class="my-5 py-2">
        <h2 class="text-center fw-bold text-success display-6 mb-4">Módulos de Gestión</h2>

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <!-- Módulo 1: Cursos Disponibles -->
            <div class="col">
                <div class="card h-100 shadow border-0 rounded-4 overflow-hidden hover-move">
                    <img src="{{ asset('img/anuncio1.jpg') }}" class="card-img-top" alt="Cursos" style="height: 220px; object-fit: cover;">
                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="card-title fw-bold text-dark mb-2">Cursos Disponibles</h5>
                        <p class="card-text text-secondary small flex-grow-1">
                            Consulta la lista completa de programas de formación y cursos ofertados en el sistema SENA.
                        </p>
                        <a href="{{ route('course.index') }}" class="btn btn-outline-success mt-3 w-100 fw-bold rounded-pill">
                            Gestionar Cursos <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Módulo 2: Registro de Aprendices -->
            <div class="col">
                <div class="card h-100 shadow border-0 rounded-4 overflow-hidden hover-move">
                    <img src="{{ asset('img/anuncio2.jpg') }}" class="card-img-top" alt="Aprendices" style="height: 220px; object-fit: cover;">
                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="card-title fw-bold text-dark mb-2">Gestión de Aprendices</h5>
                        <p class="card-text text-secondary small flex-grow-1">
                            Administra la información personal, fichas de caracterización y registro de los aprendices.
                        </p>
                        <a href="{{ route('apprentice.index') }}" class="btn btn-outline-success mt-3 w-100 fw-bold rounded-pill">
                            Gestionar Aprendices <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Módulo 3: Instructores -->
            <div class="col">
                <div class="card h-100 shadow border-0 rounded-4 overflow-hidden hover-move">
                    <img src="{{ asset('img/anuncio3.jpg') }}" class="card-img-top" alt="Instructores" style="height: 220px; object-fit: cover;">
                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="card-title fw-bold text-dark mb-2">Gestión de Instructores</h5>
                        <p class="card-text text-secondary small flex-grow-1">
                            Consulta y gestiona el cuerpo docente, áreas asignadas e información de contacto.
                        </p>
                        <a href="{{ route('teacher.index') }}" class="btn btn-outline-success mt-3 w-100 fw-bold rounded-pill">
                            Gestionar Instructores <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <hr class="my-5 opacity-25">

    <!-- =================== SECCIÓN: MISIÓN Y VISIÓN =================== -->
    <div class="row g-4 mb-5">
        <!-- Misión -->
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm p-4 rounded-4 bg-white border-start border-success border-4 hover-move">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-bullseye text-success fa-2x me-3"></i>
                        <h3 class="card-title mb-0 fw-bold text-dark">Misión</h3>
                    </div>
                    <p class="card-text text-secondary small">
                        El SENA está encargado de cumplir la función que le corresponde al Estado de invertir en el desarrollo social y técnico de los trabajadores colombianos, ofreciendo y ejecutando la formación profesional integral, para la incorporación y el desarrollo de las personas en actividades productivas que contribuyan al desarrollo social, económico y tecnológico del país.
                    </p>
                </div>
            </div>
        </div>

        <!-- Visión -->
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm p-4 rounded-4 bg-white border-start border-success border-4 hover-move">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-eye text-success fa-2x me-3"></i>
                        <h3 class="card-title mb-0 fw-bold text-dark">Visión</h3>
                    </div>
                    <p class="card-text text-secondary small">
                        Consolidar al SENA como una entidad de formación de clase mundial, con un modelo educativo innovador y tecnológico, que responda de manera oportuna y pertinente a los desafíos del sector productivo nacional y global, potenciando el talento humano de la región.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5 opacity-25">

    <!-- =================== SECCIÓN: CONTÁCTANOS =================== -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 col-lg-7">
            <div class="card shadow border-0 p-4 p-md-5 rounded-4 bg-white hover-move">
                <div class="text-center mb-4">
                    <h3 class="fw-bold text-dark mb-1">Contáctanos</h3>
                    <p class="text-muted small">Escríbenos tu sugerencia o inquietud sobre el sistema</p>
                </div>

                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-semibold small text-secondary">Nombre Completo</label>
                            <input type="text" class="form-control rounded-3 py-2" id="name" placeholder="Ej. Juan Pérez" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label fw-semibold small text-secondary">Correo Electrónico</label>
                            <input type="email" class="form-control rounded-3 py-2" id="email" placeholder="nombre@correo.com" required>
                        </div>
                        <div class="col-12">
                            <label for="subject" class="form-label fw-semibold small text-secondary">Asunto</label>
                            <input type="text" class="form-control rounded-3 py-2" id="subject" placeholder="Asunto del mensaje" required>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label fw-semibold small text-secondary">Mensaje o Sugerencia</label>
                            <textarea class="form-control rounded-3" id="message" rows="4" placeholder="Escribe aquí tu consulta..." required></textarea>
                        </div>
                        <div class="col-12 text-center mt-4">
                            <button type="submit" class="btn btn-success px-5 py-2 fw-bold rounded-pill shadow-sm hover-move">
                                Enviar Mensaje <i class="fas fa-paper-plane ms-1"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection