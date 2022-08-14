<?php

namespace App\Http\Controllers\Backend\DataPengurus;

use App\Http\Controllers\Controller;
use App\Models\DataPengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $penguruses = DataPengurus::all();
        return view('backend.datatable_datapengurus.index', compact('penguruses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('backend.form_datapengurus.index');
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
            'nama_lengkap'     => 'required',
            'alamat_lengkap'     => 'required',
            'jenis_kelamin'     => 'required',
            'nomor_telepon'     => 'required',
            'jabatan_kepengurusan'     => 'required'

        ]);

        if($request->file("foto")){
            $image = $request->file('foto');
            $image->storeAs('public/foto_pengurus', $image->hashName());
        }

        //upload image


        $penguruses = DataPengurus::create([
            'foto'     => $image->hashName(),
            'nama_lengkap'     => $request->nama_lengkap,
            'alamat_lengkap'     => $request->alamat_lengkap,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'nomor_telepon'     => $request->nomor_telepon,
            'jabatan_kepengurusan'     => $request->jabatan_kepengurusan
        ]);

        if($penguruses){
            //redirect dengan pesan sukses
            return redirect()->route('datapengurus.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datapengurus.index')->with(['error' => 'Data Gagal Disimpan!']);
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

        $datapengurus = DataPengurus::find($id);
        // dd($datapengurus);
        return view('backend.view_datapengurus.index', compact('datapengurus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datapengurus = DataPengurus::find($id);
        return view('backend.edit_datapengurus.index',compact('datapengurus'));
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
        $datapengurus = DataPengurus::findOrFail($id);

        if($request->file("foto") == ""){

            $datapengurus->update([
                'nama_lengkap'     => $request->nama_lengkap,
                'alamat_lengkap'     => $request->alamat_lengkap,
                'jenis_kelamin'     => $request->jenis_kelamin,
                'nomor_telepon'     => $request->nomor_telepon,
                'jabatan_kepengurusan'     => $request->jabatan_kepengurusan
            ]);
        }else{
            Storage::disk('local')->delete('public/foto_pengurus/'.$datapengurus->foto);

            $image = $request->file('foto');
            $image->storeAs('public/foto_pengurus', $image->hashName());

            $datapengurus->update([
                'foto'      => $image->hashName(),
                'nama_lengkap'     => $request->nama_lengkap,
                'alamat_lengkap'     => $request->alamat_lengkap,
                'jenis_kelamin'     => $request->jenis_kelamin,
                'nomor_telepon'     => $request->nomor_telepon,
                'jabatan_kepengurusan'     => $request->jabatan_kepengurusan
            ]);
        }

        if($datapengurus){
            //redirect dengan pesan sukses
            return redirect()->route('datapengurus.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datapengurus.index')->with(['error' => 'Data Gagal Disimpan!']);
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

        $datapengurus = DataPengurus::findOrFail($id);
        if($datapengurus->foto!="null"){

            Storage::disk('local')->delete('public/foto_pengurus'.$datapengurus->foto);
        }
        $datapengurus->delete();

        if($datapengurus){
            //redirect dengan pesan sukses
        return redirect()->route('datapengurus.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
        return redirect()->route('datapengurus.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    // public function collection(){
    //     $collection = new Collection(['Ketua DKM', 'Sekertaris', 'Bendahara', 'Pengurus']);

    //     dd($collection);
    // }
}
