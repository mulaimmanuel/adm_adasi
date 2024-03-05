<?php

namespace App\Http\Controllers;

use App\Models\Preventive;
use App\Models\Mesin;
use App\Models\DetailPreventive;
use Illuminate\Http\Request;

class PreventiveController extends Controller
{
    public function maintenanceDashPreventive()
    {
        // Mengambil semua data Mesin
        $mesins = Mesin::latest()->get();

        // Mengambil semua data Preventive
        $detailpreventives = DetailPreventive::latest()->get();

        // Variabel $i didefinisikan di sini
        $i = 0;

        // Kembalikan view dengan data mesins, preventives, dan $i
        return view('maintenance.dashpreventive', compact('mesins', 'detailpreventives', 'i'));
    }

    public function maintenanceDashBlockPreventive()
    {
        // Mengambil semua data Mesin
        $mesins = Mesin::latest()->get();

        // Mengambil semua data Preventive
        $detailpreventives = DetailPreventive::latest()->get();

        // Variabel $i didefinisikan di sini
        $i = 0;

        // Kembalikan view dengan data mesins, preventives, dan $i
        return view('maintenance.blokpreventive', compact('mesins', 'detailpreventives', 'i'));
    }



    public function deptmtceDashPreventive()
    {
        $mesins = Mesin::latest()->get();
        return view('deptmtce.dashpreventive', compact('mesins'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
    }

    public function EditDeptMTCEPreventive(Mesin $mesin)
    {
        $status = $mesin->status;
        // Determine view based on status
        if ($mesin->status === '2') {
            $viewName = 'deptmtce.editpreventive';
        } else if ($mesin->status === '0') {
            $viewName = 'deptmtce.lihatpreventive';
        } else {
            return view('deptmtce.index');
        }

        return view($viewName, compact('preventive'));
    }

    public function EditMaintenancePreventive(Mesin $mesin, DetailPreventive $detailPreventive)
    {
        $detailPreventives = DetailPreventive::where('id_mesin', $mesin->id)
            ->get(['perbaikan']);

        $mesins = Mesin::all();
        $status = $mesin->status;
        // Determine view based on status
        if ($mesin->status === '2') {
            $viewName = 'maintenance.lihatpreventive';
        } else if ($mesin->status === '0') {
            $viewName = 'maintenance.editpreventive';
        } else {
            return view('maintenance.dashpreventive');
        }
        // Inisialisasi variabel $mesin sebelum melewatkan ke view
        // Misalnya, Anda ingin mendapatkan semua mesin untuk keperluan lain di view
        return view($viewName, compact('mesin', 'mesins', 'detailPreventives'));
    }

    public function destroy(Preventive $preventive)
    {
    }
}
