<?php

namespace App\Http\Controllers;

use App\Models\Penindakan;
use Illuminate\Http\Request;

class PenindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'content' => 'admin/penindakan/index',
            'title' => 'Penindakan',
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penindakan  $penindakan
     * @return \Illuminate\Http\Response
     */
    public function show(Penindakan $penindakan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penindakan  $penindakan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penindakan $penindakan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penindakan  $penindakan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penindakan $penindakan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penindakan  $penindakan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penindakan $penindakan)
    {
        //
    }
}
