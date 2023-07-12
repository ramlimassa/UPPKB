<?php

namespace App\Http\Controllers;

use App\Models\Pendataan;
use App\Models\Penindakan;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PenindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penindakans = Penindakan::with('user', 'pendaftaran', 'pendataan')->get();
        $data = [
            'content' => 'admin/penindakan/index',
            'title' => 'Penindakan',
            'penindakans' => $penindakans,
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
        $pendataans = Pendataan::all();
        $data = [
            'content' => 'admin/penindakan/formpenindakan',
            'title' => 'Penindakan',
            'header' => 'Form Penindakan',
        ];
        return view('layouts.wrapper', $data, compact ('pendataans') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate (['pendataan_id' => 'required']);
        $data['user_id'] = auth()->user()->id;
        $data['jns_pelanggaran'] = json_encode($request->input('jns_pelanggaran'));
        $data['jns_penindakan'] = json_encode($request->input('jns_penindakan'));
        Penindakan::create($data);
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect('/penindakan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penindakan  $penindakan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penindakan = Penindakan::findOrFail($id);
        ///$penindakans = Penindakan::with('pendaftaran', 'pendataan')->get();

        $data = [
            'content' => 'admin/penindakan/show',
            'title' => 'Penindakan',
            'penindakan' => $penindakan,
        ];

        return view('layouts.wrapper', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penindakan  $penindakan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendataans = Pendataan::all();
        $data = [
            'content' => 'admin/penindakan/edit',
            'penindakan' => Penindakan::findOrFail($id),
            'title' => 'Penindakan',
            'header' => 'Edit Penindakan',
            'button' => 'Update'
        ];
        return view('layouts.wrapper', $data, compact ('pendataans') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penindakan  $penindakan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $penindakan = Penindakan::find($id);
        $data = $request->validate (['pendataan_id' => 'required']);
        $data['user_id'] = auth()->user()->id;
        $data['jns_pelanggaran'] = json_encode($request->input('jns_pelanggaran'));
        $data['jns_penindakan'] = json_encode($request->input('jns_penindakan'));
        $penindakan->update($data);
        Alert::success('Success', 'Data Berhasil Diupdate');
        return redirect('/penindakan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penindakan  $penindakan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $penindakan = Penindakan::findOrFail($id);
        $penindakan->delete();

        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect('/penindakan');
    }
}
