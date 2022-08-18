<?php

namespace App\Http\Controllers\Backend\Laporan;

use App\Http\Controllers\Controller;
use App\Models\DataKampanye;
use App\Models\ProfilMasjid;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use PDF;

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

    public function cetakKategori(Request $request)
    {
        //

        // dd(["Cetak : ".$kategoriPrint]);
        $cari = $request->kategoriPrint;
        // dd($cari);
        if ($cari == "semua") {
            $cetakKategori = Transaksi::all();
            $pdf = PDF::loadview('backend.report_laporanzis.cetak_kategori', compact('cetakKategori'));
            return $pdf->download('laporan-pegawai-pdf');
        } else {
            $cetakKategori = Transaksi::whereHas('getzis', function ($query) use ($cari) {
                $query->where('nama_kampanye', $cari);
            })->get();
            // dd($cetakKategori);

            // $cetak_kategori = Transaksi::all()->whereBetween('merchant_id',[$kategoriPrint])->last()->get();
            $pdf = PDF::loadview('backend.report_laporanzis.cetak_kategori', compact('cetakKategori'));
            return $pdf->download('laporan-pegawai-pdf');
        }
        // return view('backend.report_laporanzis.cetak_kategori', compact('cetak_kategori'));
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
