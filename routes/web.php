<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\DataPengurus\PengurusController;
use App\Http\Controllers\Backend\Dokumentasi\DokumentasiController;
use App\Http\Controllers\Backend\Inventaris\InventarisController;
use App\Http\Controllers\Backend\JenisPemasukan\JenisPemasukanController;
use App\Http\Controllers\Backend\Kampanye\KampanyeController;
use App\Http\Controllers\Backend\Laporan\LaporanController;
use App\Http\Controllers\Backend\LaporanKegiatan\LaporanKegiatanController;
use App\Http\Controllers\Backend\Pemasukan\PemasukanController;
use App\Http\Controllers\Backend\Pengeluaran\PengeluaranController;
use App\Http\Controllers\Backend\ProfilMasjidn\ProfilMasjidController;
use App\Http\Controllers\Backend\ProgramKegiatan\ProgramKegiatanController;
use App\Http\Controllers\Backend\Riwayat\RiwayatController;
use App\Http\Controllers\Backend\Salur\SalurController;
use App\Http\Controllers\Backend\ShohibulZis\ShohibulZisController;
use App\Http\Controllers\Frontend\EditPassword\EditPasswordController;
use App\Http\Controllers\Frontend\Galeri\GaleriController;
use App\Http\Controllers\Frontend\KampanyeDetail\KampanyeDetailController;
use App\Http\Controllers\Frontend\ProfilMember\ProfilMemberController;
use App\Http\Controllers\Frontend\Program\ProgramController;
use App\Http\Controllers\Frontend\Register\RegisterController as RegisterRegisterController;
use App\Http\Controllers\Frontend\ZisKampanye\ZisKampanyeController;
use App\Models\LaporanKegiatan;
use App\Models\Pemasukan;
use App\Models\ProfilMasjid;
use App\Models\ProgramKegiatan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/dashboard', function () {
//     return view('backend.home.index');
// });
//Pengambilan data dari controller lain
Route::post('/transaksi',[App\Http\Controllers\Config\MidtransController::class,'store'])->name('transaksi.midtrans');
Route::middleware(['Member','auth'])->group(function () {
    // Route::get('/ziskampanye',[ZisKampanyeController::class,'index'])->name('ziskampanye.index');
    // Route::get('/ziskampanye/{id}',[ZisKampanyeController::class,'show'])->name('ziskampanye.show');
});
Route::resource('ziskampanye', ZisKampanyeController::class);
Route::get('/dashboard',[App\Http\Controllers\Backend\Home\HomeController::class,'index'])->name('dashboard.index');
Route::get('/zis',[App\Http\Controllers\Frontend\ZisKampanye\ZisKampanyeController::class,'index'])->name('ziskampanye.index');
Route::get('/',[App\Http\Controllers\Frontend\Program\ProgramController::class,'index'])->name('program.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cetakAll', [App\Http\Controllers\Backend\Laporan\LaporanController::class, 'cetakAll'])->name('cetakAll');
Route::get('/cetakForm', [App\Http\Controllers\Backend\Laporan\LaporanController::class, 'cetakForm'])->name('cetakForm');
Route::get('/cetakKategori/{kategoriPrint}', [App\Http\Controllers\Backend\Laporan\LaporanController::class, 'cetakKategori'])->name('cetakKategori');

// Route::get('/inventaris/create',function(){
//     return view('backend.form_inventaris.index');
// });

// Route::get('/datapengurus/create',function(){
//     return view('backend.form_datapengurus.index');
// });

Route::get('/kampanye/create',function(){
    return view('backend.form_kampanye.index');
});

Route::get('/dokumentasi/create',function(){
    return view('backend.form_dokumentasi.index');
});

Route::get('/keluarkas/create',function(){
    return view('backend.form_keluarkas.index');
});

Route::get('/profilmasjid/create',function(){
    return view('backend.form_profilmasjid.index');
});

Route::get('/profilmasjid/edit',function(){
    return view('backend.edit_profilmasjid.index');
});

Route::get('/profilmasjid',function(){
    return view('backend.datatable_profilmasjid.index');
});

Route::get('/profilmasjid/view',function(){
    return view('backend.view_profilmasjid.index');
});

Route::get('/datapengurus/view',function(){
    return view('backend.view_datapengurus.index');
});

Route::get('/dokumentasi/view',function(){
    return view('backend.view_dokumentasi.index');
});

// Route::get('/datapengurus',function(){
//     return view('backend.datatable_datapengurus.index');
// });

// Route::get('/inventaris',function(){
//     return view('backend.datatable_inventaris.index');
// });

// Route::get('/dokumentasi',function(){
//     return view('backend.datatable_dokumentasi.index');
// });
Route::get('/kampanye',function(){
    return view('backend.datatable_kampanye.index');
});
Route::get('/pemasukan',function(){
    return view('backend.datatable_pemasukan.index');
});
Route::get('/pemasukan/jenis',function(){
    return view('backend.datatable_namajenis.index');
});
Route::get('/pemasukan/jenis/create',function(){
    return view('backend.form_tambahjenispemasukan.index');
});
Route::get('/pemasukan/create',function(){
    return view('backend.form_masukkas.index');
});
Route::get('/program-kegiatan',function(){
    return view('backend.datatable_programkegiatan.index');
});
Route::get('/pengeluaran',function(){
    return view('backend.datatable_pengeluaran.index');
});
Route::get('/laporankegiatan',function(){
    return view('backend.datatable_laporankegiatan.index');
});
Route::get('/laporankegiatan/lpj',function(){
    return view('backend.view_laporankegiatan.index');
});
Route::get('/shohibulzis',function(){
    return view('backend.datatable_shohibulzis.index');
});
Route::get('/riwayat',function(){
    return view('backend.datatable_riwayattransaksi.index');
});
Route::get('/laporanzis',function(){
    return view('backend.report_laporanzis.index');
});
Route::get('/salur',function(){
    return view('backend.datatable_salur.index');
});

// Front End
Route::get('/tentang',function(){
    return view('frontend.tentang.index');
});
Route::get('/zis/detail',function(){
    return view('frontend.zis-detail.index');
});
Route::get('/galeri',function(){
    return view('frontend.galeri.index');
});
Route::get('/login-member',function(){
    return view('frontend.login-member.index');
});
Route::post('/login-member',[App\Http\Controllers\LoginMemberController::class,'loginMember'])->name('loginMember');
Route::get('/profil-member',function(){
    return view('frontend.profil-member.index');
});


Route::middleware('auth')->group(function () {
    //Route Resource Controller untuk menampilkan data
    Route::resource('datapengurus', PengurusController::class);
    Route::resource('inventaris', InventarisController::class);
    Route::resource('dokumentasi', DokumentasiController::class);
    Route::resource('kampanye', KampanyeController::class);
    Route::resource('pemasukan', PemasukanController::class);
    Route::resource('pengeluaran', PengeluaranController::class);

    Route::resource('program', ProgramController::class);
    Route::resource('profilmasjid', ProfilMasjidController::class);
    Route::resource('laporankegiatan', LaporanKegiatanController::class);
    Route::resource('laporanzis', LaporanController::class);
    Route::resource('shohibulzis', ShohibulZisController::class);
    Route::resource('galeri', GaleriController::class);
    Route::resource('riwayat', RiwayatController::class);
    Route::resource('salur', SalurController::class);
    Route::resource('pemasukan/jenis', JenisPemasukanController::class);
    Route::resource('program-kegiatan', ProgramKegiatanController::class);
    Route::resource('profilmember', ProfilMemberController::class);
    Route::resource('editpassword', EditPasswordController::class);
});

//Route Edit Controller
Route::get('/datapengurus/edit',function(){
    return view('backend.edit_datapengurus.index');
});
Route::get('/dokumentasi/edit',function(){
    return view('backend.edit_dokumentasi.index');
});
Route::get('/kampanye/edit',function(){
    return view('backend.edit_kampanye.index');
});

// Route::get('/inventaris/edit',function(){
//     return view('backend.edit_inventaris.index');
// });

//Verifikasi
Route::get('send-mail', function () {

    $details = [
        'title' => 'Mail from Al Manar Foundation',
        'body' => 'Selamat Bergabung Shohibul ZIS'
    ];

    \Mail::to('dimas@almanar.sch.id')->send(new \App\Mail\Verify($details));

    dd("Email is Sent.");
});

Route::get('/transaksi/finish', [App\Http\Controllers\Config\MidtransController::class, 'finish'])->name('transaksi.finish');
Route::post('/transaksi/notifikasi-handler', [App\Http\Controllers\Config\MidtransController::class, 'notifikasi'])->name('transaksi.notifikasi');
