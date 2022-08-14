<?php

namespace App\Http\Controllers\Backend\JenisPemasukan;

use App\Http\Controllers\Controller;
use App\Models\JenisPemasukan;
use Illuminate\Http\Request;

class JenisPemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jenispemasukans = JenisPemasukan::all();
        return view('backend.datatable_namajenis.index', compact('jenispemasukans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.form_tambahjenispemasukan.index');
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
            'nama_jenis'     => 'required'
        ]);

        $jenispemasukans = JenisPemasukan::create([
            'nama_jenis'     => $request->nama_jenis
        ]);

        if($jenispemasukans){
            //redirect dengan pesan sukses
            return redirect()->route('jenis.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('jenis.index')->with(['error' => 'Data Gagal Disimpan!']);
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

        $jenispemasukans = JenisPemasukan::find($id);
        return view('backend.edit_jenispemasukan.index', compact('jenispemasukans'));
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

        $jenispemasukans = JenisPemasukan::find($id);

        $jenispemasukans->update([
            'nama_jenis'   => $request->nama_jenis
        ]);

        if($jenispemasukans){
            //redirect dengan pesan sukses
            return redirect()->route('jenis.index')->with(['success' => 'Data Berhasil Diubah!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('jenis.index')->with(['error' => 'Data Gagal Diubah!']);
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
        $jenispemasukans = JenisPemasukan::findOrFail($id);
        $jenispemasukans->delete();

        if($jenispemasukans){
            //redirect dengan pesan sukses
        return redirect()->route('jenis.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
        return redirect()->route('jenis.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
