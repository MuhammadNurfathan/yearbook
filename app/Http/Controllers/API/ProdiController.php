<?php

namespace App\Http\Controllers\API;

use App\Models\ProdiModels;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdiController extends Controller
{

    public function index()
    {
        $prodi = ProdiModels::all();
        return response()->json($prodi);
    }

     public function show($id)
    {
        $prodi = ProdiModels::with('mahasiswa')->findOrFail($id);
        return response()->json($prodi);
    }
}
