<?php

namespace App\Http\Controllers\Backend\Report;

use App\Http\Controllers\Controller;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use PDF;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function kasmasuk()
    {
        return view('backend.report.report_kasmasuk');
    }

    public function kasmasjid()
    {
        return view('backend.report.report_kasmasjid');
    }

    public function kaskeluar()
    {
        return view('backend.report.report_kaskeluar');
    }

    public function kasmasuk_pdf(Request $request)
    {
        //
        $tanggalMasuk = $request->tanggal_awal;
        $tanggalKeluar = $request->tanggal_akhir;

        $reporttanggal = Pemasukan::whereBetween('tanggal_pemasukan', [$tanggalMasuk, $tanggalKeluar])->get();
        // dd($reporttanggal);
        $pdf = PDF::loadView('backend.report.report_kasmasuk_pdf', compact('reporttanggal'));
        return $pdf->download('report_kasmasuk_pdf.pdf');
        // dd(["Cetak : ".$kategoriPrint]);
        // $cari = $request->kategoriPrint;
        // dd($cari);
        // if ($cari == "semua") {
        //     $cetakKategori = Transaksi::all();
        //     $pdf = PDF::loadview('backend.report_laporanzis.cetak_kategori', compact('cetakKategori'));
        //     return $pdf->download('laporan-pegawai-pdf');
        // } else {
        //     $cetakKategori = Transaksi::whereHas('getzis', function ($query) use ($cari) {
        //         $query->where('nama_kampanye', $cari);
        //     })->get();
        //     // dd($cetakKategori);

        //     // $cetak_kategori = Transaksi::all()->whereBetween('merchant_id',[$kategoriPrint])->last()->get();
        //     $pdf = PDF::loadview('backend.report_laporanzis.cetak_kategori', compact('cetakKategori'));
        //     return $pdf->download('laporan-transaksi-pdf.pdf');
        // }
    }

    public function kaskeluar_pdf(Request $request)
    {
        $tanggalMasuk = $request->tanggal_awal;
        $tanggalKeluar = $request->tanggal_akhir;

        $reporttanggal = Pengeluaran::whereBetween('tanggal_pengeluaran', [$tanggalMasuk, $tanggalKeluar])->get();
        $pdf = PDF::loadView('backend.report.report_kasmasuk_pdf', compact('reporttanggal'));
        return $pdf->download('report_kasmasuk_pdf.pdf');
    }
}
