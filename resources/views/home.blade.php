<html>
<head>
    <title>I M S :: PTPN IX</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="icon" type="image/png" href="{{ asset('Login_v5/images/logo-icon.png') }}"/>
    <link href="{{ asset('assets/js/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('assets/js/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
        function keluar()
        {
            Swal.fire({
                title: 'Konfirmasi?',
                text: "Anda yakin akan keluar dari aplikasi ini ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Tidak, batalkan !',
                confirmButtonText: 'Ya, saya yakin !'
            }).then((result) => {
                if (result.value === true) {
                    $('#logout-form').submit();
                }
            });
        }
    </script>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (tescoba.jpg) -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<table id="Table_01" width="1601" height="821" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td rowspan="20">
			<img src="{{ asset('assets/img/dash/bagan_logout_01.jpg') }}" width="23" height="820" alt=""></td>
		<td>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><img src="{{ asset('assets/img/dash/bagan_logout_02.jpg') }}" width="61" height="82" alt=""></a>
			</td>
		<td colspan="49" rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_03.jpg') }}" width="1516" height="112" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="82" alt=""></td>
	</tr>
	<tr>
		<td rowspan="19">
			<img src="{{ asset('assets/img/dash/bagan_logout_04.jpg') }}" width="61" height="738" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="30" alt=""></td>
	</tr>
	<tr>
		<td colspan="5" rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_05.jpg') }}" width="155" height="110" alt=""></td>
		<td colspan="9">
            <a href="{{ route('pembiayaan') }}"><img src="{{ asset('assets/img/dash/bagan_logout_06.jpg') }}" width="279" height="65" alt=""></a>
			</td>
		<td colspan="6" rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_07.jpg') }}" width="158" height="110" alt=""></td>
		<td colspan="11">
			<a href="{{ route('sekper') }}"><img src="{{ asset('assets/img/dash/bagan_logout_08.jpg') }}" width="276" height="65" alt=""></a></td>
		<td colspan="5" rowspan="8">
			<img src="{{ asset('assets/img/dash/bagan_logout_09.jpg') }}" width="137" height="279" alt=""></td>
		<td colspan="9">
			<a href="{{ route('pengadaan') }}"><img src="{{ asset('assets/img/dash/bagan_logout_10.jpg') }}" width="281" height="65" alt=""></a></td>
		<td colspan="4" rowspan="6">
			<img src="{{ asset('assets/img/dash/bagan_logout_11.jpg') }}" width="230" height="246" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="65" alt=""></td>
	</tr>
	<tr>
		<td colspan="9">
			<img src="{{ asset('assets/img/dash/bagan_logout_12.jpg') }}" width="279" height="45" alt=""></td>
		<td colspan="11">
			<img src="{{ asset('assets/img/dash/bagan_logout_13.jpg') }}" width="276" height="45" alt=""></td>
		<td colspan="9" rowspan="5">
			<img src="{{ asset('assets/img/dash/bagan_logout_14.jpg') }}" width="281" height="181" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_15.jpg') }}" width="135" height="82" alt=""></td>
		<td colspan="5">
			<a href="{{ route('pelanggan') }}"><img src="{{ asset('assets/img/dash/bagan_logout_16.jpg') }}" width="164" height="51" alt=""></a></td>
		<td colspan="7" rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_17.jpg') }}" width="157" height="82" alt=""></td>
		<td colspan="7" rowspan="3">
			<img src="{{ asset('assets/img/dash/bagan_logout_18.jpg') }}" width="187" height="108" alt=""></td>
		<td colspan="8" rowspan="6">
			<img src="{{ asset('assets/img/dash/bagan_logout_19.jpg') }}" width="225" height="169" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="51" alt=""></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="{{ asset('assets/img/dash/bagan_logout_20.jpg') }}" width="164" height="31" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="31" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="6">
			<img src="{{ asset('assets/img/dash/bagan_logout_21.jpg') }}" width="120" height="144" alt=""></td>
		<td colspan="10" rowspan="3">
			<a href="{{ route('bisnis') }}"><img src="{{ asset('assets/img/dash/bagan_logout_22.jpg') }}" width="274" height="55" alt=""></a></td>
		<td colspan="3" rowspan="4">
			<img src="{{ asset('assets/img/dash/bagan_logout_23.jpg') }}" width="62" height="87" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="26" alt=""></td>
	</tr>
	<tr>
		<td colspan="7" rowspan="3">
			<img src="{{ asset('assets/img/dash/bagan_logout_24.jpg') }}" width="187" height="61" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="28" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_25.jpg') }}" width="120" height="33" alt=""></td>
		<td colspan="7" rowspan="3">
			<a href="{{ route('pemasaran') }}"><img src="{{ asset('assets/img/dash/bagan_logout_26.jpg') }}" width="213" height="83" alt=""></a></td>
		<td colspan="2" rowspan="4">
			<img src="{{ asset('assets/img/dash/bagan_logout_27.jpg') }}" width="178" height="90" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="10">
			<img src="{{ asset('assets/img/dash/bagan_logout_28.jpg') }}" width="274" height="32" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="32" alt=""></td>
	</tr>
	<tr>
		<td colspan="8">
			<a href="{{ route('pemasaran') }}"><img src="{{ asset('assets/img/dash/bagan_logout_29.jpg') }}" width="210" height="50" alt=""></a></td>
		<td rowspan="3">
			<img src="{{ asset('assets/img/dash/bagan_logout_30.jpg') }}" width="47" height="84" alt=""></td>
		<td colspan="11">
			<img src="{{ asset('assets/img/dash/bagan_logout_31.jpg') }}" width="266" height="50" alt=""></td>
		<td colspan="2" rowspan="3">
			<img src="{{ asset('assets/img/dash/bagan_logout_32.jpg') }}" width="37" height="84" alt=""></td>
		<td colspan="6">
			<a href="{{ route('tanaman') }}"><img src="{{ asset('assets/img/dash/bagan_logout_33.jpg') }}" width="188" height="50" alt=""></a></td>
		<td rowspan="3">
			<img src="{{ asset('assets/img/dash/bagan_logout_34.jpg') }}" width="29" height="84" alt=""></td>
		<td colspan="6">
			<a href="{{ route('pabrik') }}"><img src="{{ asset('assets/img/dash/bagan_logout_35.jpg') }}" width="188" height="50" alt=""></a></td>
		<td colspan="2" rowspan="3">
			<img src="{{ asset('assets/img/dash/bagan_logout_36.jpg') }}" width="40" height="84" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="50" alt=""></td>
	</tr>
	<tr>
		<td colspan="8">
			<img src="{{ asset('assets/img/dash/bagan_logout_37.jpg') }}" width="210" height="7" alt=""></td>
		<td colspan="11" rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_38.jpg') }}" width="266" height="34" alt=""></td>
		<td colspan="6" rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_39.jpg') }}" width="188" height="34" alt=""></td>
		<td colspan="6" rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_40.jpg') }}" width="188" height="34" alt=""></td>
		<td colspan="7">
			<img src="{{ asset('assets/img/dash/bagan_logout_41.jpg') }}" width="213" height="7" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="7" alt=""></td>
	</tr>
	<tr>
		<td rowspan="8">
			<img src="{{ asset('assets/img/dash/bagan_logout_42.jpg') }}" width="94" height="372" alt=""></td>
		<td colspan="5" rowspan="2">
			<a href="{{ route('pemasaran') }}"><img src="{{ asset('assets/img/dash/bagan_logout_43.jpg') }}" width="162" height="47" alt=""></a></td>
		<td colspan="5">
			<img src="{{ asset('assets/img/dash/bagan_logout_44.jpg') }}" width="74" height="27" alt=""></td>
		<td colspan="4">
			<img src="{{ asset('assets/img/dash/bagan_logout_45.jpg') }}" width="70" height="27" alt=""></td>
		<td colspan="4" rowspan="2">
			<a href="{{ route('pemasaran') }}"><img src="{{ asset('assets/img/dash/bagan_logout_46.jpg') }}" width="165" height="47" alt=""></a></td>
		<td rowspan="8">
			<img src="{{ asset('assets/img/dash/bagan_logout_47.jpg') }}" width="156" height="372" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="27" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="3">
			<img src="{{ asset('assets/img/dash/bagan_logout_48.jpg') }}" width="73" height="89" alt=""></td>
		<td colspan="8" rowspan="2">
			<a href="{{ route('tanaman') }}"><img src="{{ asset('assets/img/dash/bagan_logout_49.jpg') }}" width="167" height="46" alt=""></a></td>
		<td rowspan="3">
			<img src="{{ asset('assets/img/dash/bagan_logout_50.jpg') }}" width="57" height="89" alt=""></td>
		<td colspan="7" rowspan="2">
			<a href="{{ route('pabrik') }}"><img src="{{ asset('assets/img/dash/bagan_logout_51.jpg') }}" width="165" height="46" alt=""></a></td>
		<td rowspan="5">
			<img src="{{ asset('assets/img/dash/bagan_logout_52.jpg') }}" width="48" height="175" alt=""></td>
		<td colspan="6" rowspan="2">
			<a href="{{ route('tanaman') }}"><img src="{{ asset('assets/img/dash/bagan_logout_53.jpg') }}" width="165" height="46" alt=""></a></td>
		<td rowspan="3">
			<img src="{{ asset('assets/img/dash/bagan_logout_54.jpg') }}" width="44" height="89" alt=""></td>
		<td colspan="7" rowspan="2">
			<a href="{{ route('pabrik') }}"><img src="{{ asset('assets/img/dash/bagan_logout_55.jpg') }}" width="164" height="46" alt=""></a></td>
		<td colspan="3" rowspan="3">
			<img src="{{ asset('assets/img/dash/bagan_logout_56.jpg') }}" width="56" height="89" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="20" alt=""></td>
	</tr>
	<tr>
		<td colspan="5" rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_57.jpg') }}" width="162" height="69" alt=""></td>
		<td colspan="4" rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_58.jpg') }}" width="165" height="69" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="26" alt=""></td>
	</tr>
	<tr>
		<td colspan="8">
			<img src="{{ asset('assets/img/dash/bagan_logout_59.jpg') }}" width="167" height="43" alt=""></td>
		<td colspan="7">
			<img src="{{ asset('assets/img/dash/bagan_logout_60.jpg') }}" width="165" height="43" alt=""></td>
		<td colspan="6">
			<img src="{{ asset('assets/img/dash/bagan_logout_61.jpg') }}" width="165" height="43" alt=""></td>
		<td colspan="7">
			<img src="{{ asset('assets/img/dash/bagan_logout_62.jpg') }}" width="164" height="43" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="43" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_63.jpg') }}" width="26" height="86" alt=""></td>
		<td colspan="8">
			<a href="{{ route('ti') }}"><img src="{{ asset('assets/img/dash/bagan_logout_64.jpg') }}" width="210" height="47" alt=""></a></td>
		<td colspan="5" rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_65.jpg') }}" width="126" height="86" alt=""></td>
		<td colspan="8">
			<a href="{{ route('hukum') }}"><img src="{{ asset('assets/img/dash/bagan_logout_66.jpg') }}" width="210" height="47" alt=""></a></td>
		<td colspan="2" rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_67.jpg') }}" width="52" height="86" alt=""></td>
		<td rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_68.jpg') }}" width="21" height="86" alt=""></td>
		<td colspan="9">
			<a href="{{ route('tahunan') }}"><img src="{{ asset('assets/img/dash/bagan_logout_69.jpg') }}" width="219" height="47" alt=""></a></td>
		<td colspan="2" rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_70.jpg') }}" width="105" height="86" alt=""></td>
		<td colspan="7">
			<a href="{{ route('sdm') }}"><img src="{{ asset('assets/img/dash/bagan_logout_71.jpg') }}" width="218" height="47" alt=""></a></td>
		<td colspan="2" rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_72.jpg') }}" width="31" height="86" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="47" alt=""></td>
	</tr>
	<tr>
		<td colspan="8">
			<img src="{{ asset('assets/img/dash/bagan_logout_73.jpg') }}" width="210" height="39" alt=""></td>
		<td colspan="8">
			<img src="{{ asset('assets/img/dash/bagan_logout_74.jpg') }}" width="210" height="39" alt=""></td>
		<td colspan="9">
			<img src="{{ asset('assets/img/dash/bagan_logout_75.jpg') }}" width="219" height="39" alt=""></td>
		<td colspan="7">
			<img src="{{ asset('assets/img/dash/bagan_logout_76.jpg') }}" width="218" height="39" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="39" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_77.jpg') }}" width="16" height="170" alt=""></td>
		<td colspan="5">
			<a href="{{ route('mr') }}"><img src="{{ asset('assets/img/dash/bagan_logout_78.jpg') }}" width="157" height="62" alt=""></a></td>
		<td rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_79.jpg') }}" width="31" height="170" alt=""></td>
		<td colspan="7">
			<a href="{{ route('renstra') }}"><img src="{{ asset('assets/img/dash/bagan_logout_80.jpg') }}" width="147" height="62" alt=""></a></td>
		<td colspan="2" rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_81.jpg') }}" width="24" height="170" alt=""></td>
		<td colspan="4">
			<a href="{{ route('spi') }}"><img src="{{ asset('assets/img/dash/bagan_logout_82.jpg') }}" width="153" height="62" alt=""></a></td>
		<td rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_83.jpg') }}" width="20" height="170" alt=""></td>
		<td colspan="7">
			<a href="{{ route('sustainability') }}"><img src="{{ asset('assets/img/dash/bagan_logout_84.jpg') }}" width="160" height="62" alt=""></a></td>
		<td rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_85.jpg') }}" width="30" height="170" alt=""></td>
		<td colspan="5">
			<a href="{{ route('kinerja') }}"><img src="{{ asset('assets/img/dash/bagan_logout_86.jpg') }}" width="156" height="62" alt=""></a></td>
		<td rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_87.jpg') }}" width="17" height="170" alt=""></td>
		<td colspan="6">
			<a href="{{ route('hilir') }}"><img src="{{ asset('assets/img/dash/bagan_logout_88.jpg') }}" width="161" height="62" alt=""></a></td>
		<td rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_89.jpg') }}" width="18" height="170" alt=""></td>
		<td colspan="4">
			<a href="{{ route('strategi') }}"><img src="{{ asset('assets/img/dash/bagan_logout_90.jpg') }}" width="154" height="62" alt=""></a></td>
		<td rowspan="2">
			<img src="{{ asset('assets/img/dash/bagan_logout_91.jpg') }}" width="22" height="170" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="62" alt=""></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="{{ asset('assets/img/dash/bagan_logout_92.jpg') }}" width="157" height="108" alt=""></td>
		<td colspan="7">
			<img src="{{ asset('assets/img/dash/bagan_logout_93.jpg') }}" width="147" height="108" alt=""></td>
		<td colspan="4">
			<img src="{{ asset('assets/img/dash/bagan_logout_94.jpg') }}" width="153" height="108" alt=""></td>
		<td colspan="7">
			<img src="{{ asset('assets/img/dash/bagan_logout_95.jpg') }}" width="160" height="108" alt=""></td>
		<td colspan="5">
			<img src="{{ asset('assets/img/dash/bagan_logout_96.jpg') }}" width="156" height="108" alt=""></td>
		<td colspan="6">
			<img src="{{ asset('assets/img/dash/bagan_logout_97.jpg') }}" width="161" height="108" alt=""></td>
		<td colspan="4">
			<img src="{{ asset('assets/img/dash/bagan_logout_98.jpg') }}" width="154" height="108" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="108" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="23" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="61" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="94" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="16" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="10" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="15" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="20" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="101" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="11" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="31" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="30" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="47" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="17" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="40" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="11" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="11" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="13" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="27" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="57" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="39" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="30" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="20" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="23" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="14" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="38" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="48" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="21" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="15" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="30" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="36" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="29" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="34" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="44" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="13" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="17" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="1" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="79" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="26" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="14" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="14" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="27" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="18" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="11" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="91" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="43" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="9" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="22" height="1" alt=""></td>
		<td>
			<img src="{{ asset('assets/img/dash/spacer.gif') }}" width="156" height="1" alt=""></td>
		<td></td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>
