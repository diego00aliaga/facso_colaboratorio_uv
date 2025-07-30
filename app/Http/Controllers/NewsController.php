<?php

namespace App\Http\Controllers;

use App\Models\Nucleos;
use App\Http\Requests\NewsRequest;

class NewsController extends Controller
{
    public function index()
	{
		$news = News::all();
		return view('news.index', compact('news'));
	}
	public function create()
    {
        $news = new News();
        return view('news.create', compact('news'));
    }
	public function store(Request $request)
    {
        News::create($request->validated());
        return redirect()->route('news.index')
            ->with('success', 'Se ha guardado tus preferencias satisfactoriamente.');
    }
	
	public function addNews(Request $request)
	{
		$news = New News();

		$news->correo 		= $request->correo;
		$news->disciplinas	= $request->areas;
		$news->autores		= $request->autores;
		$news->save();
		return response()->json($news);
	}
}
