<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index(){
		return view('contacto.index');
	}

	public function send(Request $request)
	{
		Mail::to('contacto.colaboratoriouchile@facso.cl')
		    ->send(new SendMail($request->all()));
		return view('contacto.enviado');
	}
}