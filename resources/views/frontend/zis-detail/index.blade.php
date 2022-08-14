@extends('frontend.master')
@section('contents')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn mb-3">{{ $ziskampanyes->kategori }}</h1>
                <a href="/zis" class="h5 text-white">ZIS</a>
                <i class="fa fa-angle-double-right text-white px-2"></i>
                <a href="" class="h5 text-white">ZIS Detail</a>
            </div>
        </div>
    </div>

    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">

                <div class="col-lg-8">
                    <img class="img-fluid w-100 rounded mb-5" src="{{ Storage::url('public/foto_kampanye/').$ziskampanyes->foto_kampanye }}" alt="">
                    <h4 class="mb-4">Deskripsi</h4>
                    <p>{{ $ziskampanyes->deskripsi_kampanye }}</p>
                </div>

                <div class="col-lg-4">
                    <form action="{{route('transaksi.midtrans')}}" method="Post">
                        @csrf


                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <ul class="list-group">
                            <h2 class="mb-4">{{ $ziskampanyes->nama_kampanye }}</h2>
                            <li class="list-group-item active" aria-current="true">
                                <h3 class="text-white mb-0">Rincian</h3>
                            </li>
                            <li class="list-group-item"><span class="text-primary">Biaya Perorang :</span> {{ $ziskampanyes->harga }}</li>
                            <input name="harga" value="{{ $ziskampanyes->harga }}" hidden>
                            <input name="id_zis" value="{{ $ziskampanyes->id }}" hidden>
                            <li class="list-group-item"><span class="text-primary">Jumlah Orang :</span> <div class="form-group">
                                  <select class="form-control" name="jumlah" id="getcount" onchange="myFunction()">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                  </select>
                            </div>
                            </li>
                            <li class="list-group-item"><span class="text-primary">Total :</span> <h5><div id="jumlah">
                                </div></h5></li>
                            <a target="blank">
                            <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
                            </a>
                        </ul>
                    </div>
                </form>
                        <div class="bg-primary rounded p-4">
                            <h3 class="text-white mb-2" color="white">Bagikan Informasi</h3>
                            <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$('select').on("change", function() {
    console.log(this.text);
    console.log(this.val);
});
$('#getsum').on("change", function() {
    console.log(this.text);
    console.log(this.val);
});
</script>
@endsection

@push('jsScript')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$('select').on("change", function() {
    console.log(this.text);
    console.log(this.val)
}); --}}
<script>
    function myFunction(){
var e = document.getElementById("getcount");
var sum = e.options[e.selectedIndex].value;//change it here

console.log(sum * {{ $ziskampanyes->harga }});
var jumlah = sum * {{ $ziskampanyes->harga }}
$("#jumlah").text(jumlah);

}
function mySumDonasi(event){
    console.log(event.target.val);
    var jumlah = event.target.val * {{ $ziskampanyes->harga }} ;
    console.log(jumlah);
}
</script>
@endpush
