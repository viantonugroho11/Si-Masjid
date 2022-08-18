<?php

namespace App\Http\Controllers\Frontend\Program;

use App\Http\Controllers\Controller;
use App\Models\ProgramKegiatan;
use App\Models\Salur;
use App\Models\ShohibulZis;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $program = ProgramKegiatan::all();
        $programcount = ProgramKegiatan::count();
        $jumlahsalur = Salur::sum('jumlah_salur');
        // dd($jumlahsalur);
        $jumlahzis = User::where('role_id', '5')->count();
        // $jumlahzis = Transaksi::where('type', '=', 'ZKT')
        // ->where('transaction_status','=','settlement')->count();
        // return view('frontend.mainmenu.index', compact('program', 'programcount', 'jumlahzis'));
        return view('frontend.mainmenu.index', compact('program', 'programcount', 'jumlahsalur', 'jumlahzis'));
        // return view('frontend.mainmenu.index', compact('program','jumlahzis'));
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
