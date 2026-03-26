@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Editar usuario</h1>

    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
       

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" 
                   name="nombre" 
                   class="form-control @error('nombre') is-invalid @enderror" 
                   value="{{ old('nombre', $usuario->nombre) }}" 
                   required>
            @error('nombre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" 
                   name="email" 
                   class="form-control @error('email') is-invalid @enderror" 
                   value="{{ old('email', $usuario->email) }}" 
                   required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Actualizar Cambios</button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection