@extends('app')

@section('content')

<style>
    .education {
        background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        box-shadow: inset 0 0 150px black;
        height: 500px;
    }
    .edu-pic {
        width: 90%;
        height: 90%;
    }
    .edu-info {
        color: black;
    }
    .edu-title {
        box-shadow: 0 0 15px rgba(8,8,8,0.9);
        border: 3px solid black;
    }
    .mobile {
        display: none;
    }
    .bell {
        position: absolute;
        right: 20px;
        top: 70px;
        font-size: 25px;
        color: white;
    }
    .gold {
        color: gold;
        text-shadow: 0 0 10px gold;
    }
    
</style>

    <!-- Header Section -->
    <div class="header">

        @include('layouts.mobile-sidebar')

        <div class="head-top">
            <div class="h-date ffa">{{ Carbon\Carbon::now()->formatLocalized('%d %B, %Y') }}</div>

            <div class="h-right">
                <div class="tel ffa"><span class="glyphicon glyphicon-phone-alt mr"></span>033/400 414</div>
                <div class="email ffa"><span class="glyphicon glyphicon-envelope mr"></span>info@gras.com.hr</div>
            </div>
        </div>

        @if(App\Utilities::checkBell())
            <span class="glyphicon glyphicon-bell bell gold" data-toggle="tooltip" data-placement="left" title="Novi natječaj!!"></span>
        @else
            <span class="glyphicon glyphicon-bell bell"></span>
        @endif

        <div class="logo-box">
            <h2 class="l-left"><span class="l1">Odaberite</span> <span class="l2">pravi smjer...</span></h2>
            <img class="logo" src="{{ URL::asset('images/logo.png') }}">
            <h2 class="l-right"><span class="l3">...smjer</span> <span class="l4">prema uspjehu</span></h2>
        </div>

        <div class="title"><span class="title-txt">GRADSKA RAZVOJNA AGENCIJA SLATINE</span></div>
       
        <div class="head-nav ffa">
            <a href="{{ action('EventController@allComps') }}" class="lnk">NATJEČAJI</a>
            <a href="{{ action('InfoController@documents') }}" class="lnk">DOKUMENTI</a>
            <a href="{{ action('InfoController@about') }}" class="lnk">O NAMA</a>
            <a href="{{ action('InfoController@contact') }}" class="lnk">KONTAKT</a>
            <a href="{{ action('CompetitionController@index') }}" class="lnk">SVI NATJEČAJI</a>
        </div>

    </div>

    <!-- News Section -->
    <div class="news">
        
        <div class="n-top ffa h170"><a href="{{ action('EventController@allEvents') }}"><span class="n-title">NOVOSTI</span></a></div>

        <div class="news-bottom">
        @foreach($events as $event)
            <a href="{{ action('EventController@showEvent', $event->id) }}" class="news-box">

                @if($event->type == 'news' || $event->pic != null)
                    <div class="img-box" style="background-image: url({{ URL::asset('images/news/'.$event->pic.'') }});"></div>
                @elseif($event->type == 'comp' && $event->pic == null)
                    <div class="img-box alter" style="background-image: url({{ URL::asset('images/icons/mega.png') }});"></div>
                @endif

                <div class="date f">{{ date('d.m.Y', strtotime($event->created_at)) }}</div>
                <div class="news-title">{{ $event->title }}</div>

                @if($event->summary == null)
                    <div class="news-desc">{{ str_limit($event->desc, $limit = 350, $end = '...') }}</div>
                @else
                    <div class="news-desc">{{ str_limit($event->summary, $limit = 350, $end = '...') }}</div>
                @endif

                <div class="area f">{{ count($event->comments) }}<span class="glyphicon glyphicon-comment ml"></span> </div>
            </a>
        @endforeach

        </div>
    </div>

     <!-- Numbers Section --> 
    <div class="numbers">
        <div class="n-top ffa h180"><a href="{{ action('InfoController@stats') }}"><span class="n-title overlay">GRAS U BROJKAMA</span></a></div>

        <div class="n-bottom">
            <div class="n1">
                <div class="n1-top r">46</div>
                <div class="n1-bottom">Suradnja na 46 različitih javnih poziva!</div>
            </div>

            <div class="n1">
                <div class="n1-top y">180</div>
                <div class="n1-bottom">Više od 180 individualnih i grupnih savjetovanja!</div>
            </div>

            <div class="n1">
                <div class="n1-top b">50</div>
                <div class="n1-bottom">Održano više od 50 radionica!</div>
            </div>

            <div class="n1">
                <div class="n1-top g">22</div>
                <div class="n1-bottom">Organizirano više od 22 događaja!</div>
            </div>

        </div>
    </div>

    <!-- Competitions Section -->
    <div class="comp">
        
        <div class="comp-l">
            <div class="cl-top"><div class="n-top ffa h170"><a href="{{ action('EventController@allComps') }}"><span class="n-title">NATJEČAJI</span></a></div></div>
            <div class="cl-bottom">

                <a href="{{ action('EventController@showEvent', $comp1->id) }}" class="cl-info first">
                    <div class="cl-title">{{ $comp1->title }}</div>
                    @if($comp1->summary == null)
                        <div class="cl-desc">{{ str_limit(strip_tags($comp1->desc), $limit = 400, $end = '...') }}</div>
                    @else
                        <div class="cl-desc">{{ str_limit(strip_tags($comp1->summary), $limit = 400, $end = '...') }}</div>
                    @endif
                </a>

                <a href="{{ action('EventController@showEvent', $comp2->id) }}" class="cl-info second">
                    <div class="cl-title">{{ $comp2->title }}</div>
                    @if($comp2->summary == null)
                        <div class="cl-desc">{{ str_limit(strip_tags($comp2->desc), $limit = 400, $end = '...') }}</div>
                    @else
                        <div class="cl-desc">{{ str_limit(strip_tags($comp2->summary), $limit = 400, $end = '...') }}</div>
                    @endif
                </a>

                <a href="{{ action('EventController@showEvent', $comp3->id) }}" class="cl-info third">
                    <div class="cl-title">{{ $comp3->title }}</div>
                    @if($comp3->summary == null)
                        <div class="cl-desc">{{ str_limit(strip_tags($comp3->desc), $limit = 400, $end = '...') }}</div>
                    @else
                        <div class="cl-desc">{{ str_limit(strip_tags($comp3->summary), $limit = 400, $end = '...') }}</div>
                    @endif
                </a>

                <a href="{{ action('EventController@showEvent', $comp4->id) }}" class="cl-info fourth">
                    <div class="cl-title">{{ $comp4->title }}</div>
                    @if($comp4->summary == null)
                        <div class="cl-desc">{{ str_limit(strip_tags($comp4->desc), $limit = 400, $end = '...') }}</div>
                    @else
                        <div class="cl-desc">{{ str_limit(strip_tags($comp4->summary), $limit = 400, $end = '...') }}</div>
                    @endif
                </a>

            </div>
        </div>

        <div class="comp-r">
            <div class="cl-top mobile clm"><div class="n-top ffa h170"><a href="{{ action('EventController@allComps') }}"><span class="n-title">NATJEČAJI</span></a></div></div>

            <div class="c-box-wrap">
                <a href="{{ action('EventController@showEvent', $comp1->id) }}" class="c-box c1" data-img="red" data-cid="first"><img class="nbr" src="{{ URL::asset('images/numbers/1.png') }}"></a>
                <a href="{{ action('EventController@showEvent', $comp2->id) }}" class="c-box c2" data-img="orange" data-cid="second"><img class="nbr" src="{{ URL::asset('images/numbers/2.png') }}"></a>
                <a href="{{ action('EventController@showEvent', $comp4->id) }}" class="c-box c4" data-img="green" data-cid="fourth"><img class="nbr" src="{{ URL::asset('images/numbers/4.png') }}"></a>
                <a href="{{ action('EventController@showEvent', $comp3->id) }}" class="c-box c3" data-img="blue" data-cid="third"><img class="nbr" src="{{ URL::asset('images/numbers/3.png') }}"></a>
            </div>
        </div>

    </div>

    <!-- Video Section -->
    <div class="video">
        
        <div class="v-left">
            <iframe class="maker_video" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fhr-hr.facebook.com%2FMakerFaireOsijek%2Fvideos%2F788393221336901%2F&width=500&show_text=false&height=280&appId" width="500" height="280" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowfullscreen></iframe>
        </div>

        <div class="v-right">
            <div class="v-info">
                <div class="v-title">MAKER FAIRE OSIJEK</div>
                <div class="v-desc">Osijek Mini Maker Faire organizira Osijek Software City u suradnji sa #labOS hacklabom i pod pokroviteljstvom Maker Media, izdavačem časopisa Make koji oko sebe okuplja globalni makers pokret</div>
            </div>
        </div>

    </div>

    <!-- Education Section -->
    <div class="education video">

        <div class="v-right edu-right">
            <div class="v-info edu-info">
                <div class="v-title edu-title">OBRAZOVANJE</div>
                <div class="v-desc">Gradska razvojna agencija Slatine osim u poduzetništvu sudjeluje i u obrazovanju i društvenom sektoru</div>
            </div>
        </div>

        <div class="v-left edu-left">
            <img class="edu-pic" src="{{ URL::asset('images/obrazovanje.png') }}">
        </div>

    </div>

    <!-- Links Section -->
    <div class="links">
        <a href="http://www.slatina.hr/" class="logo-lnk lg1"></a>
        <div class="line"></div>
        <a href="http://vpz.hr/" class="logo-lnk lg2"></a>
        <div class="line"></div>
        <a href="http://strukturnifondovi.hr/" class="logo-lnk lg3"></a>
    </div>

@stop