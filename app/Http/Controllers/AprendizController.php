<?php

namespace App\Http\Controllers;

use App\Models\Aprendiz;
use Illuminate\Http\Request;

class AprendizController extends Controller
{
    public function index()
    {
        $aprendices = Aprendiz::paginate(10);

        return view('aprendices.index', compact('aprendices'));
    }

    public function create()
    {
        return view('aprendices.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:120'],
            'documento' => ['required', 'string', 'max:40', 'unique:aprendices,documento'],
            'correo' => ['required', 'email', 'max:120', 'unique:aprendices,correo'],
        ]);

        Aprendiz::create($request->only([
            'nombre',
            'documento',
            'correo',
        ]));

        return redirect()
            ->route('aprendices.index')
            ->with('ok', 'Aprendiz creado correctamente');
    }

    public function show($id)
    {
        abort(404);
    }

    public function edit($id)
    {
        abort(404);
    }

    public function update(Request $request, $id)
    {
        abort(404);
    }

    public function destroy($id)
    {
        abort(404);
    }
}
