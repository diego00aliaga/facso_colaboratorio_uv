<?php

namespace App\Http\Controllers;

use App\Models\Investigadores;
use App\Models\Researcher;
use App\Http\Requests\ResearcherRequest;

/**
 * Class ResearcherController
 * @package App\Http\Controllers
 */
class ResearcherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $researchers = Investigadores::orderBy('ap_paterno','ASC')->paginate();

        return view('researcher.index', compact('researchers'))
            ->with('i', (request()->input('page', 1) - 1) * $researchers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $researcher = new Researcher();
        return view('researcher.create', compact('researcher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ResearcherRequest $request)
    {
        Investigadores::create($request->validated());

        return redirect()->route('researchers.index')
            ->with('success', 'Researcher created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $researcher = Investigadores::find($id);

        return view('researcher.show', compact('researcher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $researcher = Investigadores::find($id);

        return view('researcher.edit', compact('researcher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ResearcherRequest $request, Researcher $researcher)
    {
        $researcher->update($request->validated());

        return redirect()->route('researchers.index')
            ->with('success', 'Researcher updated successfully');
    }

    public function destroy($id)
    {
        Investigadores::find($id)->delete();

        return redirect()->route('researchers.index')
            ->with('success', 'Researcher deleted successfully');
    }
}
