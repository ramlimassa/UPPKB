<?php

namespace App\Http\Controllers;

use App\Models\pendaftaran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('pendaftarans')
        ->leftJoin('users', 'pendaftarans.user_id', '=', 'users.id')
        ->get();

        $data = [
            'content' => 'admin/pendaftaran/index',
            'title' => 'Pendaftaran',
            'pendaftarans' => $users,
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
            'content' => 'admin/pendaftaran/formpendaftaran',
            'title' => 'Pendaftaran',
            'header' => 'Form Pendaftaran',
        ];
        return view('layouts.wrapper', $data );
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
        $data = $request->validate ([
            'namaPK' => 'required',
            'alamatPK' => 'required',
            'no_uji' => 'required',
            'no_sertifikat' => 'required',
            'tgl_sertifikat' => 'required',
            'masa_berlaku' => 'required',
            'no_reg_kendaraan' => 'required',
            'no_rangk_kendaraan' => 'required',
            'no_mtr_penggerak' => 'required',
            'jenis' => 'required',
            'tipe' => 'required',
            'tahun_pemb' => 'required',
            'bahan_bakar' => 'required',
            'isi_silinder' => 'required',
            'daya_motor' => 'required',
            'ukuran_ban' => 'required',
            'konfigurasi_sumbu' => 'required',
            'berat_kosong_kendaraan' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
            'tinggi' => 'required',
            'julur_dpn' => 'required',
            'julur_blk' => 'required',
            'sumbu_i_ii' => 'required',
            'sumbu_ii_iii' => 'required',
            'sumbu_iii_iv' => 'required',
            'plt' => 'required',
            'jbb' => 'required',
            'jbi' => 'required',
            'daya_angkut' => 'required',
            'kls_jalan' => 'required',
        ]);

        $data['user_id']=auth()->user()->id;
        Pendaftaran::create($data);
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect('/pendataan/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get post by ID
        $pendaftaran = Pendaftaran::findOrFail($id);

        //render pendaftaran data
        return $pendaftaran;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = [
            'content' => 'admin/pendaftaran/formpendaftaran',
            'pendaftaran' => Pendaftaran::findOrFail($id),
            'title' => 'Pendaftaran',
            'header' => 'Edit Pendaftaran',
            'button' => 'Update'
        ];
        return view('layouts.wrapper', $data );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pendaftaran = Pendaftaran::find($id);
        $data = $request->validate ([
            'namaPK' => 'required',
            'alamatPK' => 'required',
            'no_uji' => 'required',
            'no_sertifikat' => 'required',
            'tgl_sertifikat' => 'required',
            'masa_berlaku' => 'required',
            'no_reg_kendaraan' => 'required',
            'no_rangk_kendaraan' => 'required',
            'no_mtr_penggerak' => 'required',
            'jenis' => 'required',
            'tipe' => 'required',
            'tahun_pemb' => 'required',
            'bahan_bakar' => 'required',
            'isi_silinder' => 'required',
            'daya_motor' => 'required',
            'ukuran_ban' => 'required',
            'konfigurasi_sumbu' => 'required',
            'berat_kosong_kendaraan' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
            'tinggi' => 'required',
            'julur_dpn' => 'required',
            'julur_blk' => 'required',
            'sumbu_i_ii' => 'required',
            'sumbu_ii_iii' => 'required',
            'sumbu_iii_iv' => 'required',
            'plt' => 'required',
            'jbb' => 'required',
            'jbi' => 'required',
            'daya_angkut' => 'required',
            'kls_jalan' => 'required',
        ]);
        
        $pendaftaran->update($data);
        Alert::success('Success', 'Data Berhasil Diupdate'); //tambahkan direct link
        return redirect('/pendataan/create/' . "1");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect('/pendaftaran');
    }




}