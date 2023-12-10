<?php

namespace App\Http\Controllers;

use App\Models\RiwayatTindakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatTindakanController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 'Member') {
            $RiwayatTindakan = RiwayatTindakan::where('users_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        } else if (Auth::user()->role == 'Dokter') {
            $RiwayatTindakan = RiwayatTindakan::where('dokter_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        } else {
            $RiwayatTindakan = RiwayatTindakan::orderBy('created_at', 'DESC')->get();
        }
        return view('admin.RiwayatTindakan.index', compact('RiwayatTindakan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.RiwayatTindakan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'survey_kepuasan_id' => 'required',
        ]);

        RiwayatTindakan::create([
            'survey_kepuasan_id' => $request->survey_kepuasan_id,
        ]);

        return redirect()->route('RiwayatTindakan.index')
            ->with('success', 'RiwayatTindakan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RiwayatTindakan  $RiwayatTindakan
     * @return \Illuminate\Http\Response
     */
    public function show(RiwayatTindakan $RiwayatTindakan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RiwayatTindakan  $RiwayatTindakan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $RiwayatTindakan = RiwayatTindakan::find($id);
        return view('admin.RiwayatTindakan.edit', compact('RiwayatTindakan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RiwayatTindakan  $RiwayatTindakan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $RiwayatTindakan = RiwayatTindakan::find($id);
        $RiwayatTindakan->survey_kepuasan_id = $request->survey_kepuasan_id;
        $RiwayatTindakan->save();

        return redirect()->route('RiwayatTindakan.index')
            ->with('edit', 'RiwayatTindakan Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RiwayatTindakan  $RiwayatTindakan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $RiwayatTindakan = RiwayatTindakan::findOrFail($id);
        $RiwayatTindakan->delete();
        return redirect()->route('RiwayatTindakan.index')
            ->with('delete', 'RiwayatTindakan Berhasil Dihapus');
    }
}
