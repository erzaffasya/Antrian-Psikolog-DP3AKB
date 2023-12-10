<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Antrian;
use App\Models\RiwayatTindakan;
use App\Models\User;

class ChangeStatusController extends Controller
{
    public function updateStatus(Request $request)
    {
        // dd($request->all());
        $dokterId = Auth::user()->dokter->id;

        // Fetch the current and next queues
        $AntrianForDokter = Antrian::getAntrianForDokter($dokterId);
        $dataResponse = null;
        if ($AntrianForDokter['current']) {
            // Update the statuses
            DB::transaction(function () use ($AntrianForDokter, $request) {
                // Update the status of the current patient to 'S'
                $this->updateAntrianStatus($AntrianForDokter['current']->id, 'S');
                // Update the status of the patient with the lowest number and status 'R' to 'P'
                $this->updateAntrianStatusByUrutAndStatus($AntrianForDokter['current']->dokter_id);


                RiwayatTindakan::create([
                    'dokter_id' => $AntrianForDokter['current']->dokter_id,
                    'users_id' => $AntrianForDokter['current']->users_id,
                    'keterangan' => $request->keterangan,
                    'tindakan' => $request->tindakan,
                    'keluhan' => $request->keluhan,
                    'tanggal' => now(),
                ]);
            });


            $dataAntrianNext = Antrian::where('status', 'P')->where('dokter_id', $AntrianForDokter['current']->dokter_id)->orderBy('urut', 'asc')->first();
            if ($dataAntrianNext != null) {
                $dataNext = User::find($dataAntrianNext->users_id);
                $dataResponse = [
                    'nomor' => $dataAntrianNext->nomor,
                    'nama' => $dataNext->nama_lengkap,
                    'telepon' => $dataNext->hp,
                    'urut' => $dataAntrianNext->urut
                ];
            }
            // DD($dataAntrianNext, $dataNext, $dataResponse);

            return response()->json(['success' => true, 'data' => $dataResponse]);
        }

        return response()->json(['success' => false, 'message' => 'No current or next queues']);
    }

    // Helper method to update status based on ID
    private function updateAntrianStatus($id, $status)
    {
        Antrian::where('id', $id)->update(['status' => $status]);
    }

    // Helper method to update status based on Urut and Status
    private function updateAntrianStatusByUrutAndStatus($dokterId)
    {
        $dataAntrian = Antrian::where('status', 'R')->where('dokter_id', $dokterId)->orderBy('urut', 'asc')->first();

        if ($dataAntrian != null) {
            $dataAntrian->update(['status' => 'P']);
        }
    }
}
