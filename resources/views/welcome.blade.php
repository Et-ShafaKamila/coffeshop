@extends('layouts.template')
@section('content')
<h1 class="mt-4">Home</h1>
<div class="row">
  <div class="col-xl-12">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('assets/img/gambar4.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('assets/img/gambar3.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('assets/img/gambar1.jpg') }}" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-xl-4"></div>
  <div class="col-xl-4">
    <center><h4>Sejarah BeCoff</h4></center>
  </div>
  <div class="col-xl-4"></div>
</div>
<div class="row">
  <div class="col-xl-2"></div>
  <div class="col-xl-8">
    <center>
      <!-- <img src="{{ asset('assets/img/logo.jpeg') }}" class="img-fluid rounded-circle my-4">s -->
      <p style="text-align: justify;">
        Awal tahun 2017 dengan latar belakang yang dimiliki oleh Benediktus Distivianto Yoci setelah beberapa waktu bekerja di berbagai perusahaan mendirikan usaha produksi kopi mengingat perkembangan masa depan yang sulit dalam ketersediaan lapangan kerja dan situasi ekonomi global menjadi pemikiran
        untuk segera membangun usaha mandiri yang kedepan dapat menjadi ladang penghasilan bagi keluarga dan memberikan peluang lapangan kerja bagi masyarakat khususnya di Bondowoso dan Kabupaten Bondowoso dinilai memiliki potensi sumber daya alam cukup besar dengan dukungan pemerintah daerah
        kabupaten Bondowoso yang menyatakan dalam slogan Bondowoso Republik Kopi. Dengan pengalaman sebagai top manajemen di group perusahaaan yang bergerak dalam bidang perkebunan kopi, kakao, karet dan ekspor tembakau jenis Na Ogst menjadikan motivasi untuk mendirikan usaha mandiri khususnya 
        yang bergerak dalam produksi kopi. Pada tahun 2018 Becoff Coffee Indonesia menjadi usaha yang secara resmi dibangun dengan memproduksi berbagai produk hilir kopi dari biji kopi Arabika dan Robusta.
      </p>
    </center>
  </div>
  <div class="col-xl-2"></div>
</div>

<div class="row mt-4">
  <div class="col-xl-4"></div>
  <div class="col-xl-4">
    <center><h4>VISI</h4>
    <p style="text-align: center;">
        Menjadi usaha mandiri yang dapat memenuhi<br>
        kebutuhan dengan produk bermutu, berkualitas<br>
        dan menjadi pilihan konsumen<br>

      </p>
    </center>
  </div>
</div>

<div class="row mt-4">
  <div class="col-xl-4"></div>
  <div class="col-xl-4">
    <center><h4>MISI</h4>
    <p style="text-align: center;">
        Menjadi perusahaan industri yang dapat<br>
        membawa nama Bondowoso di bidang industri<br>
        kopi nasional

      </p>
    </center>
  </div>
</div>


<div class="row mt-4">
  <div class="col-xl-4"></div>
  <div class="col-xl-4">
    <center><h4>Galeri BeCoff</h4></center>
  </div>
  <div class="col-xl-4"></div>
</div>
<div class="row mt-2">
  <div class="col-xl-12 mb-2">
    <center>
      <img src="{{ asset('assets/img/gambar2.jpg') }}" class="img-fluid rounded m-3 img-galeri">
      <img src="{{ asset('assets/img/gambar5.jpg') }}" class="img-fluid rounded m-3 img-galeri">
      <img src="{{ asset('assets/img/gambar6.jpg') }}" class="img-fluid rounded m-3 img-galeri">
      <img src="{{ asset('assets/img/gambar7.jpg') }}" class="img-fluid rounded m-3 img-galeri">
      <img src="{{ asset('assets/img/gambar8.jpg') }}" class="img-fluid rounded m-3 img-galeri">
      <img src="{{ asset('assets/img/gambar9.jpg') }}" class="img-fluid rounded m-3 img-galeri">
      <img src="{{ asset('assets/img/gambar10.jpg') }}" class="img-fluid rounded m-3 img-galeri">
      <img src="{{ asset('assets/img/gambar11.jpg') }}" class="img-fluid rounded m-3 img-galeri">
      <img src="{{ asset('assets/img/gambar12.jpg') }}" class="img-fluid rounded m-3 img-galeri">
      <img src="{{ asset('assets/img/gambar13.jpg') }}" class="img-fluid rounded m-3 img-galeri">
      <img src="{{ asset('assets/img/gambar14.jpg') }}" class="img-fluid rounded m-3 img-galeri">
      <img src="{{ asset('assets/img/gambar15.jpg') }}" class="img-fluid rounded m-3 img-galeri">
    </center>
  </div>
</div>
@endsection
