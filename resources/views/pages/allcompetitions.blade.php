@extends('app')

@section('content')

{{Html::style('css/pages/header2.css')}}
{{Html::style('css/pages/allcompetitions.css')}}
{{Html::style('css/media/pages/allcompetitions.css')}}

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

		<div class="st-txt">SVI NATJEČAJI</div>

		<div class="site-box">

			<div class="table-wrap">
				<table class="table table-striped table-responsive" id="comp_table">
					<thead>

					    <tr class="headrow">
					      <th class="rounded-l">NADLEŽNOST</th>
					      <th>NAZIV PROGRAMA</th>
					      <th>PRIJAVITELJI</th>
					      <th>POČETAK PRIJAVE</th>
					      <th>ROK ZA PRIJAVU</th>
					      <th>CILJ/SVRHA</th>
					      <th>IZNOS BESPOVRATNE POTPORE</th>
					      <th>STATUS</th>
					      <th class="rounded-r">VIŠE</th>
					    </tr>

					</thead>

					<tbody>
					@foreach($competitions as $comp)
					    <tr>
					    	<td style="text-transform: uppercase;">{{ $comp->jurisdiction }}</td>
					    	<td>{{ $comp->name }}</td>
					    	<td>{{ $comp->applicants }}</td>
					    	<td class="opened">
					    	@if($comp->start_date != '0000-00-00 00:00:00')
					    		{{ date('d.m.Y', strtotime($comp->start_date)) }}
					      	@endif
					      	</td>
					    	<td class="closed">
					    	@if($comp->end_date != '0000-00-00 00:00:00')
					    		{{ date('d.m.Y', strtotime($comp->end_date)) }}
					      	@endif
					    	</td>
					    	<td>{{ $comp->goal }}</td>
					    	<td>{{ $comp->value }}</td>
					    	@if($comp->status == 'OTVOREN')
					    		<td class="opened">{{ $comp->status }}</td>
					    	@else
					    		<td class="tba">{{ $comp->status }}</td>
					    	@endif
					    	<td><a href="{{ $comp->more }}" target="_blank"><span class="glyphicon glyphicon-new-window"></span></a></td>
					    </tr>
					@endforeach
						
					</tbody>
				</table>
			</div>

		</div>

	</div>

@stop