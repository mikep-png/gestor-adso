
@extends('layouts.app')

@section('title', 'Nuevo Aprendiz')

@section('content')
    <h1>Nuevo Aprendiz</h1>

    @if ($errors->any())
        <div style="color: red;">
            <p>Corrige los siguientes errores:</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('aprendices.store') }}" method="POST">
        @csrf

        <label>
            Nombre
            <input name="nombre" value="{{ old('nombre') }}" required>
        </label>
        <br><br>

        <label>
            Documento
            <input name="documento" value="{{ old('documento') }}" required>
        </label>
        <br><br>

        <label>
            Correo
            <input type="email" name="correo" value="{{ old('correo') }}" required>
        </label>
        <br><br>

        <button type="submit">Guardar</button>
    </form>
@endsection
