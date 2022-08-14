<?php

namespace App\Http\Controllers\Backend\ProfilMasjidn;

use App\Http\Controllers\Controller;
use App\Models\ProfilMasjid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilMasjidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profilmasjids = ProfilMasjid::all();
        // dd($profilmasjids);
        return view('backend.datatable_profilmasjid.index', compact('profilmasjids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.form_profilmasjid.index');
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
            'nama_masjid'     => 'required',
            'alamat_masjid'     => 'required',
            'telepon_masjid'     => 'required',
            'email_masjid'     => 'required',
            'instagram_masjid'     => 'required',
            'facebook_masjid'     => 'required',
            'youtube_masjid'     => 'required',
            'sejarah_masjid'     => 'required',
            'visi_masjid'     => 'required',
            'misi_masjid'     => 'required',
        ]);
        // Upload gambar
        if($request->file("logo_masjid")){
            $logomasjid = $request->file('logo_masjid');
            $logomasjid->storeAs('public/logo_masjid', $logomasjid->hashName());
        }

        $profilmasjids = ProfilMasjid::create([
            'logo_masjid'      => $logomasjid->hashName(),
            'nama_masjid'     => $request->nama_masjid,
            'alamat_masjid'     => $request->alamat_masjid,
            'telepon_masjid'     => $request->telepon_masjid,
            'email_masjid'     => $request->email_masjid,
            'instagram_masjid'     => $request->instagram_masjid,
            'facebook_masjid'     => $request->facebook_masjid,
            'youtube_masjid'     => $request->youtube_masjid,
            'sejarah_masjid'     => $request->sejarah_masjid,
            'visi_masjid'     => $request->visi_masjid,
            'misi_masjid'     => $request->misi_masjid
        ]);

        if($profilmasjids){
            //redirect dengan pesan sukses
            return redirect()->route('profilmasjid.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('profilmasjid.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $profilmasjids = ProfilMasjid::find($id);
        // dd($datapengurus);
        return view('backend.view_profilmasjid.index', compact('profilmasjids'));
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
        $profilmasjids = ProfilMasjid::find($id);
        return view('backend.edit_profilmasjid.index',compact('profilmasjids'));
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
        $profilmasjids = ProfilMasjid::findOrFail($id);

        if($request->file("logo_masjid") == ""){

            $profilmasjids->update([
                'nama_masjid'     => $request->nama_masjid,
                'alamat_masjid'     => $request->alamat_masjid,
                'telepon_masjid'     => $request->telepon_masjid,
                'email_masjid'     => $request->email_masjid,
                'instagram_masjid'     => $request->instagram_masjid,
                'facebook_masjid'     => $request->facebook_masjid,
                'youtube_masjid'     => $request->youtube_masjid,
                'sejarah_masjid'     => $request->sejarah_masjid,
                'visi_masjid'     => $request->visi_masjid,
                'misi_masjid'     => $request->misi_masjid
            ]);
        }else{
            Storage::disk('local')->delete('public/logo_masjid/'.$profilmasjids->logo_masjid);

            $logomasjid = $request->file('logo_masjid');
            $logomasjid->storeAs('public/logo_masjid', $logomasjid->hashName());

            $profilmasjids->update([
                'logo_masjid'      => $logomasjid->hashName(),
                'nama_masjid'     => $request->nama_masjid,
                'alamat_masjid'     => $request->alamat_masjid,
                'telepon_masjid'     => $request->telepon_masjid,
                'email_masjid'     => $request->email_masjid,
                'instagram_masjid'     => $request->instagram_masjid,
                'facebook_masjid'     => $request->facebook_masjid,
                'youtube_masjid'     => $request->youtube_masjid,
                'sejarah_masjid'     => $request->sejarah_masjid,
                'visi_masjid'     => $request->visi_masjid,
                'misi_masjid'     => $request->misi_masjid
            ]);
        }

        if($profilmasjids){
            //redirect dengan pesan sukses
            return redirect()->route('profilmasjid.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('profilmasjid.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    }
}
