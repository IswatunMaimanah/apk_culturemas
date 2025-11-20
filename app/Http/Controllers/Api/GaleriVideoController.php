<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GaleriVideo;
use Illuminate\Http\Request;

class GaleriVideoController extends Controller
{
    public function index() { return response()->json(GaleriVideo::all(), 200); }
    public function store(Request $r) { return response()->json(GaleriVideo::create($r->all()), 201); }
    public function show($id) { return response()->json(GaleriVideo::findOrFail($id), 200); }
    public function update(Request $r, $id) {
        $d = GaleriVideo::findOrFail($id);
        $d->update($r->all());
        return response()->json($d, 200);
    }
    public function destroy($id) {
        GaleriVideo::destroy($id);
        return response()->json(['message'=>'Video dihapus'], 200);
    }
}
