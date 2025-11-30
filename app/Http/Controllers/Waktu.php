<?php

namespace App\Http\Controllers;

use App\Models\Waktu as ModelsWaktu;
use Illuminate\Http\Request;

class Waktu extends Controller
{
    public function index()
    {
        $waktu = ModelsWaktu::all();
        return response()->json(['waktu' => $waktu]);
    }


}
