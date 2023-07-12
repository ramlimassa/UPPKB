<?php

namespace App\Http\Controllers;
use Dompdf\Dompdf;

use Illuminate\Http\Request;

class QrController extends Controller
{


    public function generatePdfWithQrCode()
    {
        $data = "Data yang akan dihasilkan menjadi QR code";
        $qrCode = $this->generateQrCode($data);

        $pdf = new Dompdf();
        $pdf->loadHTML('<img src="data:image/png;base64,' . base64_encode($qrCode) . '">');
        $pdf->setPaper('A4', 'portrait');

        // Simpan PDF ke file
        $pdf->output();
        $output = $pdf->output();
        file_put_contents('path/to/save/qr_code.pdf', $output);

        return response()->download('path/to/save/qr_code.pdf')->deleteFileAfterSend(true);
    }

}
