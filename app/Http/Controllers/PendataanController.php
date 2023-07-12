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
        // dd($pendataans);
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
            'kelengkapan_berkas' => 'required|array',
            'kelengkapan_berkas.*' => 'required|string',
            'sim' => 'required',
            'pelanggaran' => 'required',
        ]);
        
        if (auth()->check()) {
            $data['user_id'] = auth()->user()->id;
        }
        $data['pendaftaran_id'] = Pendaftaran::where('no_uji', $request->input('result'))->first()->id;
        $data['kelengkapan_berkas'] = json_encode($request->input('kelengkapan_berkas'));
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
    public function show($id)
    {
        
        $pendataan = Pendataan::findOrFail($id);
        
        $data = [
            'content' => 'admin/pendataan/show',
            'title' => 'Pendataan',
            'pendataan' => $pendataan,
        ];

        return view('layouts.wrapper', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendataan  $pendataan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendaftarans = Pendaftaran::all();
        $data = [
            'content' => 'admin/pendataan/edit',
            'pendataan' => Pendataan::findOrFail($id),
            'title' => 'Pendataan',
            'header' => 'Edit Pendataan',
            'button' => 'Update'
        ];
        return view('layouts.wrapper', $data, compact ('pendaftarans') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Pendataan  $pendataan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pendataan = Pendataan::find($id);
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
            'kelengkapan_berkas' => 'required|array',
            'kelengkapan_berkas.*' => 'required|string',
            'sim' => 'required',
            'pelanggaran' => 'required',
        ]);
        
        if (auth()->check()) {
            $data['user_id'] = auth()->user()->id;
        }
        $data['kelengkapan_berkas'] = json_encode($request->input('kelengkapan_berkas'));
        dd($data);
        $pendataan->update($data);
        Alert::success('Success', 'Data Berhasil diupdate');
        return redirect('/pendataan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendataan  $pendataan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendataan = Pendataan::findOrFail($id);
        $pendataan->delete();

        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect('/pendataan');
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
