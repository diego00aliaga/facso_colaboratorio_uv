<?php

namespace App\Http\Controllers;

use App\Models\Nucleos;
use App\Http\Requests\NucleosRequest;

class NucleosController extends Controller
{
    public function index()
	{
		$nucleos = Nucleos::all();
		return view('nucleos.index', compact('nucleos'));
	}
}
