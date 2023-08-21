<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8" />
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet" />

        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/vendors.css" />

        <link rel="stylesheet" href="/css/main.css" />

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <title>Adwan Real Estate</title>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-0ZQXJRQFGV"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-0ZQXJRQFGV');
        </script>
    </head>

    <body>

        @if(Session::has('msg'))
        <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="commentLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="row p-4">
                            <p class="text-3 mb-0">{{session('msg')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- cursor start -->
        <div class="cursor js-cursor">
            <div class="cursor__wrapper">
                <div class="cursor__follower js-follower"></div>
                <div class="cursor__label js-label"></div>
                <div class="cursor__icon js-icon"></div>
            </div>
        </div>
        <!-- cursor end -->

        <!-- barba container start -->
        <div class="barba-container" data-barba="container">
            <main class="main-content">
                
                @include('layouts.header')

                <div class="content-wrapper js-content-wrapper">

                    @include('layouts.aside')

                    @yield('content')

                    @include('layouts.footer')

                </div>

            </main>
        </div>
        <!-- barba container end -->

        <!-- JavaScript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="/js/vendors.js"></script>
        <script src="/js/main.js"></script><script src="/js/script.js"></script>

        <script src="/js/jquery.validate.min.js"></script>

        <script type="text/javascript">
            $("#contactform").validate();
            $("#projectform").validate();
            $("#inquireform").validate();

            $(window).on('load', function() {
                $('#myModal').modal('show');
            });
        </script>

        <!-- Share to open in a popup instead of a new tab -->
        <script type="text/javascript">
            ;(function($){

                /**
                * jQuery function to prevent default anchor event and take the href * and the title to make a share popup
                *
                * @param  {[object]} e           [Mouse event]
                * @param  {[integer]} intWidth   [Popup width defalut 500]
                * @param  {[integer]} intHeight  [Popup height defalut 400]
                * @param  {[boolean]} blnResize  [Is popup resizeabel default true]
                */
                $.fn.customerPopup = function (e, intWidth, intHeight, blnResize) {
                    // Prevent default anchor event
                    e.preventDefault();

                    // Set values for window
                    intWidth = intWidth || '500';
                    intHeight = intHeight || '400';
                    strResize = (blnResize ? 'yes' : 'no');

                    // Set title and open popup with focus on it
                    var strTitle = ((typeof this.attr('title') !== 'undefined') ? this.attr('title') : 'Social Share'),
                    strParam = 'width=' + intWidth + ',height=' + intHeight + ',resizable=' + strResize,
                    objWindow = window.open(this.attr('href'), strTitle, strParam).focus();
                }

                /* ================================================== */
                $(document).ready(function ($) {
                    $('.customer.share').on("click", function(e) {
                        $(this).customerPopup(e);
                    });
                });

            }(jQuery));
        </script>
    </body>

</html>
