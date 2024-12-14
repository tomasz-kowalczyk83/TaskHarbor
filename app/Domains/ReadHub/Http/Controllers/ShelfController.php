<?php

namespace App\Domains\ReadHub\Http\Controllers;

use App\Domains\ReadHub\DTO\CreateShelfDTO;
use App\Domains\ReadHub\Http\Requests\ShelfFormRequest;
use App\Domains\ReadHub\Service\ShelfService;
use App\Http\Controllers\Controller;
use App\Models\Shelf;
use Illuminate\Http\Request;

class ShelfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'foo';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shelf-create');
    }

    /**
     * Store a newly created resource in storage.
     * @param ShelfFormRequest $request
     */
    public function store(ShelfFormRequest $request, ShelfService $service)
    {
        $dto = CreateShelfDTO::fromRequest($request);
        $service->create($dto);
    }

    /**
     * Display the specified resource.
     */
    public function show(ShelfController $shelf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShelfController $shelf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShelfController $shelf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShelfController $shelf)
    {
        //
    }
}
