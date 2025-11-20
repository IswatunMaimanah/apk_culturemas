<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Edukasi;
use Illuminate\Http\Request;

class EdukasiController extends Controller
{
    // tampilkan semua data edukasi
    public function index()
    {
        return response()->json(Edukasi::all(), 200);
    }

    // tambah data edukasi
    public function store(Request $request)
    {
        $data = Edukasi::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'id_user' => $request->id_user,
            'tanggal_dibuat' => now()
        ]);

        return response()->json($data, 201);
    }

    // tampilkan satu data
    public function show($id)
    {
        return response()->json(Edukasi::findOrFail($id), 200);
    }

    // update data
    public function update(Request $request, $id)
    {
        $data = Edukasi::findOrFail($id);
        $data->update($request->all());

        return response()->json($data, 200);
    }

    // hapus data
    public function destroy($id)
    {
        Edukasi::destroy($id);

        return response()->json(['message' => 'Data berhasil dihapus'], 200);
    }
}
