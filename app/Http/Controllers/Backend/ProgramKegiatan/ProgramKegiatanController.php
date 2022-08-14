<?php

namespace App\Http\Controllers\Backend\ProgramKegiatan;

use App\Http\Controllers\Controller;
use App\Models\ProgramKegiatan;
use Illuminate\Http\Request;

class ProgramKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $programkegiatans = ProgramKegiatan::all();
        return view('backend.datatable_programkegiatan.index', compact('programkegiatans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.form_programkegiatan.index');
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
            'nama_kegiatan'     => 'required',
            'hari_kegiatan'     => 'required',
            'waktu_kegiatan'     => 'required',
            'deskripsi_kegiatan'     => 'required',
        ]);

        $programkegiatans = ProgramKegiatan::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'hari_kegiatan' => $request->hari_kegiatan,
            'waktu_kegiatan' => $request->waktu_kegiatan,
            'deskripsi_kegiatan' => $request->deskripsi_kegiatan
        ]);

        if($programkegiatans){
            //redirect dengan pesan sukses
            return redirect()->route('program-kegiatan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('program-kegiatan.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $programkegiatans = ProgramKegiatan::find($id);
        return view('backend.edit_programkegiatan.index',compact('programkegiatans'));
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
        $programkegiatans = ProgramKegiatan::findOrFail($id);

        $programkegiatans->update([
            'nama_kegiatan'   => $request->nama_kegiatan,
            'hari_kegiatan'   => $request->hari_kegiatan,
            'waktu_kegiatan'   => $request->waktu_kegiatan,
            'deskripsi_kegiatan'   => $request->deskripsi_kegiatan
        ]);

        if($programkegiatans){
            //redirect dengan pesan sukses
            return redirect()->route('program-kegiatan.index')->with(['success' => 'Data Berhasil Diubah!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('program-kegiatan.index')->with(['error' => 'Data Gagal Diubah!']);
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
        $programkegiatans = ProgramKegiatan::findOrFail($id);
        $programkegiatans->delete();

        if($programkegiatans){
            //redirect dengan pesan sukses
            return redirect()->route('program-kegiatan.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('program-kegiatan.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
