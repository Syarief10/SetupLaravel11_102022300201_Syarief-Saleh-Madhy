<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{
    public function index()
    {
        $mobils = Mobil::all();
        return response()->json($mobils);
    }

    public function store(Request $request)
    {
        $mobil = Mobil::create([
            'nama' => $request->nama,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
        ]);

        return response()->json([
            'message' => 'Mobil berhasil ditambahkan!',
            'data' => $mobil
        ]);
    }

    public function show($id)
    {
        $mobil = Mobil::findOrFail($id);
        return response()->json($mobil);
    }

    public function update(Request $request, $id)
    {
        $mobil = Mobil::findOrFail($id);
        $mobil->update($request->all());

        return response()->json([
            'message' => 'Data mobil berhasil diperbarui!',
            'data' => $mobil
        ]);
    }

    public function tampilkanView()
    {
    $mobils = Mobil::all();
    return view('mobil', compact('mobils'));
    }


    public function destroy($id)
    {
        $mobil = Mobil::findOrFail($id);
        $mobil->delete();

        return response()->json([
            'message' => 'Mobil berhasil dihapus.'
        ]);
    }
}