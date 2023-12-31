<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Dokter;
use App\Models\Spesialis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class AntrianController extends Controller
{
    public function getAntrian()
    {
        $today = now();
        $Antrian = Antrian::whereYear('created_at', $today->year)
            ->whereMonth('created_at', $today->month)
            ->whereDay('created_at', $today->day)
            ->where('users_id', Auth::user()->id)->first();
        return view('admin.dashboard', compact('Antrian'));
    }

    public function index()
    {
        $Antrian = new Antrian();
        if (Auth::user()->role == 'Member') {
            $Antrian = Antrian::with('dokter')->where('users_id', Auth::user()->id)->orderBy('users_id', 'asc')->get();
        } else if (Auth::user()->role == 'Dokter') {
            $Antrian = Antrian::with('dokter')->where('dokter_id', Auth::user()->id)->orderBy('users_id', 'asc')->get();
        } else {
            $Antrian = Antrian::with('dokter')->orderBy('users_id', 'asc')->get();
        }

        return view('admin.antrian.index', compact('Antrian'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.antrian.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'survey_kepuasan_id' => 'required',
        // ]);

        function bulanRomawi($bulanNumerik)
        {
            $romawi = [
                1 => 'I', 2 => 'II', 3 => 'III', 4 => 'IV', 5 => 'V',
                6 => 'VI', 7 => 'VII', 8 => 'VIII', 9 => 'IX', 10 => 'X',
                11 => 'XI', 12 => 'XII'
            ];

            return $romawi[$bulanNumerik];
        }

        $today = now();
        $dokter = Dokter::where('id', $request->dokter_id)->first();
        $bulan = bulanRomawi($today->format('m')); // Menggunakan fungsi bulanRomawi untuk mengonversi bulan
        $hari = $today->format('d');
        $tahun = $today->format('Y');


        $status = 'R';
        $getAntrian = Antrian::whereYear('created_at', $today->year)
            ->whereMonth('created_at', $today->month)
            ->whereDay('created_at', $today->day)
            ->where('dokter_id', $dokter->id)->get();

        if (count($getAntrian->where('status', 'P')) == 0) {
            $status = 'P';
        }

        $urutanBaru = $getAntrian->max('urut') + 1;
        // dd($getAntrian, $urutanBaru);
        $nomorBaru = $dokter->kode . '/' . $tahun . '/' . $bulan . '-' . $hari . '/' . str_pad($urutanBaru, 3, '0', STR_PAD_LEFT);

        Antrian::create([
            'nomor' => $nomorBaru,
            'urut' => $urutanBaru,
            'tanggal' => $today,
            'users_id' => Auth::user()->id,
            'dokter_id' => $request->dokter_id,
            'spesialis_id' => $dokter->spesialis_id,
            'status' => $status,
            'keterangan' => $request->keterangan,
            'isOnline' => $request->isOnline
        ]);

        return redirect()->route('antrian.index')
            ->with('success', 'Antrian Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Antrian  $Antrian
     * @return \Illuminate\Http\Response
     */
    public function show(Antrian $Antrian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Antrian  $Antrian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Antrian = Antrian::find($id);
        return view('admin.antrian.edit', compact('Antrian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Antrian  $Antrian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Antrian = Antrian::find($id);
        $Antrian->survey_kepuasan_id = $request->survey_kepuasan_id;
        $Antrian->save();

        return redirect()->route('Antrian.index')
            ->with('edit', 'Antrian Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Antrian  $Antrian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Antrian = Antrian::findOrFail($id);
        $Antrian->delete();
        return back()
            ->with('delete', 'Antrian Berhasil Dihapus');
    }

    public function cetakAntrian()
    {

        $today = now();
        $Antrian = Antrian::whereYear('created_at', $today->year)
            ->whereMonth('created_at', $today->month)
            ->whereDay('created_at', $today->day)
            ->where('users_id', Auth::user()->id)->first();

        return view('admin.antrian.cetakantrian', compact('Antrian'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
