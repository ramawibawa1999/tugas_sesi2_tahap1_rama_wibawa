<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catatan;
use App\Models\Pasien;

class CatatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catatan = Catatan::all();
        $pasien = Pasien::all();
        return view('catatan.data_catatan', compact('catatan','pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasien = Pasien::all();
        return view('catatan.tambah_catatan', compact('pasien'));
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
            'nama_pasien' => 'required',
            'tgl_berobat' => 'required',
            'keluhan_pasien' => 'required',
            'hasil_diagnosa' => 'required',
        ]);

        Catatan::create([
            'pasien_id' => $request->nama_pasien,
            'tgl_berobat' => $request->tgl_berobat,
            'keluhan_pasien' => $request->keluhan_pasien,
            'hasil_diagnosa' => $request->hasil_diagnosa,
        ]);

        return redirect('/catatan');
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
        $catatan = Catatan::find($id);
        $pasien = Pasien::all();
        return view('catatan.edit_catatan', compact('catatan','pasien'));  
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
        $request->validate([
            'nama_pasien' => 'required',
            'tgl_berobat' => 'required',
            'keluhan_pasien' => 'required',
            'hasil_diagnosa' => 'required',
        ]);

        Catatan::find($id)->update([
            'pasien_id' => $request->nama_pasien,
            'tgl_berobat' => $request->tgl_berobat,
            'keluhan_pasien' => $request->keluhan_pasien,
            'hasil_diagnosa' => $request->hasil_diagnosa,
        ]);

        return redirect('/catatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catatan = Catatan::find($id);
        $catatan->delete();

        return redirect('/catatan');
    }
}
