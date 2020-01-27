@extends('layouts.menu')

@section('content')
<div class="wizard-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wizard-wrap-int">
                    <div class="wizard-hd">
                        <h2 style="text-align: center">1. PROSES BISNIS : INVESTASI</h2>
                        <h5 style="text-align: center;color: red">TANAMAN</h5>
                        {{-- <p style="margin-bottom: 0%"><b><u>DAFTAR SOP</u></b></p>
                        <table class="table table-borderless table-condensed table-hover" style="margin-bottom: 0%">
                            <tr>
                                <td><a href="{{ asset('storage/PTPN IX - SOP PROSEDUR PENYUSUNAN DAN MONITORING PROFIL RESIKO.pdf') }}" target="_blank">1. SOP Penyusunan dan Monitoring Profil Risiko</a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP PROSEDUR PENYUSUNAN KAJIAN RESIKO STRATEGIS.pdf') }}" target="_blank">2. SOP Kajian Risiko Strategis</a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP PROSEDUR PENGENDALIAN DOKUMEN.pdf') }}" target="_blank">3. SOP Pengendalian Dokumen</a></td>
                            </tr>
                        </table> --}}
                    </div>
                    <div class="rootwizard">
                        <div class="navbar">
                            <div class="navbar-inner">
                                <div class="container-pro wizard-cts-st">
                                    <ul>
                                        <li><a href="#tab1" data-toggle="tab">PROSES BISNIS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane wizard-ctn" id="tab1">
                                <img src="{{ url('assets/img/16.png') }}" alt="">
                            </div>
                            <div class="wizard-action-pro">
                                <ul class="wizard-nav-ac">
                                    <li><a class="button-first a-prevent" href="javascript:void(0)"><i class="notika-icon notika-more-button"></i></a></li>
                                    <li><a class="button-previous a-prevent" href="javascript:void(0)"><i class="notika-icon notika-back"></i></a></li>
                                    <li><a class="button-next a-prevent" href="javascript:void(0)"><i class="notika-icon notika-next-pro"></i></a></li>
                                    <li><a class="button-last a-prevent" href="javascript:void(0)"><i class="notika-icon notika-more-button"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><br>
<div class="wizard-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wizard-wrap-int">
                    <div class="wizard-hd">
                        <h2 style="text-align: center">2. PROSES BISNIS : MANAJEMEN PRODUKSI TANAMAN TAHUNAN</h2>
                        <h5 style="text-align: center;color: red">TANAMAN</h5>
                        <p style="margin-bottom: 0%"><b><u>DAFTAR SOP</u></b></p>
                        <table class="table table-borderless table-condensed table-hover" style="margin-bottom: 0%">
                            <tr>
                                <td><a href="{{ asset('storage/PTPN IX - SOP KARET LENGKAP.pdf') }}" target="_blank">1. SOP Budidaya Karet.<br><b>(sudah disetujui)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP TEH LENGKAP.pdf') }}" target="_blank">3. SOP Budidaya Teh.<br><b>(sudah disetujui)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP KOPI ARABIKA.pdf') }}" target="_blank">5. SOP Budidaya Kopi Arabika.<br><b>(sudah disetujui)</b></a></td>
                            </tr>
                            <tr>
                                <td><a href="{{ asset('storage/PTPN IX - SOP BUDIDAYA PENGOLAHAN SERAI WANGI.pdf') }}" target="_blank">2. SOP Budidaya Serai Wangi.<br><b>(sudah disetujui)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP BUDIDAYA TEBU MEKANISASI.pdf') }}" target="_blank">4. SOP Budidaya Tebu Mekanisasi.<br><b>(sudah disetujui)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP KOPI ROBUSTA.pdf') }}" target="_blank">6. SOP Budidaya Kopi Robusta.<br><b>(sudah disetujui)</b></a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="rootwizard">
                        <div class="navbar">
                            <div class="navbar-inner">
                                <div class="container-pro wizard-cts-st">
                                    <ul>
                                        <li><a href="#tab2" data-toggle="tab">PROSES BISNIS : STEP 1</a></li>
                                        <li><a href="#tab3" data-toggle="tab">STEP 2</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane wizard-ctn" id="tab2">
                                <img src="{{ url('assets/img/17.png') }}" alt="">
                            </div>
                            <div class="tab-pane wizard-ctn" id="tab3">
                                <img src="{{ url('assets/img/18.png') }}" alt="">
                            </div>
                            <div class="wizard-action-pro">
                                <ul class="wizard-nav-ac">
                                    <li><a class="button-first a-prevent" href="javascript:void(0)"><i class="notika-icon notika-more-button"></i></a></li>
                                    <li><a class="button-previous a-prevent" href="javascript:void(0)"><i class="notika-icon notika-back"></i></a></li>
                                    <li><a class="button-next a-prevent" href="javascript:void(0)"><i class="notika-icon notika-next-pro"></i></a></li>
                                    <li><a class="button-last a-prevent" href="javascript:void(0)"><i class="notika-icon notika-more-button"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><br>
<div class="wizard-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wizard-wrap-int">
                    <div class="wizard-hd">
                        <h2 style="text-align: center">3. PROSES BISNIS : MANAJEMEN PRODUKSI TANAMAN SEMUSIM</h2>
                        <h5 style="text-align: center;color: red">TANAMAN</h5>
                        <p style="margin-bottom: 0%"><b><u>DAFTAR SOP</u></b></p>
                        <table class="table table-borderless table-condensed table-hover" style="margin-bottom: 0%">
                            <tr>
                                <td><a href="{{ asset('storage/PTPN IX - SOP PENGADAAN AREAL SEWA LAHAN TEBU BIBIT.pdf') }}" target="_blank">1. SOP Pengadaan Areal Sewa Lahan Tebu Bibit.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP PENGADAAN AREAL SEWA LAHAN TEBU GILING.pdf') }}" target="_blank">2. SOP Pengadan Areal Sewa Lahan Tebu Giling.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP PENGADAAN AREAL TR KEMITRAAN.pdf') }}" target="_blank">3. SOP Pengadaan Areal TR Kemitraan.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP TEBANG MUAT ANGKUT.pdf') }}" target="_blank">4. SOP Tebang Muat Angkut.<br><b>(verifikasi)</b></a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="rootwizard">
                        <div class="navbar">
                            <div class="navbar-inner">
                                <div class="container-pro wizard-cts-st">
                                    <ul>
                                        <li><a href="#tab4" data-toggle="tab">PROSES BISNIS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane wizard-ctn" id="tab4">
                                <img src="{{ url('assets/img/19.png') }}" alt="">
                            </div>
                            <div class="wizard-action-pro">
                                <ul class="wizard-nav-ac">
                                    <li><a class="button-first a-prevent" href="javascript:void(0)"><i class="notika-icon notika-more-button"></i></a></li>
                                    <li><a class="button-previous a-prevent" href="javascript:void(0)"><i class="notika-icon notika-back"></i></a></li>
                                    <li><a class="button-next a-prevent" href="javascript:void(0)"><i class="notika-icon notika-next-pro"></i></a></li>
                                    <li><a class="button-last a-prevent" href="javascript:void(0)"><i class="notika-icon notika-more-button"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
