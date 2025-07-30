<?php

namespace App\Http\Controllers;

use App\Models\Ingresos;

class IngresosController extends Controller{
	public function index()
    {
		$ingresos = Ingresos::all();
		return $ingresos;
	}
}