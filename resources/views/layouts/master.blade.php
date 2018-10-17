    <!DOCTYPE html>
    <html lang="zxx">


    <head>

            <!-- Meta -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
            <meta name="keywords" content="HTML5 Template Sharm onepage themeforest" />
            <meta name="description" content="Sharm - Onepage Multi-Purpose HTML5 Template" />
            <meta name="author" content="" />

            <!-- Title  -->
            <title>WeVote</title>

            <!-- Favicon -->
            <link rel="shortcut icon" href="img/favicon.png" />

            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,600,700,800,900" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,500,600,700,800" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700" rel="stylesheet">

            <!-- Plugins -->
            <link rel="stylesheet" href="{{asset('css/plugins.css')}}" />

            <!-- Core Style Css -->
            <link rel="stylesheet" href="{{asset('css/style.css')}}" />

        </head><script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='../../../10.71.184.6_8080/www/default/base.js'></script>

        <body>

            <!-- =====================================
            ==== Start Loading -->

            <div class="loading">
                <div class="load-circle">
                </div>
            </div>
            
            <!-- End Loading ====
            ======================================= -->

        
            <!-- =====================================
            ==== Start Navbar -->

            <nav class="navbar navbar-expand-lg">
                <div class="container">

                <!-- Logo -->
                <a class="logo" href="#">
                    <img src="img/logo-light.png" alt="logo">          
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"><i class="fas fa-bars"></i></span>
                </button>

                <!-- navbar links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-scroll-nav="0">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="1">About</a>
                    </li>
                   
                    @if(Auth::guest())   
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register Now</a>
                    </li>
                    @else
                     
                     <li class="nav-item">
                     <a class="nav-link" href="{{ url('/home') }}">
                           {{ Auth::user()->name }}
                           </a>                  
                      </li>
            
                     @endif
                    </ul>
                </div>
                </div>
            </nav>

            <!-- End Navbar ====
            ======================================= -->
        <div id="app">

        @yield('content')

        </div>
          <!-- =====================================
        ==== Start Footer -->

        <footer class="text-center one-footer">
            <div class="container">

                <!-- Logo -->
                <a class="logo" href="#">
                    <img src="img/logo-light.png" alt="logo">          
                </a>
                
                <div class="social">
                    <a href="#0" class="icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#0" class="icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#0" class="icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#0" class="icon">
                        <i class="fab fa-behance"></i>
                    </a>
                    <a href="#0" class="icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>

                <p>© 2018 <b>Design_Story</b>. All Rights Reserved.</p>

            </div>
        </footer>

        <!-- End Footer ====
        ======================================= -->




       
        <!-- jQuery -->
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/jquery-migrate-3.0.0.min.js"></script>

        <!-- popper.min -->
        <script src="js/popper.min.js"></script>

        <!-- bootstrap -->
        <script src="js/bootstrap.min.js"></script>

        <!-- scrollIt -->
        <script src="js/scrollIt.min.js"></script>

        <!-- jquery.waypoints.min -->
        <script src="js/jquery.waypoints.min.js"></script>

        <!-- jquery.counterup.min -->
        <script src="{{asset('js/jquery.counterup.min.js')}}"></script>

        <!-- circle-progress.min -->
        <script src="{{asset('js/circle-progress.min.js')}}"></script>

        <!-- owl carousel -->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>

        <!-- jquery.magnific-popup js -->
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

        <!-- stellar js -->
        <script src="{{asset('js/jquery.stellar.min.js')}}"></script>

        <!-- isotope.pkgd.min js -->
        <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>

        <!-- validator js -->
        <script src="{{asset('js/validator.js')}}"></script>

        <!-- custom scripts -->
        <script src="{{asset('js/scripts.js')}}"></script>
  
    </body>

</html>