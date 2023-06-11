<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendaftaran;


class AjaxController extends Controller
{
    //
    public function getjsonpendaftaran(Request $request)
    {
        $pendaftaran = new Pendaftaran();
        $json = $pendaftaran->find($request->noujikendaraan);
        echo json_encode($json);         
    }

    public function validasi (Request $request) {
        dd($request->all());
    }
}
