<?php

namespace App\Http\Controllers;

use App\Models\Pendataan;
use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\DB;
class PendataanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = DB::table('pendataans')
        // ->leftjoin('users', 'pendataans.user_id', '=', 'users.id')
        // ->get();
        
        // $pendaftarans = DB::table('pendataans')
        // ->leftjoin('pendaftarans', 'pendataans.pendaftaran_id', '=', 'pendaftarans.id')
        // ->get();

        $pendataans = Pendataan::with('user', 'pendaftaran')->get();

        $data = [ 
            'content' => 'admin/pendataan/index',
            'title' => 'Pendataan',
            'pendataans' => $pendataans,
        ];
        return view('layouts.wrapper', $data );
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pendaftarans = Pendaftaran::all();

        // if($request->ajax()){
        //     $data = Pendaftaran::where('no_uji', 'LIKE',$request->no_uji. '%')->get();
        //     $output = '';
        //     if(count($data) >0){
        //         $output .='<ul class="list-group" style="display:block;position:relative;z-indez">';
        //             foreach ($data as $row) {
        //                 $output .='<li class="list-group-item">'.$row->no_uji.'</li>';
        //             }
        //         $output .='</ul>';
        //     }
        //     else{
        //         $output .='<li class="list-group-item">Data Tidak Ditemukan</li>';
        //     }
        //     return $output;
        // }
        $data = [
            'content' => 'admin/pendataan/formpendataan',
            'title' => 'Pendataan',
            'header' => 'Form Pendataan',
        ];
        return view('layouts.wrapper', $data, compact ('pendaftarans') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate ([
            'pendaftaran_id' => 'required',
            'berat' => 'required',
            'kbbk' => 'required',
            'kbbp' => 'required',
            'panjang' => 'required',
            'kel_panjang' => 'required',
            'lebar' => 'required',
            'kel_lebar' => 'required',
            'tinggi' => 'required',
            'kel_tinggi' => 'required',
            'foh' => 'required',
            'kel_foh' => 'required',
            'roh' => 'required',
            'kel_roh' => 'required',
            'mengangkut' => 'required',
            'dari' => 'required',
            'tujuan' => 'required',
            'pengemudi' => 'required',
            'kelengkapan_berkas' => 'required',
            'sim' => 'required',
            'pelanggaran' => 'required',
        ]);
        
        $data['user_id']=auth()->user()->id;
        Pendataan::create($data);
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect('/pendataan');
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

    // public function create_data(Request $request, string $nomor_regist)
    // {
    //     $data = [
    //         'content' => 'admin/pendataan/formpendataan',
    //         'title' => 'Pendataan',
    //         'header' => 'Form Pendataan',
    //     ];

    //     return view('layouts.wrapper', $data);
    // }
}
