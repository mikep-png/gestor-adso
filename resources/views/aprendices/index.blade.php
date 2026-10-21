
@extends('layouts.app')

@section('title', 'Aprendices')

@section('content')
    <h1>Listado de aprendices</h1>

    @if (session('ok'))
        <p>{{ session('ok') }}</p>
    @endif

    <p>
        <a href="{{ route('aprendices.create') }}">+ Nuevo aprendiz</a>
    </p>

    @if ($aprendices->isEmpty())
        <p>No hay aprendices registrados.</p>
    @else
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Documento</th>
                    <th>Correo</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($aprendices as $aprendiz)
                    <tr>
                        <td>{{ $aprendiz->id }}</td>
                        <td>{{ $aprendiz->nombre }}</td>
                        <td>{{ $aprendiz->documento }}</td>
                        <td>{{ $aprendiz->correo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
