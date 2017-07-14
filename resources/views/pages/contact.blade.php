@extends('app')

@section('content')

{{Html::style('css/pages/header2.css')}}
{{Html::style('css/pages/contact.css')}}
{{Html::style('css/media/pages/contact.css')}}

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

		<div class="st-txt">KONTAKT</div>

		<div class="site-box">

			@if(Session::has('message'))
	            <div class="center">
	                <div class="alert {{ Session::get('alert_type') }} fade in">
	                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	                    {{ Session::get('message') }}
	                </div>
	            </div>
	        @endif
			
			<iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.6369828562583!2d17.696601568323988!3d45.701985781420596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47678a7ae0b14719%3A0x863ec57b834574d5!2sUl.+Bra%C4%87e+Radi%C4%87+2%2C+33520%2C+Slatina!5e0!3m2!1shr!2shr!4v1497709998663" frameborder="0" style="border:0" allowfullscreen></iframe>

			<div class="contact-box">
				<div class="c-form">
					<form action="{{ action('InfoController@leaveMessage') }}" method="POST">

						{{ csrf_field() }}

						<div class="form-group">
						    <label for="name">Ime <span>(obavezno)</span></label>
						    <input type="text" class="form-control" name="name" required>
						</div>

						<div class="form-group">
						    <label for="email">Email <span>(obavezno)</span></label>
						    <input type="email" class="form-control" name="email" required>
						</div>
						 
						<div class="form-group">
						    <label for="message">Komentar <span>(obavezno)</span></label>
						    <textarea class="form-control" name="message" rows="4" required></textarea>
						</div>
						 
						<button type="submit" class="btn btn-success">Pošalji</button>

					</form>
				</div>

				<div class="c-pic" style="background-image: url({{ URL::asset('images/danijela.png') }});">
					<div class="pic-desc">Ravnateljica: Danijela Maravić, univ.spec.oec</div>
				</div>
			</div>

		</div>

	</div>

@stop