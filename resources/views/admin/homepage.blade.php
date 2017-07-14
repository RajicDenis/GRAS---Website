@extends('admin.admin_app')

@section('content')

<style>
	.main-wrap {
		position: relative;
		display: flex;
		width: 100%;
	}
	.left-header {
		position: fixed;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		width: 200px;
		height: 100vh;
		background: #182C4F;
	    z-index: 10;
	}
	.admin-logo {
		width: 200px;
		height: 200px;
		pointer-events: none;
	}
	.logout {
		text-align: center;
	    padding-bottom: 30px;
	}
	.fa-btn {
		color: white;
	}
	ul {
		text-decoration: none;
		list-style-type: none;
		padding-left: 0;
		color: white;
		font-family: 'Amaranth', sans-serif;
		font-size: 20px;
		text-align: center;
		text-transform: uppercase;
	    padding-bottom: 50px;
	}
	li {
		padding: 10px 0;
		border-bottom: 1px solid white;
		cursor: pointer;
	}
	li:last-child {
		border-bottom: none;
	}
	li:hover {
		opacity: 0.8;
		box-shadow: inset 0 0 5px black;
		transform: scale(1.02);
	}
	.main-body {
		position: absolute;
		left: 200px;
		display: flex;
		flex-direction: column;
		width: calc(100% - 200px);
	}
	.body-head {
		display: flex;
		justify-content: center;
		align-items: center;
		font-family: 'Amaranth', sans-serif;
		font-size: 60px;
		color: white;
		font-style: italic;
		width: 100%;
		height: 200px;
		background: #182C4F;
		box-shadow: 0 0 10px black;
	}

	.m-sidebar {
        display: flex;
        left:-200px;
        justify-content: center;
        align-items: center;
        width: 200px;
        height: 100vh;
        position: fixed;
        background: #222222;
        box-shadow: 0 5px 8px black;
        z-index: 200;
        transition: all 0.2s ease-in-out;
        top: 0;
    }
    .burger {
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: 40px;
        color: #EBDA26;
        cursor: pointer;
        transition: all 0.2s ease-in-out;
        z-index: 200;
    }
    .m-lnk {
        width: 200px;
    }
    .m-lnk:hover {
        border: none;
        box-shadow: inset 0 0 15px #F1C500;
    }

	@media all and (max-width: 1024px) {
		.e-form {
			width: 80%;
		}
	}

	@media all and (max-width: 414px) {
		.main-body {
			left: 0;
			width: 100%;
		}
		.body-head {
			font-size: 30px;
		}
		input[id='pic'] {
			width: 100%;
		}
		.desktop {
			display: none;
		}
		.mobile {
			display: flex;
		}
	}
	
</style>

	<div class="main-wrap">

		<div class="mobile burger"><span class="glyphicon glyphicon-menu-hamburger"></span></div>

		<div class="m-sidebar mobile">
		    
		    <div class="left-header mobile">
				<img class="admin-logo" src="{{ URL::asset('images/logo.png') }}">

				<ul>
					<li onclick="location.href='{{ action('AdminController@addEvent') }}'"">Novosti</li>
					<li onclick="location.href='{{ action('AdminController@addComp') }}'"">Natječaji</li>
					<li onclick="location.href='{{ action('AdminController@showMessages') }}'"">Poruke</li>
				</ul>

				<div class="logout">
			        <form action="{{ action('LoginController@logout') }}" method="POST" id="logout-form">
			            <input type="hidden" name="_token" value="{{ csrf_token() }}">
			           <a href="#" onclick="document.getElementById('logout-form').submit()"><i class="fa fa-power-off fa-2x fa-btn" aria-hidden="true" ></i></a>
			            
			        </form> 
		    	</div>

			</div>

		</div>

		<div class="left-header desktop">
			<img class="admin-logo" src="{{ URL::asset('images/logo.png') }}">

			<ul>
				<li onclick="location.href='{{ action('AdminController@addEvent') }}'"">Novosti</li>
				<li onclick="location.href='{{ action('AdminController@addComp') }}'"">Natječaji</li>
				<li onclick="location.href='{{ action('AdminController@showMessages') }}'"">Poruke</li>
			</ul>

			<div class="logout">
		        <form action="{{ action('LoginController@logout') }}" method="POST" id="logout-form">
		            <input type="hidden" name="_token" value="{{ csrf_token() }}">
		           <a href="#" onclick="document.getElementById('logout-form').submit()"><i class="fa fa-power-off fa-2x fa-btn" aria-hidden="true" ></i></a>
		            
		        </form> 
	    	</div>

		</div>


		<div class="main-body">
			<div class="body-head">--- GrasAdmin ---</div>

			<div class="main">

				@yield('homesection')

			</div>
		</div>

	</div>

	

@stop