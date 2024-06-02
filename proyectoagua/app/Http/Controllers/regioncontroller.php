<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblregion;

class RegionController extends Controller
{
    public function index()
    {
        $regions = tblregion::all();
        return view('region.index', compact('regions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        tblregion::create([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('region.index');
    }
}
