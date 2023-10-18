<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Lugar;

class lugaresController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        return view('lugares.index', compact('lugares'));
    }

    public function show(lugar $tour)
    {
        return view('lugares.show', compact('lugar'));
    }

    public function create()
    {
        return view('lugares.create');
    }

    public function store(Request $request)
    {
        // Validar y guardar los datos del tour
        // Redireccionar a la vista del tour creado
    }

    public function edit(lugar $lugar)
    {
        return view('lugares.edit', compact('lugar'));
    }

    public function update(Request $request, lugar $tour)
    {
        // Validar y actualizar los datos del tour
        // Redireccionar a la vista del tour actualizado
    }

    public function destroy(lugar $lugar)
    {
        // Eliminar el tour
        // Redireccionar a la lista de tours
    }
}
