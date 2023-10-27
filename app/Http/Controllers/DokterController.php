<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Spesialis;
use App\Models\User;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $Dokter = Dokter::all();
        return view('admin.dokter.index', compact('Dokter'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $User = User::whereNotIn('id', function ($query) {
            $query->select('users_id')
                  ->from('dokter');
        })->where('role','Dokter')->get();
        $Spesialis = Spesialis::all();
        return view('admin.dokter.tambah' , compact('User', 'Spesialis'));
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
            'users_id' => 'required',
        ]);

        Dokter::create([
            'users_id' => $request->users_id,
            'spesialis_id' => $request->spesialis_id,
            'isLibur' => $request->isLibur,
            'jam_selesai' => $request->jam_selesai,
            'jam_mulai' => $request->jam_mulai,
            'batas_maksimal' => $request->batas_maksimal
        ]);

        return redirect()->route('dokter.index')
            ->with('success', 'Dokter Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokter  $Dokter
     * @return \Illuminate\Http\Response
     */
    public function show(Dokter $Dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokter  $Dokter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Dokter = Dokter::find($id);
        $User = User::all();
        $Spesialis = Spesialis::all();
        return view('admin.dokter.ubah', compact('Dokter', 'User','Spesialis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokter  $Dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Dokter = Dokter::find($id);
        $Dokter->batas_maksimal = $request->batas_maksimal;
        $Dokter->jam_mulai = $request->jam_mulai;
        $Dokter->jam_selesai = $request->jam_selesai;
        $Dokter->isLibur = $request->isLibur;
        $Dokter->spesialis_id = $request->spesialis_id;
        // $Dokter->users_id = $request->users_id;
        $Dokter->save();

        return redirect()->route('dokter.index')
        ->with('edit', 'Dokter Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokter  $Dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Dokter = Dokter::findOrFail($id);
        $Dokter->delete();
        return redirect()->route('dokter.index')
            ->with('delete', 'Dokter Berhasil Dihapus');
    }
}
