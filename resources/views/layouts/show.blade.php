@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h1>Detalles del Usuario</h1>
        </div>
        <div class="card-body">
            {{-- Mostramos el ID ya que existe en tu migración --}}
            <div class="mb-3">
                <label class="form-label **fw-bold**">ID de Registro:</label>
                <p class="form-control-plaintext">{{ $usuario->id }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label **fw-bold**">Nombre Completo:</label>
                <p class="form-control-plaintext border-bottom">{{ $usuario->nombre }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label **fw-bold**">Correo Electrónico:</label>
                <p class="form-control-plaintext border-bottom">{{ $usuario->email }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label **fw-bold**">Fecha de Registro:</label>
                {{-- Usamos timestamps que definiste en la migración --}}
                <p class="form-control-plaintext text-muted">
                    {{ $usuario->created_at->format('d/m/Y H:i') }}
                </p>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Volver al listado</a>
            {{-- Opcional: Un botón para ir a la edición si lo necesitas --}}
            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning">Editar Datos</a>
        </div>
    </div>
</div>
@endsection