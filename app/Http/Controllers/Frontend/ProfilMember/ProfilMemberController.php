<?php

namespace App\Http\Controllers\Frontend\ProfilMember;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilMemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('Member');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('frontend.profil-member.index', compact('users'));
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
        $users = User::find($id);
        return view('frontend.edit_profil.index', compact('users'));
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
        $users = User::findOrFail($id);

        if($request->file("foto_profil") == ""){

            $users->update([
                'name' => $request->name,
                'email' => $request->email,
                'alamat_lengkap' => $request->alamat_lengkap,
                'jenis_kelamin' => $request->jenis_kelamin,
                'nomor_telepon' => $request->nomor_telepon
            ]);
        }else{
            Storage::disk('local')->delete('public/foto_member/'.$users->foto_profil);

            $fotoprofil= $request->file('foto_profil');
            $fotoprofil->storeAs('public/foto_member', $fotoprofil->hashName());

            $users->update([
                'name' => $request->name,
                'email' => $request->email,
                'alamat_lengkap' => $request->alamat_lengkap,
                'jenis_kelamin' => $request->jenis_kelamin,
                'nomor_telepon' => $request->nomor_telepon,
                'foto_profil' => $fotoprofil->hashName()
            ]);
        }

        if($users){
            //redirect dengan pesan sukses
            return redirect()->route('profilmember.index')->with(['success' => 'Data Berhasil Diubah!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('profilmember.index')->with(['error' => 'Data Gagal Diubah!']);
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
