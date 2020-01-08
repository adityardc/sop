@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 text-center">
        <p><h3>1. PROSES BISNIS : <i>OPERATIONAL EXCELLENCE</i></h3></p>
        <p class="text-danger"><strong>TEKNIK dan PENGOLAHAN</strong></p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12" style="padding-left: 12%;padding-right: 12%">
        <p class="text-primary" style="margin-bottom: 0%"><b><u>DAFTAR SOP</u></b></p>
        <table class="table table-borderless table-condensed table-hover" style="margin-bottom: 0%">
            <tr>
                <td><a href="{{ asset('storage/PTPN IX - SOP PROSEDUR PENERAPAN OPERATIONAL EXCELLENT.pdf') }}" target="_blank">SOP <i>Operational Excellent</i></a></td>
            </tr>
        </table>
    </div>
</div>
<header>
    <div id="carouselExampleIndicators-1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators-1" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators-1" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('assets/img/pabrik/21.png')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 style="color: black"><b>STEP 1</b></h3>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url('assets/img/pabrik/22.png')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 style="color: black"><b>STEP 2</b></h3>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators-1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators-1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header><br><br><br>
<div class="row">
    <div class="col-lg-12 text-center">
        <p><h3>2. PROSES BISNIS : MANAJEMEN PRODUKSI PABRIK</h3></p>
        <p class="text-danger"><strong>TEKNIK dan PENGOLAHAN</strong></p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12" style="padding-left: 12%;padding-right: 12%">
        <p class="text-primary" style="margin-bottom: 0%"><b><u>DAFTAR SOP</u></b></p>
        <table class="table table-borderless table-condensed table-hover" style="margin-bottom: 0%">
            <tr>
                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA AGROKLIMATOLOGI.pdf') }}" target="_blank">1. SOP Analisa Agroklimatologi</a></td>
                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA DONGKELAN DAN BRONDOLAN.pdf') }}" target="_blank">2. SOP Analisa Dongkelan dan Brondolan</a></td>
                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA KEBERSIHAN TEBU.pdf') }}" target="_blank">3. SOP Analisa Kebersihan Tebu</a></td>
                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA KEBERSIHAN TEBU.pdf') }}" target="_blank">4. SOP Analisa Pengamatan Meja Tebu</a></td>
            </tr>
            <tr>
                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA KADAR AIR PADA GULA.pdf') }}" target="_blank">5. SOP Analisa Kadar Air pada Gula</a></td>
                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA RENDEMEN INDIVIDU.pdf') }}" target="_blank">6. SOP Analisa Rendemen Individu</a></td>
                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA ZAT KERING AMPAS.pdf') }}" target="_blank">7. SOP Analisa Zat Kering Ampas</a></td>
                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA NIRA MENTAH.pdf') }}" target="_blank">8. SOP Analisa Nira Mentah</a></td>
            </tr>
            <tr>
                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA NIRA KENTAL.pdf') }}" target="_blank">9. SOP Analisa Nira Kental</a></td>
                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA KADAR KAPUR NIRA MENTAH DAN NIRA ENCER.pdf') }}" target="_blank">10. SOP Analisa Kadar Kapur NM dan NE</a></td>
                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA MASAKAN.pdf') }}" target="_blank">11. SOP Analisa Masakan</a></td>
                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA GULA ACD.pdf') }}" target="_blank">12. SOP Analisa Gula ACD</a></td>
            </tr>
            <tr>
                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA TETES.pdf') }}" target="_blank">13. SOP Analisa Tetes</a></td>
                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA ICUMSA SHS (GULA).pdf') }}" target="_blank">14. SOP Analisa ICUMSA SHS</a></td>
                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA BESAR JENIS BUTIR.pdf') }}" target="_blank">15. SOP Analisa BJB</a></td>
                <td><a href="{{ asset('storage/PTPN IX - SOP PRODUKSI PABRIK GULA.pdf') }}" target="_blank">16. SOP Produksi Pabrik Gula</a></td>
            </tr>
            <tr>
                <td><a href="{{ asset('storage/PTPN IX - SOP SERAH TERIMA HASIL PRODUKSI.pdf') }}" target="_blank">17. SOP Serah Terima Hasil Produksi</a></td>
                <td><a href="{{ asset('storage/PTPN IX - SOP PELAPORAN PRODUKSI.pdf') }}" target="_blank">18. SOP Pelaporan Produksi</a></td>
            </tr>
        </table>
    </div>
</div>
<header>
    <div id="carouselExampleIndicators-2" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators-2" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('assets/img/pabrik/23.png')">
                {{-- <div class="carousel-caption d-none d-md-block">
                    <h3 style="color: black"><b>STEP 1</b></h3>
                </div> --}}
            </div>
        </div>

        {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> --}}
    </div>
</header><br><br><br>
<div class="row">
    <div class="col-lg-12 text-center">
        <p><h3>3. PROSES BISNIS : MAINTENANCE PABRIK</h3></p>
        <p class="text-danger"><strong>TEKNIK dan PENGOLAHAN</strong></p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12" style="padding-left: 12%;padding-right: 12%">
        <p class="text-primary" style="margin-bottom: 0%"><b><u>DAFTAR SOP</u></b></p>
        <table class="table table-borderless table-condensed table-hover" style="margin-bottom: 0%">
            <tr>
                <td><a href="{{ asset('storage/PTPN IX - SOP PROSEDUR MAINTENANCE PABRIK GULA.pdf') }}" target="_blank">1. SOP Prosedur Maintenance Pabrik Gula</a></td>
                <td><a href="{{ asset('storage/PTPN IX - SOP PROSEDUR INDIVIDUAL TEST.pdf') }}" target="_blank">2. SOP Prosedur Individual Test</a></td>
                <td><a href="{{ asset('storage/PTPN IX - SOP KALIBRASI ALAT UKUR.pdf') }}" target="_blank">3. SOP Kalibrasi Alat Ukur</a></td>
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
            <div class="carousel-item active" style="background-image: url('assets/img/pabrik/24.png')">
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
</header><br><br><br>
<div class="row">
    <div class="col-lg-12 text-center">
        <p><h3>4. PROSES BISNIS : INVESTASI DTS</h3></p>
        <p class="text-danger"><strong>TEKNIK dan PENGOLAHAN</strong></p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12" style="padding-left: 12%;padding-right: 12%">
        <p class="text-primary" style="margin-bottom: 0%"><b><u>DAFTAR SOP</u></b></p>
        <table class="table table-borderless table-condensed table-hover" style="margin-bottom: 0%">
            <tr>
                <td><a href="{{ asset('storage/PTPN IX - SOP PROSEDUR INVESTASI NON TANAMAN DTS.pdf') }}" target="_blank">SOP Prosedur Investasi non Tanaman DTS</a></td>
            </tr>
        </table>
    </div>
</div>
<header>
    <div id="carouselExampleIndicators-4" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators-4" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('assets/img/pabrik/25.png')">
                {{-- <div class="carousel-caption d-none d-md-block">
                    <h3 style="color: black"><b>STEP 1</b></h3>
                </div> --}}
            </div>
        </div>

        {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators-4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators-4" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> --}}
    </div>
</header><br><br><br>
@endsection
