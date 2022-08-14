<?php

namespace App\Http\Controllers\Backend\Pengeluaran;

use App\Http\Controllers\Controller;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pengeluarans = Pengeluaran::all();
        return view('backend.datatable_pengeluaran.index', compact('pengeluarans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.form_keluarkas.index');
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
            'jenis_pengeluaran'     => 'required',
            'jumlah_pengeluaran'     => 'required',
            'tanggal_pengeluaran'     => 'required',
            'deskripsi_pengeluaran'     => 'required'
        ]);
        // Upload gambar
        if($request->file("bukti_pengeluaran")){
            $buktipengeluaran = $request->file('bukti_pengeluaran');
            $buktipengeluaran->storeAs('public/bukti_pengeluaran', $buktipengeluaran->hashName());
        }

        $pengeluarans = Pengeluaran::create([
            'jenis_pengeluaran' => $request->jenis_pengeluaran,
            'jumlah_pengeluaran' => $request->jumlah_pengeluaran,
            'tanggal_pengeluaran' => $request->tanggal_pengeluaran,
            'deskripsi_pengeluaran' => $request->deskripsi_pengeluaran,
            'bukti_pengeluaran' => $buktipengeluaran->hashName()
        ]);

        if($pengeluarans){
            //redirect dengan pesan sukses
            return redirect()->route('pengeluaran.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pengeluaran.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $pengeluarans = Pengeluaran::find($id);
        return view('backend.edit_pengeluaran.index',compact('pengeluarans'));
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
        $pengeluarans = Pengeluaran::findOrFail($id);

        if($request->file("bukti_pengeluaran") == ""){

            $pengeluarans->update([
                'jenis_pengeluaran' => $request->jenis_pengeluaran,
                'jumlah_pengeluaran' => $request->jumlah_pengeluaran,
                'tanggal_pengeluaran' => $request->tanggal_pengeluaran,
                'deskripsi_pengeluaran' => $request->deskripsi_pengeluaran
            ]);
        }else{
            Storage::disk('local')->delete('public/bukti_pengeluaran/'.$pengeluarans->bukti_pengeluaran);

            $buktipengeluaran= $request->file('bukti_pengeluaran');
            $buktipengeluaran->storeAs('public/bukti_pengeluaran', $buktipengeluaran->hashName());

            $pengeluarans->update([
                'jenis_pengeluaran' => $request->jenis_pengeluaran,
                'jumlah_pengeluaran' => $request->jumlah_pengeluaran,
                'tanggal_pengeluaran' => $request->tanggal_pengeluaran,
                'deskripsi_pengeluaran' => $request->deskripsi_pengeluaran,
                'bukti_pengeluaran' => $buktipengeluaran->hashName()
            ]);
        }

        if($pengeluarans){
            //redirect dengan pesan sukses
            return redirect()->route('pengeluaran.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pengeluaran.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $pengeluarans = Pengeluaran::findOrFail($id);
        if($pengeluarans->bukti_pengeluaran!="null"){
            Storage::disk('local')->delete('public/bukti_pengeluaran'.$pengeluarans->bukti_pengeluaran);
        }
        $pengeluarans->delete();

        if($pengeluarans){
            //redirect dengan pesan sukses
        return redirect()->route('pengeluaran.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
        return redirect()->route('pengeluaran.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
