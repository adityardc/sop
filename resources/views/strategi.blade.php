@extends('layouts.menu')

@section('content')
<div class="wizard-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wizard-wrap-int">
                    <div class="wizard-hd">
                        <h2 style="text-align: center">PROSES BISNIS : PERENCANAAN JANGKA PANJANG</h2>
                        <h5 style="text-align: center;color: red">SEKRETARIS PERUSAHAAN</h5>
                        <p style="margin-bottom: 0%"><b><u>DAFTAR SOP</u></b></p>
                        <table class="table table-borderless table-condensed table-hover" style="margin-bottom: 0%">
                            <tr>
                                <td><a href="{{ asset('storage/PTPN IX - SOP PENYUSUNAN RJPP.pdf') }}" target="_blank">SOP Penyusunan Laporan RJP Perusahaan</a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="rootwizard">
                        <div class="navbar">
                            <div class="navbar-inner">
                                <div class="container-pro wizard-cts-st">
                                    <ul>
                                        <li><a href="#tab4" data-toggle="tab">PROSES BISNIS : STEP 1</a></li>
                                        <li><a href="#tab5" data-toggle="tab">STEP 2</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane wizard-ctn" id="tab4">
                                <img src="{{ url('assets/img/8.png') }}" alt="">
                            </div>
                            <div class="tab-pane wizard-ctn" id="tab5">
                                <img src="{{ url('assets/img/9.png') }}" alt="">
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
