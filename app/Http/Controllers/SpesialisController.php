<?php

namespace App\Http\Controllers;

use App\Models\Spesialis;
use Illuminate\Http\Request;

class SpesialisController extends Controller
{
    public function index()
    {
        $spesialis = Spesialis::all();
        return view('admin.spesialis.index', compact('spesialis'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.spesialis.tambah');
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
            'spesialis' => 'required',
            'deskripsi' => 'required',
        ]);
        // DD($request->all());
        Spesialis::create([
            'spesialis' => $request->spesialis,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('spesialis.index')
            ->with('success', 'spesialis Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spesialis  $Spesialis
     * @return \Illuminate\Http\Response
     */
    public function show(Spesialis $Spesialis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spesialis  $Spesialis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spesialis = Spesialis::find($id);
        return view('admin.spesialis.ubah', compact('spesialis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spesialis  $Spesialis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Spesialis = Spesialis::find($id);
        $Spesialis->spesialis = $request->spesialis;
        $Spesialis->deskripsi = $request->deskripsi;
        $Spesialis->save();

        return redirect()->route('spesialis.index')
        ->with('edit', 'Spesialis Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spesialis  $Spesialis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Spesialis = Spesialis::findOrFail($id);
        $Spesialis->delete();
        return redirect()->route('spesialis.index')
            ->with('delete', 'Spesialis Berhasil Dihapus');
    }
}
