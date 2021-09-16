<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sliderprincipal;

class SliderprincipalController extends Controller
{
    public function index()
    {
        $sliderprincipal = Sliderprincipal::all();
        return view('index', ['sliderprincipal' => $sliderprincipal]);
    }
}
