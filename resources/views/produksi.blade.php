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
                                <td><a href="{{ asset('storage/PTPN IX - SOP KARET LENGKAP.pdf') }}" target="_blank">1. SOP Budidaya Karet.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP TEH LENGKAP.pdf') }}" target="_blank">2. SOP Budidaya Teh.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP KOPI ARABIKA.pdf') }}" target="_blank">3. SOP Budidaya Kopi Arabika.<br><b>(verifikasi)</b></a></td>
                                <td>4. SOP Budidaya Kopi Robusta.<br><b>(verifikasi)</b></td>
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
</div><br><br>
<div class="wizard-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wizard-wrap-int">
                    <div class="wizard-hd">
                        <h2 style="text-align: center">4. PROSES BISNIS : <i>OPERATIONAL EXCELLENCE</i></h2>
                        <h5 style="text-align: center;color: red">TEKNIK dan PENGOLAHAN</h5>
                        <p style="margin-bottom: 0%"><b><u>DAFTAR SOP</u></b></p>
                        <table class="table table-borderless table-condensed table-hover" style="margin-bottom: 0%">
                            <tr>
                                <td><a href="{{ asset('storage/PTPN IX - SOP PROSEDUR PENERAPAN OPERATIONAL EXCELLENT.pdf') }}" target="_blank">SOP <i>Operational Excellent</i>.<br><b>(verifikasi)</b></a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="rootwizard">
                        <div class="navbar">
                            <div class="navbar-inner">
                                <div class="container-pro wizard-cts-st">
                                    <ul>
                                        <li><a href="#tab5" data-toggle="tab">PROSES BISNIS : STEP 1</a></li>
                                        <li><a href="#tab6" data-toggle="tab">STEP 2</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane wizard-ctn" id="tab5">
                                <img src="{{ url('assets/img/21.png') }}" alt="">
                            </div>
                            <div class="tab-pane wizard-ctn" id="tab6">
                                <img src="{{ url('assets/img/22.png') }}" alt="">
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
                        <h2 style="text-align: center">5. PROSES BISNIS : MANAJEMEN PRODUKSI PABRIK</h2>
                        <h5 style="text-align: center;color: red">TEKNIK dan PENGOLAHAN</h5>
                        <p style="margin-bottom: 0%"><b><u>DAFTAR SOP</u></b></p>
                        <table class="table table-borderless table-condensed table-hover" style="margin-bottom: 0%">
                            <tr>
                                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA AGROKLIMATOLOGI.pdf') }}" target="_blank">1. SOP Analisa Agroklimatologi.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA DONGKELAN DAN BRONDOLAN.pdf') }}" target="_blank">6. SOP Analisa Dongkelan dan Brondolan.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA KEBERSIHAN TEBU.pdf') }}" target="_blank">11. SOP Analisa Kebersihan Tebu.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA KEBERSIHAN TEBU.pdf') }}" target="_blank">15. SOP Analisa Pengamatan Meja Tebu.<br><b>(verifikasi)</b></a></td>
                            </tr>
                            <tr>
                                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA KADAR AIR PADA GULA.pdf') }}" target="_blank">2. SOP Analisa Kadar Air pada Gula.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA RENDEMEN INDIVIDU.pdf') }}" target="_blank">7. SOP Analisa Rendemen Individu.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA ZAT KERING AMPAS.pdf') }}" target="_blank">12. SOP Analisa Zat Kering Ampas.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA NIRA MENTAH.pdf') }}" target="_blank">16. SOP Analisa Nira Mentah.<br><b>(verifikasi)</b></a></td>
                            </tr>
                            <tr>
                                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA NIRA KENTAL.pdf') }}" target="_blank">3. SOP Analisa Nira Kental.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA KADAR KAPUR NIRA MENTAH DAN NIRA ENCER.pdf') }}" target="_blank">8. SOP Analisa Kadar Kapur NM dan NE.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA MASAKAN.pdf') }}" target="_blank">13. SOP Analisa Masakan.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA GULA ACD.pdf') }}" target="_blank">17. SOP Analisa Gula ACD.<br><b>(verifikasi)</b></a></td>
                            </tr>
                            <tr>
                                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA TETES.pdf') }}" target="_blank">4. SOP Analisa Tetes.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA ICUMSA SHS (GULA).pdf') }}" target="_blank">9. SOP Analisa ICUMSA SHS.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP ANALISA BESAR JENIS BUTIR.pdf') }}" target="_blank">14. SOP Analisa BJB.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP PRODUKSI PABRIK GULA.pdf') }}" target="_blank">18. SOP Produksi Pabrik Gula.<br><b>(verifikasi)</b></a></td>
                            </tr>
                            <tr>
                                <td><a href="{{ asset('storage/PTPN IX - SOP SERAH TERIMA HASIL PRODUKSI.pdf') }}" target="_blank">5. SOP Serah Terima Hasil Produksi.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP PELAPORAN PRODUKSI.pdf') }}" target="_blank">10. SOP Pelaporan Produksi.<br><b>(verifikasi)</b></a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="rootwizard">
                        <div class="navbar">
                            <div class="navbar-inner">
                                <div class="container-pro wizard-cts-st">
                                    <ul>
                                        <li><a href="#tab7" data-toggle="tab">PROSES BISNIS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane wizard-ctn" id="tab7">
                                <img src="{{ url('assets/img/23.png') }}" alt="">
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
                        <h2 style="text-align: center">6. PROSES BISNIS : MAINTENANCE PABRIK</h2>
                        <h5 style="text-align: center;color: red">TEKNIK dan PENGOLAHAN</h5>
                        <p style="margin-bottom: 0%"><b><u>DAFTAR SOP</u></b></p>
                        <table class="table table-borderless table-condensed table-hover" style="margin-bottom: 0%">
                            <tr>
                                <td><a href="{{ asset('storage/PTPN IX - SOP PROSEDUR MAINTENANCE PABRIK GULA.pdf') }}" target="_blank">1. SOP Prosedur Maintenance Pabrik Gula.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP PROSEDUR INDIVIDUAL TEST.pdf') }}" target="_blank">2. SOP Prosedur Individual Test.<br><b>(verifikasi)</b></a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP KALIBRASI ALAT UKUR.pdf') }}" target="_blank">3. SOP Kalibrasi Alat Ukur.<br><b>(verifikasi)</b></a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="rootwizard">
                        <div class="navbar">
                            <div class="navbar-inner">
                                <div class="container-pro wizard-cts-st">
                                    <ul>
                                        <li><a href="#tab8" data-toggle="tab">PROSES BISNIS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane wizard-ctn" id="tab8">
                                <img src="{{ url('assets/img/24.png') }}" alt="">
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
                        <h2 style="text-align: center">7. PROSES BISNIS : INVESTASI DTS</h2>
                        <h5 style="text-align: center;color: red">TEKNIK dan PENGOLAHAN</h5>
                        <p style="margin-bottom: 0%"><b><u>DAFTAR SOP</u></b></p>
                        <table class="table table-borderless table-condensed table-hover" style="margin-bottom: 0%">
                            <tr>
                                <td><a href="{{ asset('storage/PTPN IX - SOP PROSEDUR INVESTASI NON TANAMAN DTS.pdf') }}" target="_blank">SOP Prosedur Investasi non Tanaman DTS.<br><b>(verifikasi)</b></a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="rootwizard">
                        <div class="navbar">
                            <div class="navbar-inner">
                                <div class="container-pro wizard-cts-st">
                                    <ul>
                                        <li><a href="#tab9" data-toggle="tab">PROSES BISNIS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane wizard-ctn" id="tab9">
                                <img src="{{ url('assets/img/25.png') }}" alt="">
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
