@extends('app')

@section('content')

{{Html::style('css/pages/header2.css')}}
{{Html::style('css/pages/documents.css')}}
{{Html::style('css/media/pages/documents.css')}}

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

		<div class="st-txt">DOKUMENTI</div>

		<div class="site-box">
			
			<div class="doc-box">
				
				<div class="db">
					<div class="db-title">STATUT</div>

					<div class="db-doc">
						<a href="{{ URL::asset('files/statut.pdf') }}" target="_blank" class="circle cr1"><img class="icon" src="{{ URL::asset('images/icons/note.png') }}"></a>
					</div>
				</div>

				<div class="db">
					<div class="db-title">FINANCIJSKI IZVJEŠTAJI</div>

					<div class="db-doc">
						<a href="{{ URL::asset('files/Obrasci-financijskih-izvjestaja-2015.pdf') }}" target="_blank" class="circle change cr2"><img class="icon" src="{{ URL::asset('images/icons/note3.png') }}"><div class="c-year">2015</div></a>
						<a href="{{ URL::asset('files/Financijski-izvjestaj-za-2016.pdf') }}" target="_blank" class="circle change cr3"><img class="icon" src="{{ URL::asset('images/icons/note3.png') }}"><div class="c-year">2016</div></a>
						<a href="{{ URL::asset('files/Bilješke-uz-izvješće.pdf') }}" target="_blank" class="circle change cr2"><img class="icon" src="{{ URL::asset('images/icons/note2.png') }}"><div class="c-year">2015</div></a>
						<a href="{{ URL::asset('files/Biljeske-uz-financijski-izvjestaj-2016.pdf') }}" target="_blank" class="circle change cr3"><img class="icon" src="{{ URL::asset('images/icons/note2.png') }}"><div class="c-year">2016</div></a>
					</div>
				</div>

				<div class="db">
					<div class="db-title">PLAN NABAVE</div>

					<div class="db-doc">
						<a href="{{ URL::asset('files/CZPGS-Plan-nabave-2015.pdf') }}" target="_blank" class="circle change cr4"><img class="icon" src="{{ URL::asset('images/icons/note4.png') }}"><div class="c-year">2015</div></a>
						<a href="{{ URL::asset('files/GRAS-Plan-nabave-2016.pdf') }}" target="_blank" class="circle change cr5"><img class="icon" src="{{ URL::asset('images/icons/note4.png') }}"><div class="c-year">2016</div></a>
						<a href="{{ URL::asset('files/GRAS-Plan-nabave-2017.pdf') }}" target="_blank" class="circle change cr6"><img class="icon" src="{{ URL::asset('images/icons/note4.png') }}"><div class="c-year">2017</div></a>
					</div>
				</div>

				<div class="db">
					<div class="db-title">PLAN RADA</div>

					<div class="db-doc">
						<a href="{{ URL::asset('files/plan-rada-2017.pdf') }}" target="_blank" class="circle change cr7"><img class="icon" src="{{ URL::asset('images/icons/note5.png') }}"><div class="c-year">2017</div></a>
					</div>
				</div>

			</div>

		</div>

	</div>

@stop