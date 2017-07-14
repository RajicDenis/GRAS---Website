@extends('admin.homepage')

{{Html::style('css/admin/forms.css')}}

@section('homesection')

<div class="event-wrap">
	<div class="e-title">Uredi novost</div> 

		<div class="e-form">
			<form name="eventForm" action="{{ action('AdminController@updateEvent', $event->id) }}" method="POST" enctype="multipart/form-data" novalidate>

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
				    <label for="title">Naslov</span></label>
				    <input type="text" class="form-control" name="title" id="title" value="{{ $event->title }}" required>
				</div>

				<div class="form-group">
				    <label for="summary">Kratki opis</span></label>
				    <textarea class="form-control" name="summary" rows="4" required>{{ $event->summary }}</textarea>
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
						<option value="news" @if($event->type == 'news') selected @endif>Novost</option>
						<option value="comp" @if($event->type == 'comp') selected @endif>Natječaj</option>
					</select>
				</div>
				 
				<div class="form-group">
				    <label for="desc">Text</span></label>
				    <textarea class="form-control tiny" name="desc" rows="10" required>{{ $event->desc }}</textarea>
				</div>
				 
				<button type="submit" class="btn btn-success am">Spremi</button>

			</form>
		</div>
	</div>
</div>

@stop