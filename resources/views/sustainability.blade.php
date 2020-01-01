@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 text-center">
        <p><h3>5. PROSES BISNIS : MANAJEMEN SUSTAINABILITY - SERTIFIKASI</h3></p>
        <p class="text-danger"><strong>MANAJEMEN SUSTAINABILITY</strong></p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12" style="padding-left: 12%;padding-right: 12%">
        <p class="text-primary" style="margin-bottom: 0%"><b><u>DAFTAR SOP</u></b></p>
        <table class="table table-borderless table-condensed table-hover" style="margin-bottom: 0%">
            <tr>
                <td><a href="{{ asset('storage/Revisi Prosedur Sertifikasi.pdf') }}" target="_blank">SOP Prosedur Sertifikasi</a></td>
            </tr>
        </table>
    </div>
</div>
<header>
    <div id="carouselExampleIndicators-5" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators-5" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators-5" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('assets/img/pabrik/26.png')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 style="color: black"><b>STEP 1</b></h3>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url('assets/img/pabrik/27.png')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 style="color: black"><b>STEP 2</b></h3>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators-5" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators-5" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
@endsection
