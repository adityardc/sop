@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 text-center">
        <p><h3>PROSES BISNIS : MANAJEMEN KINERJA</h3></p>
        <p class="text-danger"><strong>SDM dan UMUM</strong></p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12" style="padding-left: 12%;padding-right: 12%">
        <p class="text-primary" style="margin-bottom: 0%"><b><u>DAFTAR SOP</u></b></p>
        <table class="table table-borderless table-condensed table-hover" style="margin-bottom: 0%">
            <tr>
                <td><a href="{{ asset('storage/PTPN IX - SOP PENGEMBANGAN KOMPETENSI KARYAWAN DAN EVALUASI PASCA KEGIATAN.pdf') }}" target="_blank">SOP Pengembangan Kompetensi Karyawan & Evaluasi Pasca Pelatihan</a></td>
            </tr>
        </table>
    </div>
</div>
<header>
    <div id="carouselExampleIndicators-4" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators-4" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators-4" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('assets/img/sdm/41.png')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 style="color: black"><b>STEP 1</b></h3>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url('assets/img/sdm/42.png')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 style="color: black"><b>STEP 2</b></h3>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators-4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators-4" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
@endsection