@extends('app')

@section('content')

{{Html::style('css/pages/header2.css')}}
{{Html::style('css/pages/about.css')}}
{{Html::style('css/media/pages/aboutus.css')}}

<style>
	.header2 {
		background-image: url({{ URL::asset('images/hdr1.jpg') }});
	}
	.hdr2-image {
		background-image: url({{ URL::asset('images/logo.png') }});
	}

</style>

	@include('layouts.header')

	<div class="site-title">

		<div class="st-txt">O NAMA</div>

		<div class="site-box">
			
			<div class="location-img" style="background-image: url({{ URL::asset('images/location.png') }})"></div>

			<div class="about-txt">

				<p>Gradska razvojna agencija Slatine osnovana je u cilju jačanja poduzetništva na području Grada Slatine i okolice, a kroz svoj rad će se bazirati na praćenje procesa važnih za razvoj poduzetništva i ruralni razvoj, prikupljanje i davanje informacija, vršenje administrativne obrade podataka, davanje konzultantskih usluga poduzetnicima, pomaganje u iznalaženju poslovnog prostora, posredovanje u pribavljanju financijskih sredstava i realizaciji drugih poslova vezanih za probitak poduzetničke aktivnosti.</p>

				<h4>Izrada projekata</h4>
				<ul>
					<li>Za EU fondove</li>
					<li>Natječaje resornih ministarstva</li>
					<li>Investicijih projekata za potrebe kreditiranja kod banaka</li>
				</ul>

				<h4>Savjetovanje</h4>
				
				<ul>
					<li>Start up</li>
					<li>Rast i razvoj</li>
					<li>Optimizacija poslovanja</li>
					<li>Novi trendovi u poslovanju</li>
				</ul>

				<h4>Edukacije i informacije</h4>
				
				<ul>
					<li>Za EU fondove</li>
					<li>Natječaje resornih ministarstava</li>
					<li>Start up</li>
					<li>Poduzetničke vještine</li>
					<li>Komunikacijske i prezentacijske vještine</li>
					<li>Poduzetništvo mladih</li>
				</ul>

				<h4>Partnerstvo i suradnja</h4>
				
				<ul>
					<li>s lokalnom upravom</li>
					<li>s LAGovima</li>
					<li>sa školama</li>
					<li>s udrugama</li>
					<li>s drugim poduzetničkim centrima, razvojnim agencijama u zemlji i inozemstvu</li>
					<li>s obrtničkom i gospodarskom komorom</li>
					<li>sa Hrvatskim zavodom za zapošljavanje</li>
					<li>sa svim subjektima koji se bave ili promiču poduzetništvo</li>
				</ul>

			</div>

		</div>

	</div>

@stop