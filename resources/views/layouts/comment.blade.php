@if(!isset($count) || $count == 0)
	<div class="full-comment">
@elseif(isset($count) == 1)
	<div class="full-comment child1">
@endif
		<div class="comment-wrap">

			<div class="cw-img">
				<div class="img-circle">{{ substr($c->name, 0, 1) }}</div>
			</div>

			<div class="cw-right">
				<div class="r-top">
					<div class="top-box1">
						<span class="username">{{ $c->name }}</span>
						<span class="timestamp">{{ $c->created_at->diffForHumans() }}</span>
					</div>

					<div class="top-box1"><span class="glyphicon glyphicon-minus mini"></span></div>
					
				</div>
				<div class="r-middle">{{ $c->comment }}</div>
				<div class="r-bottom"><span class="reply-btn">Odgovori</span></div>
			</div>
		</div>

		<div class="reply-form">

			<form action="{{ action('CommentController@addComment') }}" method="POST">

				{{ csrf_field() }}

				<input type="hidden" name="parent_id" value="{{ $c->id }}">
				<input type="hidden" name="event_id" value="{{ $event->id }}">

				<div class="form-group w50">
				    <input type="text" class="form-control" name="name" placeholder="Ime" required>
				</div>

				<div class="form-group w50">
				    <input type="email" class="form-control" name="email" placeholder="E-mail" required>
				</div>

				<div class="form-group">
				    <textarea class="form-control" name="comment" rows="3" maxlength="600" placeholder="Upišite komentar..." required></textarea>
				</div>
				 
				 <div class="button-box">
					<button type="submit" class="btn btn-success">Odgovori</button>
					<div class="btn btn-default close-reply">Odustani</div>
				</div>

			</form>

		</div>

		@if(App\Utilities::hasChildren($c->id))
			@php $count = 0; @endphp
			@foreach($c->children as $com)
				@php $count += 1; @endphp
				@if($com->parent_id == $c->id)
	        		@include('layouts.comment', ['c' => $com, 'count' => $count])
	        	@endif
			@endforeach
	    @endif

	</div>