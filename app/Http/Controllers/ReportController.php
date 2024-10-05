<?php

namespace App\Http\Controllers;

use App\Models\venta;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
{
    $ventas = venta::with('cliente', 'producto')->get(); // Cargar datos necesarios
    return view('reports.index', compact('ventas'));
}

}
