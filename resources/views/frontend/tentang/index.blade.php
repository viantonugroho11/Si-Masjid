@extends('frontend.master')
@section('contents')

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn mb-3">Tentang</h1>
            <a href="/" class="h5 text-white">Beranda</a>
            <i class="fa fa-angle-double-right text-white px-2"></i>
            <a href="/tentang" class="h5 text-white">Tentang</a>
        </div>
    </div>
</div>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Tentang</h5>
                    <h1 class="mb-0">Sejarah Masjid Al Manar</h1>
                </div>
                <p class="mb-4">Masjid Al Manar adalah masjid yang terletak di Jl. Pondok Kelapa, No. 26, RT 009/012, Duren Sawit, Jakarta Timur. Masjid ini satu bangunan dengan Yayasan Wakaf Pesantren Al Manar, namun masjid ini juga dipergunakan untuk masyarakat sekitar. Nama masjid Al Manar diambil dari sebuah kitab tafsir yaitu Tafsir Al Manar yang ditulis oleh Syeikh Rasid Ridha' atau Sayyid Muhammad Rasyid Ridha', beliau berasal dari Lebanon. Beliau merupakan keturunan Al Husain cucu Rasulullah Shalallahu 'Alaihi Wasallam, ayah beliau merupakan seorang ulama dari Ahli Thariqah Syadziliyah.</p>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Visi Masjid</h1>
        </div>
        <ul>
            Terwujudnya Masjid Al Manar yang makmur, mandiri, dan modern, serta mampu melaksanakan fungsinya sebagai pusat peribadatan, wahana musyawarah dan silaturrahim, lembaga dakwah, pendidikan, pengembangan ilmu, yang dilandasi oleh keimanan dan ketaqwaan kepada Allah SWT
        </ul>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Misi Masjid</h1>
        </div>
        <ul>
            <li>Menyelenggarakan berbagai macam kegiatan untuk memakmurkan masjid dan meningkatkan syiar Islam.</li>
            <li>Membentuk unit &ndash; unit kerja yang bergerak dalam bidang keuangan dan bisnis untuk menggali dana guna membiayai pengelolaan masjid dan kemaslahatan umat.</li>
            <li>Mewujudkan terjaganya kesucian, kebersihan dan ketertiban masjid.</li>
            <li>Mewujudkan sistem pengelolaan masjid yang modern dan professional.</li>
            <li>Menyelenggarakan kegiatan &ndash; kegiatan peribadatan, dakwah dan pendidikan dalam rangka membimbing umat agar memiliki keteguhan iman dan taqwa, akhlaqul karimah, kesalihan individu dan sosial, semangat ukhuwah Islamiyah, patriotism, berilmu, patuh pada hukum, dan peduli lingkungan.</li>
        </ul>
    </div>
</div>
@endsection
