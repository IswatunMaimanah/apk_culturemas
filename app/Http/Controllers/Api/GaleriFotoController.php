<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GaleriFoto;
use Illuminate\Http\Request;

class GaleriFotoController extends Controller
{
    public function index() {
        return response()->json(GaleriFoto::all(), 200);
    }

    public function store(Request $request) {
        $data = GaleriFoto::create($request->all());
        return response()->json($data, 201);
    }

    public function show($id) {
        return response()->json(GaleriFoto::findOrFail($id), 200);
    }

    public function update(Request $request, $id) {
        $data = GaleriFoto::findOrFail($id);
        $data->update($request->all());
        return response()->json($data, 200);
    }

    public function destroy($id) {
        GaleriFoto::destroy($id);
        return response()->json(['message' => 'Foto dihapus'], 200);
    }
}
