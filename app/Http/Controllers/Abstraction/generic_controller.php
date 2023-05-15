<?php

namespace App\Http\Controllers\Abstraction;

use App\Http\Controllers\Controller;

abstract class generic_controller extends Controller
{
    protected $model;
    protected $request;

    public function __construct($request, $model) {
        $this->request = $request;
        $this->model = $model;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->model->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(): void
    {
        $this->model->create($this->request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return $this->model->findOrFail($this->request->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(): void
    {
        $this->model->findOrFail($this->request->id)->update($this->request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(): void
    {
        $this->model->findOrFail($this->request->id)->delete();
    }
}
