<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class MuroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        return view('dashboard', ['user' => $user]);
    }

    public function create()
    {
        return view('publicacion.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => ['required', 'max:255'],
            'descripcion' => 'required',
            'imagen' => 'required'
        ]);
    }
}
