<?php

namespace App\Http\Controllers\Backend\Inventaris;

use App\Http\Controllers\Controller;
use App\Models\DataInventaris;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //



        $inventarisis = DataInventaris::all();
        return view('backend.datatable_inventaris.index', compact('inventarisis'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tanggal = Carbon::now()->format('Y-m-d');
        $now = Carbon::now();
        $tahunBulan = $now->year . $now->month;
        $cek = DataInventaris::count();
        if($cek == 0){
            $urut = 100001;
            $nomer = 'INV' . $tahunBulan . $urut;

        }else{

            $ambil = DataInventaris::all()->last();
            $ambil = (int)substr($ambil->kode_barang,-6) + 1;
            $nomer = 'INV' . $tahunBulan . $ambil;
        }
        // $nomer();
        return view('backend.form_inventaris.index', compact('nomer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Dd($request->all()) ;
        $inventarisis = DataInventaris::create([
            'nama_barang'   => $request->nama_barang,
            'jenis_barang'   => $request->jenis_barang,
            'kode_barang'   => $request->kode_barang,
            'jumlah'   => $request->jumlah,
            'satuan'   => $request->satuan,
            'kondisi_barang'   => $request->kondisi_barang,
            'tanggal_pembelian_barang'   => $request->tanggal_pembelian_barang,
            'keterangan'   => $request->keterangan
        ]);

        if($inventarisis){
            //redirect dengan pesan sukses
            return redirect()->route('inventaris.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('inventaris.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $inventaris = DataInventaris::find($id);
        return view('backend.edit_inventaris.index', compact('inventaris'));
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

        $inventaris = DataInventaris::find($id);

        $inventaris->update([
            'nama_barang'   => $request->nama_barang,
            'jenis_barang'   => $request->jenis_barang,
            'kode_barang'   => $request->kode_barang,
            'jumlah'   => $request->jumlah,
            'satuan'   => $request->satuan,
            'kondisi_barang'   => $request->kondisi_barang,
            'tanggal_pembelian_barang'   => $request->tanggal_pembelian_barang,
            'keterangan'   => $request->keterangan
        ]);

        if($inventaris){
            //redirect dengan pesan sukses
            return redirect()->route('inventaris.index')->with(['success' => 'Data Berhasil Diubah!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('inventaris.index')->with(['error' => 'Data Gagal Diubah!']);
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
        $inventaris = DataInventaris::findOrFail($id);
        $inventaris->delete();

        if($inventaris){
            //redirect dengan pesan sukses
        return redirect()->route('inventaris.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
        return redirect()->route('inventaris.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
