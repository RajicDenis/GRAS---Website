<style>
	.searchbox {
		display: flex;
	}
	.glyphicon-search {
		font-size: 30px;
		color: #F1C500;
		cursor: pointer;
	}
	#srch {
		background: transparent;
		border: none;
		border-radius: 0;
		box-shadow: none;
		border-bottom: 2px solid #F1C500;
		font-family: 'Amaranth', sans-serif;
		color: white;
		margin-bottom: 50px;
		text-align: center;
	}
	.searchRow {
		display: flex;
		width: 60%;
		justify-content: flex-end;
	}
</style>

<div class="searchRow">
	@if($ident == 'comps')
	<form name="searchForm" action="{{ action('EventController@allComps') }}" method="GET">
	@else
	<form name="searchForm" action="{{ action('EventController@allEvents') }}" method="GET">
	@endif

	    <div class="searchbox">
	    	<input id="srch" name="srch" type="text" class="form-control" placeholder="Pretraži...">
	        <span class="glyphicon glyphicon-search" onclick="searchForm.submit()"></span>

	    </div><!-- /input-group -->
	</form>
</div>