<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>National Health Mission</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="favicon.png">


    {!!Html::Style('css/bootstrap.css')!!}
    
    {!!Html::Style('css/animate.css')!!}
    {!!Html::Style('css/font-awesome.min.css')!!}
    {!!Html::Style('css/slick.css')!!}
    {!!Html::Style('js/rs-plugin/css/settings.css')!!}

    {!!Html::Style('css/freeze.css')!!}
    {!!Html::Style('css/custom.css')!!}



    <script type="text/javascript" src="js/modernizr.custom.32033.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>

    <div class="pre-loader">
        <div class="load-con">
            <!-- <img src="images/freeze/logo.png" class="animated fadeInDown" alt=""> -->
            <div class="spinner">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
            </div>
        </div>
    </div>
   
    <header>
        
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="fa fa-bars fa-lg"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <h2>National Health Mission</h2>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/#stateprofile">State Profile</a>
                        </li>
                        <li><a href="/#about">About Us</a>
                        </li>
                        <li><a href="/#reviews">State PIP</a>
                        </li>
                        <li><a href="/#screens">Programmes</a>
                        </li>
                        <li><a href="/#disclosure">Mandatory Disclosure</a>
                        </li>
                        <li><a href="/#support">Contacts</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-->
        </nav>

        
        <!--RevSlider-->
        <div class="tp-container lowcon">
     </header>

    <div class="wrapper">
        <section id="disclosure">
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>{{ $page->title }}</h1>
                    <div class="divider"></div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 scrollpoint sp-effect2">
                        {{ $page->body }}
                    </div>
                </div>
            </div>
        </section>
    </div>

        <!-- Modal -->

        <footer>
            <div class="container">
                
                <div class="social">
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-google-plus fa-lg"></i></a>
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-facebook fa-lg"></i></a>
                </div>
                <div class="rights">
                    <p>Copyright &copy; {{date('Y')}} National Health Mission</p>
                </div>
            </div>
        </footer>

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/placeholdem.min.js"></script>
    <script src="js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/scripts.js"></script>

    <script>
        $(document).ready(function() {
            appMaster.preLoader();
            $('#myTab a').click(function (e) {
              e.preventDefault();
              $(this).tab('show');
            });
        });


    </script>

</body>

</html>
