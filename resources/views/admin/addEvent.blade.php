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
	    #addEvent_table {
	    	width: 90%;
	    	display: block !important;
    		overflow-x: auto !important;
	    }
	    #addEvent_table_wrapper {
	    	width: 90%;
	    }
	</style>

	<div class="event-wrap">
		<div class="e-title">Dodaj novost</div>

		@if(Session::has('event'))
            <div class="center">
                <div class="alert {{ Session::get('alert_type') }} fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ Session::get('event') }}
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
			<form name="eventForm" action="{{ action('AdminController@storeEvent') }}" method="POST" enctype="multipart/form-data" novalidate>

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
				    <label for="title">Naslov</span></label>
				    <input type="text" class="form-control" name="title" id="title" required>
				</div>

				<div class="form-group">
				    <label for="summary">Kratki opis</span></label>
				    <textarea class="form-control" name="summary" rows="4" required></textarea>
				</div>

				<div class="form-group">
				    <label for="pic">Slika</span></label>
				    <input type="file" name="pic" id="pic">
				</div>

				<div class="form-group">
				    <label for="gallery">Galerija</span></label>
				    <input type="file" name="gallery[]" id="gallery" multiple>
				</div>

				<div class="form-group">
				    <label for="type">Vrsta novosti</span></label>
				    <select name="type">
						<option value="news">Novost</option>
						<option value="comp">Natječaj</option>
					</select>
				</div>
				 
				<div class="form-group">
				    <label for="desc">Text</span></label>
				    <textarea class="form-control tiny" name="desc" rows="10" required></textarea>
				</div>
				 
				<button type="submit" class="btn btn-success am">Spremi</button>

			</form>
		</div>

		
		<table class="table table-striped" id="addEvent_table">
			<thead>

			    <tr>
			      <th>ID</th>
			      <th>NASLOV</th>
			      <th>OPIS</th>
			      <th>SAŽETAK</th>
			      <th>SLIKA</th>
			      <th>VRSTA</th>
			      <th></th>
			      <th></th>
			    </tr>

			</thead>

			<tbody>
			@foreach($events as $e)
			    <tr>
			    	<td style="text-transform: uppercase;">{{ $e->id }}</td>
			    	<td>{{ $e->title }}</td>
			    	<td>{{ str_limit(strip_tags($e->desc), 50, '...') }}</td>
			    	<td>{{ str_limit(strip_tags($e->summary), 50, '...') }}</td>
			    	<td>{{ $e->pic }}</td>
			    	<td>{{ $e->type }}</td>
			    	<td class="del-td"><a class="del" href="{{ action('AdminController@removeEvent', $e->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
			    	<td><a href="{{ action('AdminController@editEvent', $e->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
			    </tr>
			@endforeach
				
			</tbody>
		</table>
		

	</div>

@stop