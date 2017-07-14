<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GRAS - Gradska razvojna agencija Slatine</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        {{ Html::style('css/plugins/jquery.dataTables.yadcf.css')}}
        {{ Html::style('css/plugins/sweetalert.css')}}

        {{ Html::style('css/header.css')}}
        {{ Html::style('css/numbers.css')}}
        {{ Html::style('css/news.css')}}
        {{ Html::style('css/competitions.css')}}
        {{ Html::style('css/video.css')}}
        {{ Html::style('css/links.css')}}
        {{ Html::style('css/footer.css')}}
        
        {{ Html::style('css/media/news.css')}}
        {{ Html::style('css/media/header.css')}}
        {{ Html::style('css/media/competitions.css')}}
        {{ Html::style('css/media/video.css')}}
        {{ Html::style('css/media/links.css')}}
        {{ Html::style('css/media/footer.css')}}
        {{ Html::style('css/media/numbers.css')}}

        {{ Html::style('css/plugins/social.css')}}
        
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>

         <!-- jQuery & jQuery UI-->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
        
        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.13/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

        {{ Html::script('js/jquery.mousewheel.min.js')}}
        {{ Html::script('js/jquery.simplr.smoothscroll.min.js')}}
        {{ Html::script('js/jquery.dataTables.yadcf.js')}}
        {{ Html::script('js/sweetalert.min.js')}}
        {{ Html::script('js/jquery.jscroll.js')}}

        <!-- Styles -->
        <style>
            body {
                margin: 0;
                display: flex;
            }
            a:hover {
                text-decoration: none;
            }
            .h180 {
                height: 180px !important;
            }
            .ffa {
                font-family: 'Amaranth', sans-serif;
            }
            .mr {
                margin-right: 10px;
            }
            .alter {
                background-size: contain !important;
                background-repeat: no-repeat !important;
            }
            .container {
                position: relative;
                display: flex;
                flex-direction: column;
                width: 100%;
                padding: 0;
            }

            .header, .numbers, .news, .numbers, .video, .footer {
                box-shadow: inset 0 0 15px rgba(8,8,8,0.9);
            }
            .site-title {
                box-shadow: 0 0 15px black !important;
            }
            .st-txt {
                text-shadow: 2px 3px 5px rgba(8,8,8,0.6);
            }

            /* Header section */
            .header {
                background-image: url({{ URL::asset('images/hdr1.jpg') }});
                overflow: hidden;
                background-size: cover;
                background-position: center;
            }

            /* News */
            .news {   
                background-image: url({{ URL::asset('images/hdr3.jpg') }});
            }

            /* Video section */
            .video {  
                background-image: url({{ URL::asset('images/hdr4.jpg') }});
            }

            /* Links section */
            .lg1 {
                background-image: url({{ URL::asset('images/links/lg1.png') }});
            }
            .lg2 {
                background-image: url({{ URL::asset('images/links/lg2.png') }});
            }
            .lg3 {
                background-image: url({{ URL::asset('images/links/lg3.png') }});
            }

            /* Footer section */
            .f-logo { 
                background-image: url({{ URL::asset('images/logo.png') }});
            }

            /* Dark overlay for mobile */
            .mask {
                background: rgba(0,0,0,0.8);
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                transition: all 0.2s ease-in-out;
                display: none;
            }   
            .mobile {
                display: none;
            } 

            @media screen and (max-width: 1024px) {
                .st-txt {
                    width: 300px !important;
                }
            } 

            @media screen and (max-width: 768px) {
                .st-txt {
                    font-size: 35px !important;
                    width: 230px !important;
                }
            } 

            @media screen and (max-width: 600px) {
                .st-txt {
                    margin-left: 30px !important;
                    margin-top: 30px;
                    border: none !important;
                    font-size: 30px !important;
                }
            } 

            @media screen and (max-width: 414px) {
                .mobile {
                    display: flex;
                }
            }  

            @media screen and (max-width: 240px) {
                /* Mobile sidebar */
                .m-sidebar {
                    width: 150px !important;
                }
                .m-lnk {
                    width: 150px !important;
                }
            }

        </style>

        <script>
            $(document).ready(function() {
                
                /* Share on social popup */
                var popupSize = {
                    width: 780,
                    height: 550
                };

                if($(window).width() > 850) {

                    $('.social-buttons > a').on('click', function(e){

                        var verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
                            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

                        var popup = window.open($(this).prop('href'), 'social',
                            'width='+popupSize.width+',height='+popupSize.height+
                            ',left='+verticalPos+',top='+horisontalPos+
                            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

                        if (popup) {
                            popup.focus();
                            e.preventDefault();
                        }
                    });
                }

                /* Tooltip on notification bell */
                $('.gold').tooltip();

                /* Mobile sidebar */
                $('.burger').click(function() {
                    var clicks = $(this).data('clicks');
                    if (clicks) {
                        $('.m-sidebar').css('left', '-200px');
                        $(this).css({
                            'left': '10px',
                            'position': 'absolute'
                        });
                        $('.mask').css({
                            'display': 'none',
                            'z-index': '0'
                        });

                        $(this).find('.glyphicon').replaceWith('<span class="glyphicon glyphicon-menu-hamburger trigger"></span>');
                    } else {
                        $('.m-sidebar').css('left', '0');

                        if ($('.news-box').width() != 200 ){
                            $(this).css({
                                'left': '210px',
                                'position': 'fixed'
                            });
                        } else {
                            $(this).css({
                                'left': '160px',
                                'position': 'fixed'
                            });
                        }
                        $('.mask').css({
                            'display': 'flex',
                            'z-index': '190'
                        });

                        $(this).find('.glyphicon').replaceWith('<span class="glyphicon glyphicon-remove-circle trigger"></span>');
                    }
                    $(this).data("clicks", !clicks);
                });
                
                // Random background color generator
                $('.img-circle').each(function() {
                    var bgColorArray = ['#FF1493','#FFD700','#20B2AA','#02AB68','#FF00FF', '#D2691E', '#DC143C', '#0F64D9', '#FF4200', '#ff003f', '#005B63'],
                    selectBG = bgColorArray[Math.floor(Math.random() * bgColorArray.length)];
                    $(this).css('background-color', selectBG);
                });

                /* Comments - show form on click */
                $('.comment').on('click', function() {
                    $('.vanish').css({
                        'display': 'flex',
                        'position': 'relative',
                        'left': '0'
                    });
                });

                $('.close').on('click', function() {
                    $('.vanish').css({
                        'display': 'none'
                    });
                });

                $('.reply-btn').on('click', function() {
                    $(this).closest('.full-comment').find('.reply-form').css('display', 'block');
                });

                $('.close-reply').on('click', function() {
                    $(this).closest('.full-comment').find('.reply-form').css('display', 'none');
                });

                $('.full-comment').find('.child1').find('.child1').find('.child1').css({
                    'margin-left': '0',
                    'border-left': '0'
                });

                /* Comments - minify/hide comments on click */
                $('.mini').on('click', function() {
                    var clicks = $(this).data('clicks');

                    $(this).closest('.full-comment').find('.full-comment').toggle();

                    if (!clicks) {
                        $(this).removeClass('glyphicon-minus').addClass('glyphicon-plus');
                    } else {
                        $(this).removeClass('glyphicon-plus').addClass('glyphicon-minus');
                    }

                    $(this).data("clicks", !clicks);
                    
                });

                /* Stat hexagon hover */
                $('.change').on('mouseenter', function() {
                    $(this).find('.icon').css('opacity', '0');
                    $(this).find('.c-year').css('opacity', '1');
                });
                
                $('.change').on('mouseleave', function() {
                    $(this).find('.icon').css('opacity', '1');
                    $(this).find('.c-year').css('opacity', '0');
                });

                $('.hexIn').on('mouseenter', function() {
                    $(this).find('.hex-nbr').css('opacity', '0');
                });

                $('.hexIn').on('mouseleave', function() {
                    $(this).find('.hex-nbr').css('opacity', '1');
                });

                /* News section hover */
                $('.news-box').on('mouseenter', function() {
                    $(this).find($('.news-title')).css({
                        'height': '185px',
                        'padding-top': '25px'
                    });
                    $(this).find($('.news-desc')).css({
                        'opacity': '0',
                        'height': '62px'
                    });
                });

                $('.news-box').on('mouseleave', function() {
                    $(this).find($('.news-title')).css({
                        'height': '62px',
                        'padding-top': '0px'
                    });
                    $(this).find($('.news-desc')).css({
                        'opacity': '0.7',
                        'height': '165px'
                    });
                });

                /* Competitions section hover */
                $('.c-box').on('mouseenter', function() {
                    var color = $(this).css('background-color');
                        img = $(this).data('img');
                        cid = $(this).data('cid');

                    $('.c-box').css('transform', 'scale(1)');
                    $(this).css('transform', 'scale(1.13)');

                    if(img == 'red') {
                        $('.comp').css('background', '#ff003f');
                    }
                    if(img == 'orange') {
                        $('.comp').css('background', '#FB7100');
                    }
                    if(img == 'blue') {
                        $('.comp').css('background', '#19A2CF');
                    }
                    if(img == 'green') {
                        $('.comp').css('background', '#49AE2D');
                    }

                    $('.cl-info').css('opacity', '0');
                    $('.'+cid+'').css('opacity', '1');

                });

                function startLoop() {
                    $('.c-box').each(function(i) { // i is index of this in the collection
                        var el = $(this);
                        setTimeout(function () {
                            el.trigger('mouseenter');
                        }, i * 7000); // each button gets a multiple of 200ms, depending on its index
                    }); 
                }

                startLoop();
                var loopInterval = setInterval(startLoop, 32000);

                //Searchbar for company table
                if($('#comp_table').length > 0) {

                    $('#comp_table').dataTable({
                        "oLanguage": { 
                            "sSearch": "",
                            "sSearchPlaceholder": "Pretraži...",
                            "sLengthMenu": "<span class='show-desc'>Prikaži</span> _MENU_ <span class='show-desc'>natječaja</span>",
                    }, 
                    "paging" : true,
                    "columnDefs": [ {
                        "searchable": false,
                        "orderable": false,
                        "targets": 0
                    } ],
                    "ordering" : false,
                    "searching": true,
                    "info" : false,
                    "columns": [
                        { "orderable": false },
                        { "orderable": false },
                        { "orderable": false },
                        { "orderable": false },
                        { "orderable": false },
                        { "orderable": false },
                        { "orderable": false },
                        { "orderable": false },
                        { "orderable": false },
                    ]
                    }).yadcf([
                        {column_number : 7, column_data_type: "html", html_data_type: "text", filter_default_label: "STATUS"},
                    ]);

                } /* End searchbar */ 

                /* Infinite scroll for news and competitions */
                $('ul.pagination').hide();
                $('.infinite-scroll').jscroll({
                    autoTrigger: true,
                    debug: true,
                    padding: 0,
                    loadingHtml: '<img class="loading" src="{{ URL::asset('images/icons/loading.gif') }}" alt="Loading" />',
                    nextSelector: '.pagination li.active + li a',
                    contentSelector: 'div.infinite-scroll',
                    callback: function() {
                        $('ul.pagination').remove();
                    }
                });
                
            });
        </script>
    </head>
    <body>

        <div class="container">
            <span class="mask"></span>

            @yield('content')

            <!-- Footer Section -->
            <div class="footer">
                <div class="f-top">
                    <div class="f-box f-logo"></div>
                    <div class="f-box f-address">
                        <h4 class="f-title">KONTAKT</h4>
                        <ul class="ulist">
                            <li><span class="glyphicon glyphicon-map-marker gl"></span>Ul. Braće Radić 2</li>
                            <li class="ml40">33520 Slatina</li>
                            <li><span class="glyphicon glyphicon-phone gl"></span>+385 33 400 414</li>
                            <li><span class="glyphicon glyphicon-envelope gl"></span>info@gras.com.hr</li>
                        </ul>
                    </div>

                    <div class="f-box f-links">
                        <h4 class="f-title">LINKOVI</h4>
                        <ul class="ulist">
                            <li><a class="f-l" href="https://esavjetovanja.minpo.hr/">E-savjetovanje</a></li>
                            <li><a class="f-l" href="http://www.bizimpact.hr/hrvatski/naslovnica_1/">BIZimpact</a></li>
                            <li><a class="f-l" href="http://www.strengthened-capacities.com/work/">Jačanje kapaciteta</a></li>
                        </ul>
                    </div>

                    <div class="f-box f-social">
                        <h4 class="f-title">DRUŠTVENE MREŽE</h4>
                        <ul class="ulist soc">
                            <a class="f-l" href="https://www.facebook.com/czpgs"><li><img class="scl" src="{{ URL::asset('images/social/fb.png') }}">Facebook</li></a>
                        </ul>
                    </div>
                </div>

                <div class="f-bottom">
                    <div class="fb-left">© Copyright 2017 | GRAS | Sva prava pridržana</div>
                    <div class="fb-right">Smještaj: midnel.hr | Izrada: Gradska razvojna agencija Slatine</div>
                </div>
            </div>

        </div>
    
    </body>
</html>
