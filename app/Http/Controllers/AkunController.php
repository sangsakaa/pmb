<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

class AkunController extends Controller
{
    public function index()
    {
        $DataUser = User::all();
        return view('akun.index', ['DataUser' => $DataUser]);
    }
    public function create()
    {
        
        return view('akun.create');
    }
    public function detail(User $user)
    {
        $user = User::find($user->id);
        return view('akun.detail', ['user' => $user]);
        
    }
}
