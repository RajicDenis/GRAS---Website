<!-- Header -->
<div class="header header2">

    @include('layouts.mobile-sidebar')

    <div class="head-top">
        <div class="h-date ffa">{{ Carbon\Carbon::now()->formatLocalized('%d %B, %Y') }}</div>

        <div class="h-right">
            <div class="tel ffa"><span class="glyphicon glyphicon-phone-alt mr"></span>033/400 414</div>
            <div class="email ffa"><span class="glyphicon glyphicon-envelope mr"></span>info@gras.com.hr</div>
        </div>
    </div>

    <div class="logo-box">
        <h2 class="l-left"><span class="l1">Odaberite</span> <span class="l2">pravi smjer...</span></h2>
        <img class="logo" src="{{ URL::asset('images/logo.png') }}">
        <h2 class="l-right"><span class="l3">...smjer</span> <span class="l4">prema uspjehu</span></h2>
    </div>

    <div class="title"><span class="title-txt">GRADSKA RAZVOJNA AGENCIJA SLATINE</span></div>

    <a href="{{ URL::route('home') }}" class="home-btn"><span class="glyphicon glyphicon-home home-gl"></span></a>

</div>