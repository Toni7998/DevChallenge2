@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="title">Bienvenido, {{ $user->name }}</h1>

    <div class="dashboard">
        <!-- Tarjeta de Información del Usuario -->
        <div class="card user-info">
            <div class="card-header">
                <h5>Información del Usuario</h5>
            </div>
            <div class="card-body text-center">
                <img src="{{ $user->profile_picture }}" alt="Profile Picture" class="profile-pic">
                <h6>Nombre: <strong>{{ $user->name }}</strong></h6>
                <p>Correo: <strong>{{ $user->email }}</strong></p>
                <a href="{{ route('profile.edit') }}" class="btn">Editar Perfil</a>
            </div>
        </div>

        <!-- Tarjeta de Actividades Recientes -->
        <div class="card activities">
            <div class="card-header">
                <h5>Actividades Recientes</h5>
            </div>
            <div class="card-body">
                @if(empty($recentActivities))
                    <p class="text-center">No hay actividades recientes.</p>
                @else
                    <ul class="activity-list">
                        @foreach($recentActivities as $activity)
                            <li class="activity-item">
                                <span>{{ $activity->description }}</span>
                                <span
                                    class="activity-time">{{ \Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</span>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Estilos CSS -->
<style>
    body {
        background-color: #f9f9f9;
        /* Fondo gris claro */
        font-family: 'Arial', sans-serif;
        /* Fuente clara y profesional */
        margin: 0;
        padding: 20px;
    }

    .title {
        text-align: center;
        color: #333;
        margin-bottom: 40px;
    }

    .dashboard {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        /* Espaciado entre las tarjetas */
    }

    .card {
        background-color: #ffffff;
        /* Fondo blanco para las tarjetas */
        border-radius: 8px;
        /* Bordes redondeados */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        /* Sombra suave */
        width: 100%;
        /* Ancho completo */
        transition: box-shadow 0.3s;
    }

    .card:hover {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        /* Sombra más fuerte al pasar el ratón */
    }

    .card-header {
        background-color: #007bff;
        /* Color de fondo para la cabecera */
        color: white;
        /* Color de texto en la cabecera */
        padding: 15px;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .card-body {
        padding: 20px;
    }

    .profile-pic {
        width: 100px;
        /* Ancho de la imagen del perfil */
        height: 100px;
        /* Alto de la imagen del perfil */
        border-radius: 50%;
        /* Imagen circular */
        margin-bottom: 15px;
        /* Espacio debajo de la imagen */
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        /* Color de fondo del botón */
        color: white;
        /* Color de texto del botón */
        text-decoration: none;
        border-radius: 5px;
        /* Bordes redondeados del botón */
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #0056b3;
        /* Color más oscuro al pasar el ratón */
    }

    .activity-list {
        list-style: none;
        /* Sin viñetas */
        padding: 0;
        margin: 0;
    }

    .activity-item {
        padding: 10px;
        border-bottom: 1px solid #eee;
        /* Separación entre actividades */
        display: flex;
        justify-content: space-between;
        /* Justificar el contenido */
    }

    .activity-item:last-child {
        border-bottom: none;
        /* Sin borde para el último elemento */
    }

    .activity-time {
        color: #888;
        /* Color gris para la fecha */
        font-size: 0.9em;
        /* Tamaño de fuente más pequeño */
    }
</style>
@endsection