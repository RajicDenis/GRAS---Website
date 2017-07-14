@extends('admin.homepage')

{{Html::style('css/admin/forms.css')}}

@section('homesection')

	<div class="event-wrap">
		<div class="e-title">Uredi natječaj</div>

		<div class="e-form">
			<form action="{{ action('AdminController@updateComp', $comp->id) }}" method="POST" novalidate>

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
				    <label for="jurisdiction">Nadležnost</span></label>
				    <input type="text" class="form-control" name="jurisdiction" value="{{ $comp->jurisdiction }}">
				</div>

				@if ($errors->has('jurisdiction'))
                    <span class="help-block">
                        <strong>{{ $errors->first('jurisdiction') }}</strong>
                    </span>
            	@endif

				<div class="form-group">
				    <label for="name">Naziv</span></label>
				    <input type="text" class="form-control" name="name" value="{{ $comp->name }}">
				</div>

				@if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
            	@endif

				<div class="form-group">
				    <label for="applicants">Prijavitelji</span></label>
				    <input type="text" class="form-control" name="applicants" value="{{ $comp->applicants }}">
				</div>

				<div class="form-group">
				    <label for="start_date">Datum početka</span></label>
				    <input type="date" name="start_date" id="start_date" value="{{ date('Y-m-d', strtotime($comp->start_date)) }}">
				</div>

				<div class="form-group">
				    <label for="end_date">Rok za prijavu</span></label>
				    <input type="date" name="end_date" id="end_date" value="{{ date('Y-m-d', strtotime($comp->end_date)) }}">
				</div>

				<div class="form-group">
				    <label for="status">Status</span></label>
				    <select name="status">
						<option value="open" @if($comp->status == 'open') selected @endif>OTVOREN</option>
						<option value="tba" @if($comp->status == 'tba') selected @endif>U NAJAVI</option>
					</select>
				</div>
				 
				<div class="form-group">
				    <label for="goal">Cilj/svrha</span></label>
				    <textarea class="form-control" name="goal" rows="3">{{ $comp->goal }}</textarea>
				</div>

				@if ($errors->has('goal'))
                    <span class="help-block">
                        <strong>{{ $errors->first('goal') }}</strong>
                    </span>
            	@endif
				 
				 <div class="form-group">
				    <label for="value">Iznos bespovratne potpore</span></label>
				    <textarea class="form-control" name="value" rows="3">{{ $comp->value }}</textarea>
				</div>

				<div class="form-group">
				    <label for="more">Više (link)</span></label>
				    <input type="text" class="form-control" name="more" value="{{ $comp->goal }}">
				</div>

				<button type="submit" class="btn btn-success am">Spremi</button>

			</form>
		</div>
	</div>

@stop