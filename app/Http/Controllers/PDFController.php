<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Handling;
use App\Models\Customer;
use App\Models\TypeMaterial;
use App\Models\ScheduleVisit;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
// use Barryvdh\DomPDF\Facade as PDF;
use PDF;
// use Barryvdh\DomPDF\Facade as PDF;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class PDFController extends Controller
{           
    //GA JADI PKE GINIAAN PAKE JSAJA
        public function showDetail($no_wo)
        {
            // Mengambil data detail berdasarkan nomor WO
            $record = Handling::where('no_wo', $no_wo)->first();

            // Memastikan data ditemukan
            if ($record) {
                dd($record);
                // Jika data ditemukan, tampilkan halaman detail
                return view('template.pdf', compact('record'));
            } else {
                // Jika data tidak ditemukan, redirect atau tampilkan pesan error
                return redirect()->back()->with('error', 'Record not found.');
            }   
        }

        public function downloadPdf($id) {
            // Dapatkan data berdasarkan id
            $data = Handling::find($id);
        
            // Buat PDF menggunakan data tersebut
            $pdf = PDF::loadView('pdf_view', compact('data'));
        
            // Unduh PDF
            return $pdf->download('file.pdf');
        }
}
