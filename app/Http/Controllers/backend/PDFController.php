<?php

namespace App\Http\Controllers\backend;

use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PDFController extends Controller
{

    public function exportPDF()
    {
        $data = DB::table('skorquiz')->get();
        $pdf = PDF::loadView('backend.Kuis.export', ['Data' => $Data])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('data_siswa.pdf');
    }


}

