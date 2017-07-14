@extends('app')

@section('content')

{{Html::style('css/pages/header2.css')}}
{{Html::style('css/pages/showEvent.css')}}
{{Html::style('css/media/pages/showEvent.css')}}
{{Html::style('css/comments.css')}}

<style>
	.header2 {
		background-image: url({{ URL::asset('images/hdr1.jpg') }});
	}
	.hdr2-image {
		background-image: url({{ URL::asset('images/logo.png') }});
	}
	.logo-mini {
		background-image: url({{ URL::asset('images/logonew.png') }});
	}
	
</style>

	@include('layouts.header')

	<div class="site-title">

		<a href="{{ URL::previous() }}" class="back-btn"><img class="back" src="{{ URL::asset('images/icons/back.png') }}"></a>

		<div class="st-txt">NOVOST</div>

		<div class="site-box">
			<div class="event-wrap">
				
				<div class="e-top">
					<div class="date">{{ date('d.m.Y', strtotime($event->created_at)) }}</div>
					<div class="logo-mini"></div>
					<div class="et-r"><span class="cmnt">{{ $comNumber }}</span><span class="glyphicon glyphicon-comment"></span></div>
				</div>

			    <div class="top">
			    	<div class="e-title">{{ $event->title }}</div>
			    	@if($event->pic != null)
			        	<div class="e-image" style="background-image: url({{ URL::asset('images/news/'.$event->pic.'') }});"></div>
			        @else
						<div class="e-image" style="background: #182C4F;"><img class="megaphone" src="{{ URL::asset('images/icons/mega.png') }}"></div>
			        @endif
			    </div>

			    <div class="bottom">

					<div class="bottom-head"><div class="logo-mini"></div></div>

			    	<div class="textbox">{!! Purifier::clean(trim($event->desc, '"')) !!}</div>

			    	@if(count($gallery) > 0)

			    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				        <!-- Wrapper for slides -->
				        <div class="carousel-inner" role="listbox">
				        @php $count = 0; @endphp
		                    @foreach($gallery as $g)
		                    @php $count += 1; @endphp
		                        <div @if($count == 1) class="item active" @else class="item" @endif>
		                            <img src="{{ URL::asset('images/news/gallery/'.$g->image.'') }}">
		                		</div>
		                    @endforeach
				        </div>

				        <!-- Controls -->
		                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		                    <span class="sr-only">Previous</span>
			            </a>
		                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		                    <span class="sr-only">Next</span>
				        </a>
			    	</div>

			    	@endif

			    	@include('layouts.share', ['url' => Request::url()])

			    </div>

				<div class="comments-box">
					<div class="c-info">Komentari</div>

					<div class="c-thread">

						<div class="ct-head">{{ $comNumber }}<img class="ct-img" src="{{ URL::asset('images/icons/comment.png') }}"></div>

						<div class="ct-form">

							<form action="{{ action('CommentController@addComment') }}" method="POST">

								{{ csrf_field() }}

								<input type="hidden" name="parent_id" value="0">
								<input type="hidden" name="event_id" value="{{ $event->id }}">

								<div class="form-group w50 vanish">
								    <input type="text" class="form-control" name="name" placeholder="Ime" required>
								</div>

								<div class="form-group w50 vanish">
								    <input type="email" class="form-control" name="email" placeholder="E-mail" required>
								</div>

								<div class="form-group">
								    <textarea class="form-control comment" name="comment" maxlength="600" rows="3" placeholder="Upišite komentar..." required></textarea>
								</div>
								 
								 <div class="button-box">
									<button type="submit" class="btn btn-success vanish">Komentiraj</button>
									<div class="btn btn-default vanish close">Odustani</div>
								</div>

							</form>

						</div>

						<div class="ct-comments">
							@if(count($comments) == 0)

								<div class="nocomment">Nema komentara!</div>

							@else
								@foreach($comments as $c)
								    @if($c->parent_id == 0)
								    	@include('layouts.comment', ['c' => $c])
									@endif
								@endforeach
							@endif
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

@stop