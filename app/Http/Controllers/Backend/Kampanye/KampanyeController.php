<?php

namespace App\Http\Controllers\Backend\Kampanye;

use App\Http\Controllers\Controller;
use App\Models\DataKampanye;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KampanyeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kampanyes = DataKampanye::all();
        return view('backend.datatable_kampanye.index', compact('kampanyes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.form_kampanye.index');
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
        // dd($request->all());
        $this->validate($request,[
            'kategori'     => 'required',
            'nama_kampanye'     => 'required',
            'deskripsi_kampanye'     => 'required',
            'harga'     => 'required',
            'status'     => 'required'
        ]);
        // Upload gambar
        if($request->file("foto_kampanye")){
            $fotoKampanye = $request->file('foto_kampanye');
            $fotoKampanye->storeAs('public/foto_kampanye', $fotoKampanye->hashName());
        }

        $kampanyes = DataKampanye::create([
            'kategori' => $request->kategori,
            'nama_kampanye' => $request->nama_kampanye,
            'foto_kampanye' => $fotoKampanye->hashName(),
            'deskripsi_kampanye' => $request->deskripsi_kampanye,
            'harga' => $request->harga,
            'status' => $request->status
        ]);

        if($kampanyes){
            //redirect dengan pesan sukses
            return redirect()->route('kampanye.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('kampanye.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $kampanyes = DataKampanye::find($id);
        return view('backend.edit_kampanye.index',compact('kampanyes'));
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
        $kampanyes = DataKampanye::findOrFail($id);

        if($request->file("foto_kampanye") == ""){

            $kampanyes->update([
                'kategori'     => $request->kategori,
                'nama_kampanye'     => $request->nama_kampanye,
                'deskripsi_kampanye'     => $request->deskripsi_kampanye,
                'harga'     => $request->harga,
                'status'     => $request->status
            ]);
        }else{
            Storage::disk('local')->delete('public/foto_kampanye/'.$kampanyes->foto_kampanye);

            $fotoKampanye= $request->file('foto_kampanye');
            $fotoKampanye->storeAs('public/foto_kampanye', $fotoKampanye->hashName());

            $kampanyes->update([
                'kategori'     => $request->kategori,
                'nama_kampenye'     => $request->nama_kampenye,
                'foto_kampanye'      => $fotoKampanye->hashName(),
                'deskripsi_kampanye'     => $request->deskripsi_kampanye,
                'harga'     => $request->harga,
                'status'     => $request->status
            ]);
        }

        if($kampanyes){
            //redirect dengan pesan sukses
            return redirect()->route('kampanye.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('kampanye.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $kampanyes = DataKampanye::findOrFail($id);
        if($kampanyes->foto_kampanye!="null"){
            Storage::disk('local')->delete('public/foto_kampanye'.$kampanyes->foto_kampanye);
        }
        $kampanyes->delete();

        if($kampanyes){
            //redirect dengan pesan sukses
        return redirect()->route('kampanye.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
        return redirect()->route('kampanye.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
