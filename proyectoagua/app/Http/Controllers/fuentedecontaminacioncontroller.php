<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblfuentedecontaminacion;

class FuenteDeContaminacionController extends Controller
{
    public function index()
    {
        $fuentes = tblfuentedecontaminacion::all();
        return view('fuentedecontaminacion.index', compact('fuentes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required|string|max:1000',
        ]);

        tblfuentedecontaminacion::create([
            'tipo' => $request->tipo,
        ]);

        return redirect()->route('fuentedecontaminacion.index');
    }
}
