<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $Dokter = Dokter::all();
        return view('admin.Dokter.index', compact('Dokter'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Dokter.tambah');
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

        Dokter::create([
            'survey_kepuasan_id' => $request->survey_kepuasan_id,
        ]);

        return redirect()->route('Dokter.index')
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
        return view('admin.Dokter.edit', compact('Dokter'));
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
        $Dokter->survey_kepuasan_id = $request->survey_kepuasan_id;
        $Dokter->save();

        return redirect()->route('Dokter.index')
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
        return redirect()->route('Dokter.index')
            ->with('delete', 'Dokter Berhasil Dihapus');
    }
}
