<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facts;

class FactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facts = Facts::all();
        return view('admin.facts.index', compact('facts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.facts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'number' => 'required',
         ]);

        Facts::create($request->all());
        return redirect()->route('admin.facts.index')->with('seccess', 'Facts created saccessfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Facts $fact)
    {
        return view('admin.facts.edit', compact('fact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Facts $fact)
    {
        $this->validate($request, [
            'title' => 'required',
            'number' => 'required',
         ]);

        $fact->update($request->all());
        return redirect()->route('admin.facts.index')->with('seccess', 'Facts edited saccessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facts $fact)
    {
        $fact->delete();
        return redirect()->route('admin.facts.index')->with('seccess', 'Facts deleted saccessfuly');
    }
}
