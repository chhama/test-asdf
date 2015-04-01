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




    <script type="text/javascript" src="js/modernizr.custom.32033.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>
   
    <header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="fa fa-bars fa-lg"></span>
                        </button>
                        <a class="navbar-brand" href='/'>
                            <h2>National Health Mission</h2>
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#stateprofile" class="smooth">State Profile</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ URL::route('page.index','id=2') }}" class="smooth">Executive Summary</a></li>
                                        <li><a href="{{ URL::route('page.index','id=3') }}" class="smooth">Conceptual Framework</a></li>
                                    </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">State PIP <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">PIP 2000-2001</a></li>
                                        <li><a href="#">PIP 2001-2002</a></li>
                                    </ul>
                            </li>
                            <li><a href="#disclosure">Mandatory Disclosure</a>
                            </li>
                            <li><a href="#gallery">Gallery</a>
                            <li><a href="#support">Contacts</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-->
        </nav>

        
        <!--RevSlider-->
              <div class="tp-container lowcon">

       @yield('slider')
</div>
            </header>
            <div class="row" style="margin-top:10px;"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel-group" id="accordion">
                              <div class="panel panel-info">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                      NRHM + RMNCH plus A
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <ul>
                                        <li>RCH</li>
                                            <ul>
                                                <li>Maternal Health
                                                <li>Child Health
                                                <li>Family Planning
                                                <li>Adolescent Health/RKSK
                                                <li>RBSK
                                                <li>PNDT
                                            </ul>

                                        <li>Additionalities under NRHM</li>
                                            <ul>
                                                <li>ASHA
                                                <li>Clinical Establishment Act
                                                <li>AYUSH
                                                <li>IEC/BCC
                                                <li>Mobile Medical Unit (MMU)
                                                <li>National Ambulance Service (NAS)
                                                <li>Public Private Partnership (PPP)
                                                <li>Quality Assurance
                                                <li>Health Management Information System (HMIS)
                                                <li>Mother and Child Tracking System (MCTS)
                                                <li>Immunisation
                                                <li>National Iodine Deficiency Disorders Control Programme (NIDDCP)
                                                <li>RKS and Untied Funds

                                            </ul>
                                    </ul>

                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-info">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        NUHM
                                     </a>
                                  </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                  <div class="panel-body">
                                        National Urban Health Mission
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-info">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                      Disease Control Programme
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                  <div class="panel-body">
                                        <ul>
                                            <li>Integrated Disease Surveillance Programme (IDSP)
                                            <li>National Vector Borne Disease Control Programme (NVBDCP)
                                            <li>National Leprosy Eradication Programme (NLEP)
                                            <li>TB (RNTCP)
                                        </ul>
                                  </div>
                                    </div>
                                      </div>
                                       <div class="panel panel-info">
                                        <div class="panel-heading">
                                          <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                              Non-communicable diseases
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse">
                                          <div class="panel-body">
                                                <ul>
                                                    <li>National Programme for Control of Blindness (NPCB)</li>
                                                    <li>National Mental Health Programme (NMHP)</li>
                                                    <li>National Programme for the Healthcare of the Elderly (NPHCE)</li>
                                                    <li>National Programme for  Prevention and control of Deafness (NPPCD)</li>
                                                    <li>National Tobacco Control Programme (NTCP)</li>
                                                    <li>National Oral Health Programme (NOHP)</li>
                                                    <li>National Programme for Prevention and Control of Cancer, Diabetes, Cardiovascular Diseases and Stroke (NPCDCS)</li>
                                                </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                    </div>
        <div class="col-md-9">
            <ul class="nav nav-pills" role='tablist' data-tabs='tabs'>
            <li class=""><a href="#order" data-toggle="tab">Government Order</a></li>
            <li class=""><a href="#ads" data-toggle="tab">Advertisement</a></li>
            <li class=""><a href="#tender" data-toggle="tab">Tender</a></li>
            <li class=""><a href="#training" data-toggle="tab">Trainings</a></li>
            <li class=""><a href="#mis" data-toggle="tab">MIS Report</a></li>
            <li class=""><a href="#activities" data-toggle="tab">Activities under NHM</a></li>
            <li class=""><a href="#notice" data-toggle="tab">Notifications</a></li>
            <li class=""><a href="#iec" data-toggle="tab">IEC/BCC</a></li>


            </ul>
            
            <div id='myTab' class="tab-content">
                <div class="tab-pane " id='order'>  
                    <p>
                    Orderlist
                    </p>
                </div>

                <div class="tab-pane " id='ads'>  
                    Advertisement List:
                    <ul>
                        <li>First</li>
                        <li>Second</li>
                    </ul>
                </div>

                <div class="tab-pane " id='tender'>  
                    Tender
                    <ul>
                        <li>First</li>
                        <li>Second</li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
    </div>


    <div class="wrapper">
        @yield('content')



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

 

</body>

</html>
