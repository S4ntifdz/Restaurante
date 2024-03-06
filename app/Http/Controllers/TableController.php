<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretableRequest;
use App\Http\Requests\UpdatetableRequest;
use App\Http\Resources\TableCollection;
use App\Models\Table;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tables = table::paginate();
        return new TableCollection($tables);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(table $table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(table $table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetableRequest $request, table $table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(table $table)
    {
        //
    }
}
