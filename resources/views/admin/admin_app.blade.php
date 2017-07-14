<!DOCTYPE html>
<html>
<head>
    <title>GRAS - admin</title>

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

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ URL::asset('css/plugins/sweetalert.css') }}">

     <!-- jQuery & jQuery UI-->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.13/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script src="{{ URL::asset('js/sweetalert.min.js') }}"></script>

    <style>
        .alert-success, .alert-danger, .alert-warning {
            font-family: 'Amaranth', sans-serif;
            font-size: 16px;
            text-align: center;
        } 
        #mceu_35 {
            display: none !important;
        }  
        .mobile {
            display: none;
        }
    </style>

    <script>
        $(document).ready(function() {

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
                }
                $(this).data("clicks", !clicks);
            });

            tinymce.init({ 
                selector: 'textarea.tiny',
                plugins: "link",
                menubar: "insert",
                toolbar: "styleselect | undo redo | removeformat | bold italic underline |  aligncenter alignjustify  | bullist numlist outdent indent | link | print | fontselect | fontsizeselect | link"
                });

            //Confirm modal for delete
            $('.del').on('click', function(e) {
                e.preventDefault(); // Prevent the href from redirecting directly
                var linkURL = $(this).attr("href");
                warnBeforeRedirect(linkURL);
            });

            function warnBeforeRedirect(linkURL) {
                swal({
                    title: "Jeste li sigurni?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ukloni!",
                    closeOnConfirm: false
                },
                function(isConfirm){
                    if(isConfirm) {
                       window.location.href = linkURL; 
                    }  
                });
            }

            $('#addEvent_table').dataTable({
                "oLanguage": { 
                    "sSearch": "",
                    "sSearchPlaceholder": "Pretraži..."
                },
                "info" : false,
                "ordering" : false,
                "paging": true
            });

            $('#addComp_table').dataTable({
                "oLanguage": { 
                    "sSearch": "",
                    "sSearchPlaceholder": "Pretraži..."
                },
                "info" : false,
                "ordering" : false,
                "paging": true
            });

        });
    </script>

</head>
<body>

    @yield('content')

</body>
</html>