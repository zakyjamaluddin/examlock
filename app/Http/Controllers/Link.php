<?php

namespace App\Http\Controllers;

use App\Models\Link as ModelsLink;
use Illuminate\Http\Request;

class Link extends Controller
{
    public function index()
    {
        $link = ModelsLink::first();
        return response()->json(['link' => $link->url]);
    }
}
