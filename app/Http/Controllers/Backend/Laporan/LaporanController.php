<?php

namespace App\Http\Controllers\Backend\Laporan;

use App\Http\Controllers\Controller;
use App\Models\DataKampanye;
use App\Models\ProfilMasjid;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profil = ProfilMasjid::all();
        $laporanzis = Transaksi::all();
        return view('backend.report_laporanzis.index', compact('laporanzis', 'profil'));
    }

    public function cetakAll()
    {
        //
        $cetakAll = Transaksi::all();
        return view('backend.report_laporanzis.cetak', compact('cetakAll'));
    }

    public function cetakForm()
    {
        //
        $namaZis = DataKampanye::all();
        return view('backend.report_laporanzis.form_cetak_kategori', compact('namaZis'));
    }

    public function cetakKategori($kategoriPrint)
    {
        //
        // dd(["Cetak : ".$kategoriPrint]);
        $cetak_kategori = Transaksi::all()->whereBetween('merchant_id',[$kategoriPrint])->last()->get();
        return view('backend.report_laporanzis.cetak_kategori', compact('cetak_kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
