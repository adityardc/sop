@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 text-center">
        <p><h3>1. PROSES BISNIS : MANAJEMEN RISIKO KORPORATE</h3></p>
        <p class="text-danger"><strong>MANAJEMEN RISIKO KORPORATE</strong></p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12" style="padding-left: 12%;padding-right: 12%">
        <p class="text-primary" style="margin-bottom: 0%"><b><u>DAFTAR SOP</u></b></p>
        <table class="table table-borderless table-condensed table-hover" style="margin-bottom: 0%">
            <tr>
                <td><a href="{{ asset('storage/4. SOP Versi Holding.pdf') }}" target="_blank">1. SOP Penyusunan dan Monitoring Profil Risiko</a></td>
                <td><a href="{{ asset('storage/4. SOP Kajian Risiko Strategis.pdf') }}" target="_blank">2. SOP Kajian Risiko Strategis</a></td>
                <td><a href="{{ asset('storage/4. SOP Pengendalian Dokumen.pdf') }}" target="_blank">3. SOP Pengendalian Dokumen</a></td>
            </tr>
        </table>
    </div>
</div>
<header>
    <div id="carouselExampleIndicators-1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators-1" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('assets/img/mr/11.png')">
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
</header>
@endsection
