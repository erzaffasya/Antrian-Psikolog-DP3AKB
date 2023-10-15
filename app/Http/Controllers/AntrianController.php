<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function index()
    {
        $Antrian = Antrian::all();
        return view('admin.Antrian.index', compact('Antrian'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Antrian.tambah');
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

        Antrian::create([
            'survey_kepuasan_id' => $request->survey_kepuasan_id,
        ]);

        return redirect()->route('Antrian.index')
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
        return view('admin.Antrian.edit', compact('Antrian'));
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
        return redirect()->route('Antrian.index')
            ->with('delete', 'Antrian Berhasil Dihapus');
    }
}