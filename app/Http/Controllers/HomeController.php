<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $clientes = Cliente::latest()->get();
        return view('home', ['clientes' => $clientes]);
    }
}
