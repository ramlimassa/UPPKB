<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Pendataan;


class AjaxController extends Controller
{
    //
    public function getjsonpendaftaran(Request $request)
    {
    //     $pendaftaran = new Pendaftaran();
    //     $json = $pendaftaran->find($request->noujikendaraan);
    //     echo json_encode($json);
    // }

    // public function search(Request $request)
    // {
        $pendaftaranId = $request->input('noujikendaraan');
        $searchQuery = $request->input('search');
    
        $pendaftaran = Pendaftaran::where('no_uji', $pendaftaranId)
            ->where('no_uji', 'LIKE', '%' . $searchQuery . '%')
            ->first();

        // $pendaftaran = Pendaftaran::where('no_uji', $pendaftaranId)->first();
    
        return response()->json($pendaftaran);
    }

    public function getjsonpendataan(Request $request)
    {
        $pendataan = new Pendataan();
        $json = $pendataan->find($request->noujikendaraan);
        echo json_encode($json);         
    }

}
