@extends('layouts.menu')

@section('content')
<div class="wizard-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wizard-wrap-int">
                    <div class="wizard-hd">
                        <h2 style="text-align: center">PROSES BISNIS : PEMASARAN</h2>
                        <h5 style="text-align: center;color: red">PEMASARAN</h5>
                        <p style="margin-bottom: 0%"><b><u>DAFTAR SOP</u></b></p>
                        <table class="table table-borderless table-condensed table-hover" style="margin-bottom: 0%">
                            <tr>
                                <td><a href="{{ asset('storage/SOP Penjualan gula tetes format baru.pdf') }}" target="_blank">1. SOP Pemasaran Gula dan Tetes</a></td>
                                <td><a href="{{ asset('storage/7. TATA CARA PELAKSANAAN PENJULAN KOMODITI DTT.pdf') }}" target="_blank">3. SOP Penjualan Komoditi DTT</a></td>
                                <td><a href="{{ asset('storage/PTPN IX - SOP PROSEDUR PENANGANAN KOMPLAIN DAN KLAIM.pdf') }}" target="_blank">5. SOP Penanganan Klaim dan Komplain Pelanggan</a></td>
                            </tr>
                            <tr>
                                <td><a href="{{ asset('storage/PTPN IX - SOP PELAYANAN PENGAMBILAN DO.pdf') }}" target="_blank">2. SOP Pengambilan DO</a></td>
                                <td>4. SOP Prosedur Pelaksanaan Stock Opname</td>
                            </tr>
                        </table>
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
                                <img src="{{ url('assets/img/34.png') }}" alt="">
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
