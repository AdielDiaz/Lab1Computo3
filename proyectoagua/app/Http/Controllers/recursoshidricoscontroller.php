<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblrecursoshidricos;

class RecursosHidricosController extends Controller
{
    public function index()
    {
        $recursos = tblrecursoshidricos::all();
        return view('recursoshidricos.index', compact('recursos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
            'nivel_contaminacion' => 'required|string|max:255',
        ]);

        tblrecursoshidricos::create($request->all());

        return redirect()->route('recursoshidricos.index');
    }
}
