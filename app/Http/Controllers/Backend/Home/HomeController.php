<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use App\Models\Salur;
use App\Models\ShohibulZis;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $administrators = User::all();
        $jumlah_member = ShohibulZis::all()->count();
        $jumlah_transaksi = Transaksi::all()->count();

        $total_salur = Salur::all()->sum('jumlah');

        $total_pemasukan = Pemasukan::sum('jumlah_pemasukan');
        $total_pengeluaran = Pengeluaran::sum('jumlah_pengeluaran');
        $total = $total_pemasukan - $total_pengeluaran;
        // return view('backend.home.index', compact('administrators', 'jumlah_member','jumlah_transaksi','total'));
        return view('backend.home.index', compact('administrators', 'jumlah_member','jumlah_transaksi','total_salur','total'));
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {

        return view('backend.home.index');
    }
}
