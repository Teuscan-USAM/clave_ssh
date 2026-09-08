<?php

namespace App\Http\Controllers;

use App\Models\TipoEstablecimiento;
use Illuminate\Contracts\View\View;

class SiapController extends Controller
{
    public function index(): View
    {
        $tiposEstablecimiento = TipoEstablecimiento::with('unidadesSalud')->get();

        return view('siap.index', compact('tiposEstablecimiento'));
    }
}
