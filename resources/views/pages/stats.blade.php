@extends('app')

@section('content')

{{Html::style('css/pages/header2.css')}}
{{Html::style('css/plugins/hexagons.css')}}
{{Html::style('css/pages/stats.css')}}
{{Html::style('css/media/pages/stats.css')}}

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

		<div class="st-txt">GRAS U BROJKAMA</div>

		<div class="site-box">

			<div class="hexa-box">
			
				  <ul id="hexGrid">

					  <li class="hex">
					    <a class="hexIn blue" href="#">	
					    	<div class="hex-nbr">46</div>	
					        <h1>SURADNJA NA 46</h1>
					        <p>RAZLIČITIH JAVNIH POZIVA</p>
					    </a>
					  </li>
					  <li class="hex">
					    <a class="hexIn yellow" href="#">
					    	<div class="hex-nbr">180</div>
					        <h1>VIŠE OD 180</h1>
					        <p>INDIVIDUALNIH I GRUPNIH SAVJETOVANJA</p>
					    </a>
					  </li>
					  <li class="hex">
					    <a class="hexIn purple" href="#">
					    	<div class="hex-nbr">50</div>
					        <h1>ODRŽANO VIŠE OD</h1>
					        <p>50 RADIONICA</p>
					    </a>
					  </li>
					  <li class="hex">
					    <a class="hexIn green" href="#">
					    	<div class="hex-nbr">22</div>	
					        <h1>ORGANIZIRANO VIŠE OD</h1>
					        <p>22 DOGAĐAJA</p>
					    </a>
					  </li>
					  <li class="hex">
					    <a class="hexIn pink" href="#">	
					    	<div class="hex-nbr">800</div>
					        <h1>PREKO 800 SUDIONIKA</h1>
					        <p>NA EDUKACIJAMA/ RADIONICAMA/ DOGAĐAJIMA</p>
					    </a>
					  </li>
					  <li class="hex">
					    <a class="hexIn red" href="#">
					    	<div class="hex-nbr">106</div>
					        <h1>PRIJAVLJENO 106 PROJEKATA ZA DIONIKE</h1>
					        <p>VRIJEDNOSTI VIŠE OD 32 mil kn</p>
					    </a>
					  </li>
					  <li class="hex">
					    <a class="hexIn lightblue" href="#">
					    	<div class="hex-nbr">30,5</div>		
					        <h1>GRAS, SAMOSTALNO I/ILI KAO PARTNER</h1>
					        <p>PRIJAVLJEN NA PROJEKTIMA VRIJEDNIM VIŠE OD 30,5 mil kn</p>
					    </a>
					  </li>

					</ul>


			</div>

		</div>

	</div>

@stop