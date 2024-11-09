@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Perfil de Usuario</h1>
    <p><strong>Nombre:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Fecha de Creación:</strong> {{ $user->created_at }}</p>
    <p><strong>Última Actualización:</strong> {{ $user->updated_at }}</p>
</div>
@endsection