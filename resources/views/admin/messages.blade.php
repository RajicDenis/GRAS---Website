@extends('admin.homepage')

{{Html::style('css/admin/forms.css')}}

@section('homesection')

	<div class="event-wrap">
		<div class="e-title">Poruke</div>

		@if(Session::has('removed'))
            <div class="center">
                <div class="alert {{ Session::get('alert_type') }} fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ Session::get('removed') }}
                </div>
            </div>
        @endif

		<table class="table table-striped" id="addComp_table">
			<thead>

			    <tr>
			      <th>IME</th>
			      <th>E-MAIL</th>
			      <th>PORUKA</th>
			      <th>DATUM</th>
			      <th></th>
			    </tr>

			</thead>

			<tbody>
			@foreach($messages as $m)
			    <tr>
			    	<td>{{ $m->name }}</td>
			    	<td>{{ $m->email }}</td>
			    	<td>{{ $m->message }}</td>
			    	<td>{{ date('d.m.Y', strtotime($m->created_at)) }}</td>
			    	<td class="del-td"><a class="del" href="{{ action('AdminController@deleteMessage', $m->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
			    </tr>
			@endforeach
				
			</tbody>
		</table>

	</div>

@endsection