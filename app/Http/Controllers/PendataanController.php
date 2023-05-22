<?php

namespace App\Http\Controllers;

use App\Models\Pendataan;
use App\Http\Requests\StorePendataanRequest;
use App\Http\Requests\UpdatePendataanRequest;

class PendataanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'content' => 'admin/pendataan/index',
            'title' => 'Pendataan',
        ];
        return view('layouts.wrapper', $data );
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'content' => 'admin/pendataan/formpendataan',
            'title' => 'Pendataan',
            'header' => 'Form Pendataan',
        ];
        return view('layouts.wrapper', $data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePendataanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePendataanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendataan  $pendataan
     * @return \Illuminate\Http\Response
     */
    public function show(Pendataan $pendataan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendataan  $pendataan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendataan $pendataan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePendataanRequest  $request
     * @param  \App\Models\Pendataan  $pendataan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePendataanRequest $request, Pendataan $pendataan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendataan  $pendataan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendataan $pendataan)
    {
        //
    }
}
