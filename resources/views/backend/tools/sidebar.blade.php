<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/dashboard">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Beranda</span>
            </a>
        </li>
        @if (Auth::user()->role_id == 3 || Auth::user()->role_id == 1)
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#data-masjid" aria-expanded="false"
                    aria-controls="data-masjid">
                    <i class="icon-book menu-icon"></i>
                    <span class="menu-title">Data Masjid</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="data-masjid">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/profilmasjid">Profil</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/datapengurus">Pengurus</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/inventaris">Inventaris</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/dokumentasi">Dokumentasi</a></li>
                    </ul>
                </div>
            </li>
        @endif
        @if (Auth::user()->role_id == 3)
            <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link" href="/program-kegiatan">
                        <i class="icon-grid menu-icon"></i>
                        <span class="menu-title">Program Kegiatan</span>
                    </a>
                </li>
        @endif
        @if (Auth::user()->role_id == 2)
            <li class="nav-item">
                <a class="nav-link" href="/pemasukan" aria-expanded="false"
                aria-controls="form-elements">
                    <i class="icon-paper menu-icon"></i>
                    <span class="menu-title">Pemasukan</span>
                </a>
            </li>
        @endif
        @if (Auth::user()->role_id == 2)
            <li class="nav-item">
                <a class="nav-link" href="/pengeluaran" aria-expanded="false"
                aria-controls="form-elements">
                    <i class="icon-paper menu-icon"></i>
                    <span class="menu-title">Pengeluaran</span>
                </a>
            </li>
        @endif
        @if (Auth::user()->role_id == 3 || Auth::user()->role_id == 1)
        <li class="nav-item">
            <a class="nav-link" href="/laporankegiatan" aria-expanded="false"
            aria-controls="form-elements">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Laporan Kegiatan</span>
            </a>
        </li>
        @endif
        @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#laporan-keuangan" aria-expanded="false"
                    aria-controls="laporan-keuangan">
                    <i class="icon-bar-graph menu-icon"></i>
                    <span class="menu-title">Laporan Keuangan</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="laporan-keuangan">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="{{route('report.kasmasuk')}}">Kas Masuk</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('report.kaskeluar')}}">Kas Keluar</a></li>
                    </ul>
                </div>
            </li>
        @endif
        @if (Auth::user()->role_id == 4)
            <li class="nav-item">
                <a class="nav-link" href="/shohibulzis" aria-expanded="false"
                aria-controls="form-elements">
                    <i class="icon-paper menu-icon"></i>
                    <span class="menu-title">Data Shohibul ZIS</span>
                </a>
            </li>
        @endif
        @if (Auth::user()->role_id == 4)
        <li class="nav-item">
            <a class="nav-link" href="/kampanye" aria-expanded="false"
            aria-controls="form-elements">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Kampanye ZIS</span>
            </a>
        </li>
        @endif
        @if (Auth::user()->role_id == 4)
        <li class="nav-item">
            <a class="nav-link" href="/riwayat" aria-expanded="false"
            aria-controls="form-elements">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Riwayat Transaksi</span>
            </a>
        </li>
        @endif
        @if (Auth::user()->role_id == 4)
        <li class="nav-item">
            <a class="nav-link" href="/salur" aria-expanded="false"
            aria-controls="form-elements">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Salur ZIS</span>
            </a>
        </li>
        @endif
        @if (Auth::user()->role_id == 4)
        <li class="nav-item">
            <a class="nav-link" href="/dokumentasi" aria-expanded="false"
            aria-controls="form-elements">
                <i class="icon-archive menu-icon"></i>
                <span class="menu-title">Dokumentasi</span>
            </a>
        </li>
        @endif
        @if (Auth::user()->role_id == 4 || Auth::user()->role_id == 1)
            <li class="nav-item">
                <a class="nav-link" href="/laporanzis" aria-expanded="false"
                    aria-controls="laporan-zis">
                    <i class="icon-paper menu-icon"></i>
                    <span class="menu-title">Laporan ZIS</span>
                </a>
            </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
</nav>
