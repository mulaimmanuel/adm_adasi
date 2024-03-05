<?php

namespace App\Http\Controllers;

use App\Models\DetailPreventive;
use App\Models\Preventive;
use App\Models\Mesin;
use Egulias\EmailValidator\Result\Reason\DetailedReason;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DetailPreventiveController extends Controller
{
    public function updateIssue(Request $request, Mesin $mesin, DetailPreventive $detailPreventive)
    {
        // Ambil semua nilai issue dan perbaikan dari request
        $issues = $request->input('issue');
        $checkedIssues = $request->input('checked') ?? [];

        // Hapus semua detail preventive yang terkait dengan mesin yang diberikan
        $mesin->detailPreventives()->delete();

        // Loop melalui setiap issue dan perbaikan dari request
        foreach ($issues as $key => $issue) {
            // Buat detail preventive baru
            $detailPreventive->create([
                'id_mesin' => $mesin->id,
                'issue' => $issue,
                'issue_checked' => (in_array($key, $checkedIssues) ? 1 : 0)
            ]);
        }
        // Redirect atau response sesuai kebutuhan Anda
        return redirect()->route('maintenance.dashpreventive');
    }

    public function updatePerbaikan(Request $request, Mesin $mesin, DetailPreventive $detailPreventive)
    {
        $perbaikans = $request->input('perbaikan');
        $checkedPerbaikans = $request->input('checked') ?? [];

        // Hapus semua detail preventive yang terkait dengan mesin yang diberikan
        $mesin->detailPreventives()->delete();

        foreach ($perbaikans as $key => $perbaikan) {
            // Buat detail preventive baru
            $detailPreventive->create([
                'id_mesin' => $mesin->id,
                'perbaikan' => $perbaikan,
                'perbaikan_checked' => (in_array($key, $checkedPerbaikans) ? 1 : 0)
            ]);
        }
        return redirect()->route('maintenance.dashpreventive');
    }

    public function destroy(DetailPreventive $detailPreventive)
    {
        //
    }
}
