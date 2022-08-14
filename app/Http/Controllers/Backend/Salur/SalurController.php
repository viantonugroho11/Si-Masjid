<?php

namespace App\Http\Controllers\Backend\Salur;

use App\Http\Controllers\Controller;
use App\Models\DataKampanye;
use App\Models\Salur;
use Illuminate\Http\Request;

class SalurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $salurs = Salur::all();
        return view('backend.datatable_salur.index', compact('salurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $namaZis = DataKampanye::all();
        return view('backend.form_salur.index', compact('namaZis'));
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
            'kategori_salur'     => 'required',
            'tanggal_salur'     => 'required',
            'jumlah_salur'     => 'required',
            'deskripsi_salur'     => 'required'

        ]);

        $salurs = Salur::create([
            'kategori_salur'     => $request->kategori_salur,
            'tanggal_salur'     => $request->tanggal_salur,
            'jumlah_salur'     => $request->jumlah_salur,
            'deskripsi_salur'     => $request->deskripsi_salur
        ]);

        if($salurs){
            //redirect dengan pesan sukses
            return redirect()->route('salur.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('salur.index')->with(['error' => 'Data Gagal Disimpan!']);
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
