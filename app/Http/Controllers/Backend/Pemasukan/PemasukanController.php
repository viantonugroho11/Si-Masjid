<?php

namespace App\Http\Controllers\Backend\Pemasukan;

use App\Http\Controllers\Controller;
use App\Models\Pemasukan;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pemasukans = Pemasukan::all();
        return view('backend.datatable_pemasukan.index', compact('pemasukans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.form_masukkas.index');
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
            'jenis_pemasukan'     => 'required',
            'jumlah_pemasukan'     => 'required',
            'tanggal_pemasukan'     => 'required',
            'deskripsi_pemasukan'     => 'required'

        ]);

        $pemasukans = Pemasukan::create([
            'jenis_pemasukan'     => $request->jenis_pemasukan,
            'jumlah_pemasukan'     => $request->jumlah_pemasukan,
            'tanggal_pemasukan'     => $request->tanggal_pemasukan,
            'deskripsi_pemasukan'     => $request->deskripsi_pemasukan
        ]);

        if($pemasukans){
            //redirect dengan pesan sukses
            return redirect()->route('pemasukan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pemasukan.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $pemasukans = Pemasukan::find($id);
        return view('backend.edit_pemasukan.index',compact('pemasukans'));
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
        $pemasukans = Pemasukan::find($id);

        $pemasukans->update([
            'jenis_pemasukan'     => $request->jenis_pemasukan,
            'jumlah_pemasukan'     => $request->jumlah_pemasukan,
            'tanggal_pemasukan'     => $request->tanggal_pemasukan,
            'deskripsi_pemasukan'     => $request->deskripsi_pemasukan
        ]);

        if($pemasukans){
            //redirect dengan pesan sukses
            return redirect()->route('pemasukan.index')->with(['success' => 'Data Berhasil Diubah!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pemasukan.index')->with(['error' => 'Data Gagal Diubah!']);
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
        $pemasukans = Pemasukan::findOrFail($id);
        $pemasukans->delete();

        if($pemasukans){
            //redirect dengan pesan sukses
            return redirect()->route('pemasukan.index')->with(['success' => 'Data Berhasil Diubah!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pemasukan.index')->with(['error' => 'Data Gagal Diubah!']);
        }
    }
}
