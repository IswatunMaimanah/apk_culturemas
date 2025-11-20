<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GaleriDokumen;
use Illuminate\Http\Request;


class GaleriDokumenController extends Controller
{
    public function index() { return response()->json(GaleriDokumen::all(), 200); }
    public function store(Request $r) { return response()->json(GaleriDokumen::create($r->all()), 201); }
    public function show($id) { return response()->json(GaleriDokumen::findOrFail($id), 200); }
    public function update(Request $r, $id) {
        $d = GaleriDokumen::findOrFail($id);
        $d->update($r->all());
        return response()->json($d, 200);
    }
    public function destroy($id) {
        GaleriDokumen::destroy($id);
        return response()->json(['message'=>'Dokumen dihapus'], 200);
    }
}
