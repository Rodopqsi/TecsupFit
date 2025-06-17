<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (!auth()->check() || !auth()->user()->is_admin) {
            return redirect('/')->with('error', 'No tienes acceso a esta página.');
        }

        return view('admin');
    }
    public function create()
    {
        if (!auth()->check() || !auth()->user()->is_admin) {
            return redirect('/')->with('error', 'No tienes acceso a esta página.');
        }

        return view('productos.create');
    }
}
