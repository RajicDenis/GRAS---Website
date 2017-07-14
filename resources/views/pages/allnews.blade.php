@extends('app')

@section('content')

{{Html::style('css/pages/header2.css')}}
{{Html::style('css/pages/allnews.css')}}
{{Html::style('css/media/pages/allnews.css')}}

<style>
	.header2 {
		background-image: url({{ URL::asset('images/hdr1.jpg') }});
	}
	.hdr2-image {
		background-image: url({{ URL::asset('images/logo.png') }});
	}
	.one-news:after {
	    border-top: 69px solid #182C4F;
	}
</style>

	@include('layouts.header')

	<div class="site-title">

		<div class="st-txt">NOVOSTI</div>

		<div class="site-box">

			@include('layouts.search', ['ident' => 'news'])

			@if(count($events) > 0)

			<div class="infinite-scroll">
			@foreach($events as $event)
				<a href="{{ action('EventController@showEvent', $event->id) }}" class="one-news">
					@if($event->pic != null)
						<div class="on-left" style="background-image: url({{ URL::asset('images/news/'.$event->pic.'') }});"></div>
					@else
						<div class="on-left bgc"><img class="mega" src="{{ URL::asset('images/icons/mega.png') }}"></div>
					@endif
					
					<div class="on-right">
						<div class="news-title">{{ $event->title }}</div>
						@if($event->summary != null)
		                	<div class="news-desc">{{ str_limit(strip_tags($event->summary), $limit = 400, $end = '...') }}</div>
		                @else
							<div class="news-desc">{{ str_limit(strip_tags($event->desc), $limit = 400, $end = '...') }}</div>
		                @endif
		                <div class="area f">{{ App\Utilities::getCommentCount($event->id) }}<span class="glyphicon glyphicon-comment ml"></span> </div>
					</div>
				</a>
			@endforeach

			{!! $events->render() !!}

			</div>

			@else
				<h3 class="empty-info">Nema novosti!</h3>
			@endif

		</div>
	</div>

@stop