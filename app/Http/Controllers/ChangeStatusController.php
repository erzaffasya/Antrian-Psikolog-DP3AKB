<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Antrian;

class ChangeStatusController extends Controller
{
    public function updateStatus()
    {

        $dokterId = Auth::id() - 1;

        // Fetch the current and next queues
        $AntrianForDokter = Antrian::getAntrianForDokter($dokterId);
        // dd($AntrianForDokter);
        if ($AntrianForDokter['current'] && $AntrianForDokter['next']) {
            // Update the statuses
            DB::transaction(function () use ($AntrianForDokter) {
                // Update the status of the current patient to 'S'
                $this->updateAntrianStatus($AntrianForDokter['current']->id, 'S');

                // Update the status of the patient with the lowest number and status 'R' to 'P'
                $this->updateAntrianStatusByUrutAndStatus($AntrianForDokter['next'], 'R', 'P');
            });

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'No current or next queues']);
    }

    // Helper method to update status based on ID
    private function updateAntrianStatus($id, $status)
    {
        Antrian::where('id', $id)->update(['status' => $status]);
    }

    // Helper method to update status based on Urut and Status
    private function updateAntrianStatusByUrutAndStatus($urut, $currentStatus, $newStatus)
    {
        Antrian::where('urut', $urut)
            ->where('status', $currentStatus)
            ->update(['status' => $newStatus]);
    }
}
