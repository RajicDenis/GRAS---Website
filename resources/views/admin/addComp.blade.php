@extends('admin.homepage')

{{Html::style('css/admin/forms.css')}}

@section('homesection')

<style>
	.glyphicon-edit {
    	color: orange;
    }
    .glyphicon-trash {
        font-size: 18px;
        color: #ff003f;
        transition: 0.2s all ease-in-out;
    }
    .glyphicon-trash:hover {
        transform: scale(1.3);
    }
    .del-td {
        display: flex;
        justify-content: center;
        align-items: center;
    }
	#addComp_table {
    	width: 90%;
    	display: block !important;
		overflow-x: auto !important;
    }
    #addComp_table_wrapper {
    	width: 90%;
    }
</style>

	<div class="event-wrap">
		<div class="e-title">Dodaj natječaj</div>

		@if(Session::has('comp'))
            <div class="center">
                <div class="alert {{ Session::get('alert_type') }} fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ Session::get('comp') }}
                </div>
            </div>
        @endif

        @if(Session::has('removed'))
            <div class="center">
                <div class="alert {{ Session::get('alert_type') }} fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ Session::get('removed') }}
                </div>
            </div>
        @endif

		<div class="e-form">
			<form action="{{ action('AdminController@storeComp') }}" method="POST" novalidate>

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
				    <label for="jurisdiction">Nadležnost</span></label>
				    <input type="text" class="form-control" name="jurisdiction">
				</div>

				<div class="form-group">
				    <label for="name">Naziv</span></label>
				    <input type="text" class="form-control" name="name">
				</div>

				<div class="form-group">
				    <label for="applicants">Prijavitelji</span></label>
				    <input type="text" class="form-control" name="applicants">
				</div>

				<div class="form-group">
				    <label for="start_date">Datum početka</span></label>
				    <input type="date" name="start_date" id="start_date">
				</div>

				<div class="form-group">
				    <label for="end_date">Rok za prijavu</span></label>
				    <input type="date" name="end_date" id="end_date">
				</div>

				<div class="form-group">
				    <label for="status">Status</span></label>
				    <select name="status">
						<option value="open">OTVOREN</option>
						<option value="tba">U NAJAVI</option>
					</select>
				</div>
				 
				<div class="form-group">
				    <label for="goal">Cilj/svrha</span></label>
				    <textarea class="form-control" name="goal" rows="3"></textarea>
				</div>
				 
				 <div class="form-group">
				    <label for="value">Iznos bespovratne potpore</span></label>
				    <textarea class="form-control" name="value" rows="3"></textarea>
				</div>

				<div class="form-group">
				    <label for="more">Više (link)</span></label>
				    <input type="text" class="form-control" name="more">
				</div>

				<button type="submit" class="btn btn-success am">Spremi</button>

			</form>
		</div>

		<table class="table table-striped" id="addComp_table">
			<thead>

			    <tr>
			      <th>NADLEŽNOST</th>
			      <th>NAZIV PROGRAMA</th>
			      <th>PRIJAVITELJI</th>
			      <th>POČETAK PRIJAVE</th>
			      <th>ROK ZA PRIJAVU</th>
			      <th>STATUS</th>
			      <th></th>
			      <th></th>
			    </tr>

			</thead>

			<tbody>
			@foreach($competitions as $comp)
			    <tr>
			    	<td style="text-transform: uppercase;">{{ str_limit(strip_tags($comp->jurisdiction), 50, '...') }}</td>
			    	<td>{{ str_limit(strip_tags($comp->name), 50, '...') }}</td>
			    	<td>{{ str_limit(strip_tags($comp->applicants), 50, '...') }}</td>
			    	<td>
			    	@if($comp->start_date != null )
			    		{{ date('d.m.Y', strtotime($comp->start_date)) }}
			      	@endif
			      	</td>
			    	<td>
			    	@if($comp->end_date != null)
			    		{{ date('d.m.Y', strtotime($comp->end_date)) }}
			      	@endif
			    	</td>
			    	@if($comp->status == 'OTVOREN')
			    		<td class="opened">{{ $comp->status }}</td>
			    	@else
			    		<td class="tba">{{ $comp->status }}</td>
			    	@endif
			    	<td class="del-td"><a class="del" href="{{ action('AdminController@removeComp', $comp->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
	    			<td><a href="{{ action('AdminController@editComp', $comp->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
			    </tr>
			@endforeach
				
			</tbody>
		</table>

	</div>

@stop