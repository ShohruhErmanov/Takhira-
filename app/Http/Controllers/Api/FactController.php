<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fact;
use App\Http\Requests\StoreFactRequest;
use App\Http\Requests\UpdateFactRequest;
use App\Models\Facts;

class FactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facts = Facts::all();
        return $facts;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFactRequest $request)
    {
        $factStore = Facts::create($request->all());
        return $factStore;
    }

    /**
     * Display the specified resource.
     */
    public function show(Facts $fact)
    {
        return $fact;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFactRequest $request, Facts $fact)
    {
        $fact->update($request->all());
        return $fact;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facts $fact)
    {
        $fact->delete();
        return "Fact deleted successfuly";
    }
}
