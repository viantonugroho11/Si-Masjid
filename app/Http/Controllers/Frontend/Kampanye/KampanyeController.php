<?php

namespace App\Http\Controllers\Frontend\Kampanye;

use App\Http\Controllers\Controller;
use App\Models\DataKampanye;
use Illuminate\Http\Request;

class KampanyeController extends Controller
{
     //
         /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {
         //
         $kampanyes = DataKampanye::all();
         return view('frontend.zis.index', compact('kampanyes'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         //
         return view('frontend.zis-detail.index');
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
             'nama_kampanye'     => 'required'
         ]);

         $kampanyes = DataKampanye::create([
             'kategori' => $request->kategori,
             'nama_kampanye' => $request->nama_kampanye
        ]);

         if($kampanyes){
             //redirect dengan pesan sukses
            return redirect()->route('kampanye.index')->with(['success' => 'Data Berhasil Disimpan!']);
         }else{
             //redirect dengan pesan error
             return redirect()->route('kampanye.index')->with(['error' => 'Data Gagal Disimpan!']);
        }

} 
}
