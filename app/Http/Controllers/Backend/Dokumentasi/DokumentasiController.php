<?php

namespace App\Http\Controllers\Backend\Dokumentasi;

use App\Http\Controllers\Controller;
use App\Models\DataDokumentasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumentasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $dokumentasis = DataDokumentasi::all();
        return view('backend.datatable_dokumentasi.index', compact('dokumentasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('backend.form_dokumentasi.index');
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
        $this->validate($request,[
            'jenis_dokumentasi'     => 'required',
            'deskripsi_foto'     => 'required',
            'tanggal_pelaksanaan'     => 'required'
        ]);
        // Upload gambar
        if($request->file("foto_dokumentasi")){
            $fotodokumentasi = $request->file('foto_dokumentasi');
            $fotodokumentasi->storeAs('public/foto_dokumentasi', $fotodokumentasi->hashName());
        }

        $dokumentasis = DataDokumentasi::create([
            'jenis_dokumentasi' => $request->jenis_dokumentasi,
            'foto_dokumentasi' => $fotodokumentasi->hashName(),
            'deskripsi_foto' => $request->deskripsi_foto,
            'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan
        ]);

        if($dokumentasis){
            //redirect dengan pesan sukses
            return redirect()->route('dokumentasi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('dokumentasi.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
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
        $dokumentasis = DataDokumentasi::find($id);
        return view('backend.edit_dokumentasi.index', compact('dokumentasis'));
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
        $dokumentasis = DataDokumentasi::findOrFail($id);

        if($request->file("foto_dokumentasi") == ""){

            $dokumentasis->update([
                'jenis_dokumentasi' => $request->jenis_dokumentasi,
                'foto_dokumentasi' => "null",
                'deskripsi_foto' => $request->deskripsi_foto,
                'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan
            ]);
        }else{
            Storage::disk('local')->delete('public/foto_dokumentasi/'.$dokumentasis->foto_dokumentasi);

            $fotodokumentasi= $request->file('foto_dokumentasi');
            $fotodokumentasi->storeAs('public/foto_dokumentasi', $fotodokumentasi->hashName());

            $dokumentasis->update([
                'jenis_dokumentasi' => $request->jenis_dokumentasi,
                'foto_dokumentasi' => $fotodokumentasi->hashName(),
                'deskripsi_foto' => $request->deskripsi_foto,
                'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan
            ]);

        }
        if($dokumentasis){
            //redirect dengan pesan sukses
            return redirect()->route('dokumentasi.index')->with(['success' => 'Data Berhasil Diubah!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('dokumentasi.index')->with(['error' => 'Data Gagal Diubah!']);
        }
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
        $dokumentasis = DataDokumentasi::findOrFail($id);
        if($dokumentasis->foto_dokumentasi != "null"){

            Storage::disk('local')->delete('public/foto_dokumentasi', $dokumentasis->foto_dokumentasi);
        }

        $dokumentasis->delete();
        if($dokumentasis){
            //redirect dengan pesan sukses
            return redirect()->route('dokumentasi.index')->with(['success' => 'Data Berhasil Diubah!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('dokumentasi.index')->with(['error' => 'Data Gagal Diubah!']);
        }
    }
}
