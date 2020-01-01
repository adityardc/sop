@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 text-center">
        <p><h3>1. PROSES BISNIS : INVESTASI</h3></p>
        <p class="text-danger"><strong>TANAMAN</strong></p>
    </div>
</div>
<header>
    <div id="carouselExampleIndicators-1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators-1" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('assets/img/tanaman/16.png')">
                {{-- <div class="carousel-caption d-none d-md-block">
                    <h3 style="color: black"><b>STEP 1</b></h3>
                </div> --}}
            </div>
        </div>

        {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators-1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators-1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> --}}
    </div>
</header><br><br><br>
<div class="row">
    <div class="col-lg-12 text-center">
        <p><h3>2. PROSES BISNIS : MANAJEMEN PRODUKSI TANAMAN TAHUNAN</h3></p>
        <p class="text-danger"><strong>TANAMAN</strong></p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12" style="padding-left: 12%;padding-right: 12%">
        <p class="text-primary" style="margin-bottom: 0%"><b><u>DAFTAR SOP</u></b></p>
        <table class="table table-borderless table-condensed table-hover" style="margin-bottom: 0%">
            <tr>
                <td><a href="{{ asset('storage/SOP KARET rev.pdf') }}" target="_blank">1. SOP Budidaya Karet</a></td>
                <td><a href="{{ asset('storage/Budidaya Teh format baru.pdf') }}" target="_blank">2. SOP Budidaya Teh</a></td>
                <td><a href="{{ asset('storage/SOP Kopi  Arabika.pdf') }}" target="_blank">3. SOP Budidaya Kopi Arabika</a></td>
                <td><a href="{{ asset('storage/SOP Kopi Robusta.pdf') }}" target="_blank">4. SOP Budidaya Kopi Robusta</a></td>
            </tr>
        </table>
    </div>
</div>
<header>
    <div id="carouselExampleIndicators-2" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators-2" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators-2" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('assets/img/tanaman/17.png')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 style="color: black"><b>STEP 1</b></h3>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url('assets/img/tanaman/18.png')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 style="color: black"><b>STEP 2</b></h3>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header><br><br><br>
<div class="row">
    <div class="col-lg-12 text-center">
        <p><h3>3. PROSES BISNIS : MANAJEMEN PRODUKSI TANAMAN SEMUSIM</h3></p>
        <p class="text-danger"><strong>TANAMAN</strong></p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12" style="padding-left: 12%;padding-right: 12%">
        <p class="text-primary" style="margin-bottom: 0%"><b><u>DAFTAR SOP</u></b></p>
        <table class="table table-borderless table-condensed table-hover" style="margin-bottom: 0%">
            <tr>
                <td><a href="{{ asset('storage/SOP Pengadaan Areal Sewa Lahan Tebu Bibit - Tanaman PTPN IX (1).pdf') }}" target="_blank">1. SOP Pengadaan Areal Sewa Lahan Tebu Bibit</a></td>
                <td><a href="{{ asset('storage/SOP Pengadaan Areal Sewa Lahan Tebu Giling - Tanaman PTPN IX.pdf') }}" target="_blank">2. SOP Pengadan Areal Sewa Lahan Tebu Giling</a></td>
                <td><a href="{{ asset('storage/SOP Pengadaan Areal TR Kemitraan - Tanaman PTPN IX (1).pdf') }}" target="_blank">3. SOP Pengadaan Areal TR Kemitraan</a></td>
                <td><a href="{{ asset('storage/SOP Tebang Angkut - Tanaman PTPN IX (1).pdf') }}" target="_blank">4. SOP Tebang Muat Angkut</a></td>
            </tr>
        </table>
    </div>
</div>
<header>
    <div id="carouselExampleIndicators-3" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators-3" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('assets/img/tanaman/19.png')">
                {{-- <div class="carousel-caption d-none d-md-block">
                    <h3 style="color: black"><b>STEP 1</b></h3>
                </div> --}}
            </div>
        </div>

        {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators-3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators-3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> --}}
    </div>
</header>
@endsection
