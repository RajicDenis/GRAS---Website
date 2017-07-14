<style>
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
        top: 60px;
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
    .header2 {
    	z-index: auto !important;
    }
    .trigger {
        opacity: 1 !important;
    }
    .mobile-logo {
        position: absolute;
        top: 15px;
        width: 100px;
        height: 100px;
        background-image: url({{ URL::asset('images/logo.png') }});
        background-size: cover;
    }
</style>

<div class="mobile burger"><span class="glyphicon glyphicon-menu-hamburger trigger"></span></div>

<div class="m-sidebar mobile">

    <div class="mobile-logo"></div>
    
    <div class="mobile-nav ffa">
        <a href="{{ action('EventController@allComps') }}" class="lnk m-lnk">NATJEČAJI</a>
        <a href="{{ action('InfoController@documents') }}" class="lnk m-lnk">DOKUMENTI</a>
        <a href="{{ action('InfoController@about') }}" class="lnk m-lnk">O NAMA</a>
        <a href="{{ action('InfoController@contact') }}" class="lnk m-lnk">KONTAKT</a>
        <a href="{{ action('CompetitionController@index') }}" class="lnk m-lnk">SVI NATJEČAJI</a>
    </div>


</div>
