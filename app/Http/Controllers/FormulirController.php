<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function create()
    {
        return view('formulir.create');
    }
}
