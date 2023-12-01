<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AmbilAntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = now();
        $Dokter = Dokter::all();
        $Antrian = Antrian::whereYear('created_at', $today->year)
            ->whereMonth('created_at', $today->month)
            ->whereDay('created_at', $today->day)
            ->where('users_id', Auth::user()->id)->first();

        if ($Antrian != null) {
            $pdf = app('dompdf.wrapper');
            $pdf->loadView('admin.antrian.cetakantrian', compact('Antrian'));
            return $pdf->download($Antrian->nomor . '.pdf');
        } else {
            return view('admin.ambilAntrian.index', compact('Dokter'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $today = now();
        $Antrian = Antrian::whereYear('created_at', $today->year)
            ->whereMonth('created_at', $today->month)
            ->whereDay('created_at', $today->day)
            ->where('users_id', Auth::user()->id)->first();
        if ($Antrian != null) {
            $pdf = app('dompdf.wrapper');
            $pdf->loadView('admin.antrian.cetakantrian', compact('Antrian'));
            return $pdf->download($Antrian->nomor . '.pdf');
        } else {
            return view('admin.ambilAntrian.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
