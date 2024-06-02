<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblimpactoambiental;

class ImpactoAmbientalController extends Controller
{
    public function index()
    {
        $impactos = tblimpactoambiental::all();
        return view('impactoambiental.index', compact('impactos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo_impacto' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha_registro' => 'required|date',
        ]);

        tblimpactoambiental::create($request->all());

        return redirect()->route('impactoambiental.index');
    }
}
