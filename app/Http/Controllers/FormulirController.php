<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class FormulirController extends Controller
{
    public function create()
    {
        $user = Auth::User();

        return view(
            'formulir.create',
            ['user' => $user]
        );
    }
    public function info()
    {
        return view(
            'formulir.info',
            
        );
    }
}
