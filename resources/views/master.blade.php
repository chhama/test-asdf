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
                            <li><a href="/#stateprofile" class="smooth">State Profile</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ URL::route('page.index','id=2') }}" class="smooth">Executive Summary</a></li>
                                        <li><a href="{{ URL::route('page.index','id=3') }}" class="smooth">Conceptual Framework</a></li>
                                    </ul>
                            </li>
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">State PIP <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">PIP 2000-2001</a></li>
                                        <li><a href="#">PIP 2001-2002</a></li>
                                    </ul>
                            </li> -->
                            <li><a href="{{ URL::to('list?id=10') }}">State PIP</a>
                            <li><a href="{{ URL::to('list?id=12') }}">Mandatory Disclosure</a></li>
                            <li><a href="{{ URL::to('galleryalbum') }}">Gallery</a>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">e-HRMIS <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ URL::to('facilities') }}" class="smooth">Facilities</a></li>
                                        <li><a href="{{ URL::to('hr') }}" class="smooth">Human Resource</a></li>
                                    </ul>
                            </li>
                            <!-- <li><a href="{{ URL::to('ehrmis') }}">HRMIS</a> -->
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
                    <h3>Programmes</h3>
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
                                                <?php $rchs = App\Post::where('category_id','=',13)->orderBy('id','desc')->get(); ?>
                                                @foreach($rchs as $nch)
                                                    <?php if(strlen($nch->download)>3 && strlen($nch->body)<1) { ?>
                                                        <li><a href="{{ $nch->download }}" download>{{ $nch->title }}</a></li>
                                                    <?php } else { ?>
                                                        <li><a href="{{ URL::route('page.index','id='.$nch->id) }}">{{ $nch->title }}</a></li>
                                                    <?php } ?>
                                                @endforeach
                                            </ul>

                                        <li>Additionalities under NRHM</li>
                                            <ul>
                                                <?php $additonalNRHM = App\Post::where('category_id','=',17)->orderBy('id','desc')->get(); ?>
                                                @foreach($additonalNRHM as $additional)
                                                    <?php if(strlen($additional->download)>3 && strlen($additional->body)<1) { ?>
                                                        <li><a href="{{ $additional->download }}" download>{{ $additional->title }}</a></li>
                                                    <?php } else { ?>
                                                        <li><a href="{{ URL::route('page.index','id='.$additional->id) }}">{{ $additional->title }}</a></li>
                                                    <?php } ?>
                                                @endforeach
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
                                        <ul>
                                            <?php $nuhms = App\Post::where('category_id','=',14)->orderBy('id','desc')->get(); ?>
                                            @foreach($nuhms as $nuhm)
                                                <?php if(strlen($nuhm->download)>3 && strlen($nuhm->body)<1) { ?>
                                                    <li><a href="{{ $nuhm->download }}" download>{{ $nuhm->title }}</a></li>
                                                <?php } else { ?>
                                                    <li><a href="{{ URL::route('page.index','id='.$nuhm->id) }}">{{ $nuhm->title }}</a></li>
                                                <?php } ?>
                                            @endforeach
                                        </ul>
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
                                            <?php $dcps = App\Post::where('category_id','=',15)->orderBy('id','desc')->get(); ?>
                                            @foreach($dcps as $dcp)
                                                <?php if(strlen($dcp->download)>3 && strlen($dcp->body)<1) { ?>
                                                    <li><a href="{{ $dcp->download }}" download>{{ $dcp->title }}</a></li>
                                                <?php } else { ?>
                                                    <li><a href="{{ URL::route('page.index','id='.$dcp->id) }}">{{ $dcp->title }}</a></li>
                                                <?php } ?>
                                            @endforeach
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
                                                    <?php $ncds = App\Post::where('category_id','=',16)->orderBy('id','desc')->get(); ?>
                                                    @foreach($ncds as $ncd)
                                                        <?php if(strlen($ncd->download)>3 && strlen($ncd->body)<1) { ?>
                                                            <li><a href="{{ $ncd->download }}" download>{{ $ncd->title }}</a></li>
                                                        <?php } else { ?>
                                                            <li><a href="{{ URL::route('page.index','id='.$ncd->id) }}">{{ $ncd->title }}</a></li>
                                                        <?php } ?>
                                                    @endforeach
                                                </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                    </div>
        <div class="col-md-9">
            <ul class="nav nav-pills" role='tablist' data-tabs='tabs'>
            <li class=""><a href="#order" data-toggle="tab" onClick="$('.yieldContent').hide()">Government Order</a></li>
            <li class=""><a href="#notice" data-toggle="tab" onClick="$('.yieldContent').hide()">Notifications</a></li>
            <li class=""><a href="#activities" data-toggle="tab" onClick="$('.yieldContent').hide()">Activities under NHM</a></li>
            <li class=""><a href="#mis" data-toggle="tab" onClick="$('.yieldContent').hide()">MIS Report</a></li>
            <li class="text-center"><a href="#ads" data-toggle="tab" onClick="$('.yieldContent').hide()">Schemes & Guideline<br> under NHM</a></li>
            <li class="text-center"><a href="#training" data-toggle="tab" onClick="$('.yieldContent').hide()">Trainings <br> under NHM</a></li>
            <li class=""><a href="#iec" data-toggle="tab" onClick="$('.yieldContent').hide()">IEC/BCC</a></li>
            <li class=""><a href="#tender" data-toggle="tab" onClick="$('.yieldContent').hide()">Tender</a></li>


            </ul>
            
            <div id='myTab' class="tab-content row">

                <div class="tab-pane " id='order'>  
                    <?php $govtOrders = App\Post::where('category_id','=',11)->orderBy('id','desc')->paginate(); ?>
                    <div class="scrollpoint sp-effect5">
                        <h3>Government Order</h3>
                    </div>
                    <ol start='1'>
                    @foreach($govtOrders as $govtOrder)
                        <?php if(strlen($govtOrder->download)>3 && strlen($govtOrder->body)<1) { ?>
                            <li><a href="{{ $govtOrder->download }}" download>{{ $govtOrder->title }}</a></li>
                        <?php } else { ?>
                            <li><a href="{{ URL::route('page.index','id='.$govtOrder->id) }}">{{ $govtOrder->title }}</a></li>
                        <?php } ?>
                    @endforeach
                    <ol>
                    {!! $govtOrders !!}
                    
                </div>

                <div class="tab-pane " id='ads'>  
                    <?php $advertistments = App\Post::where('category_id','=',3)->orderBy('id','desc')->paginate(); ?>
                    <div class="scrollpoint sp-effect5">
                        <h3>Advertisement List</h3>
                    </div>
                    <ol start='1'>
                    @foreach($advertistments as $advertist)
                        <?php if(strlen($advertist->download)>3 && strlen($advertist->body)<1) { ?>
                            <li><a href="{{ $advertist->download }}" download>{{ $advertist->title }}</a></li>
                        <?php } else { ?>
                            <li><a href="{{ URL::route('page.index','id='.$advertist->id) }}">{{ $advertist->title }}</a></li>
                        <?php } ?>
                    @endforeach
                    <ol>
                    {!! $advertistments !!}
                </div>

                <div class="tab-pane " id='tender'>  
                    <?php $tenders = App\Post::where('category_id','=',4)->orderBy('id','desc')->paginate(); ?>
                    <div class="scrollpoint sp-effect5">
                        <h3>Tender</h3>
                    </div>
                    <ol start='1'>
                    @foreach($tenders as $tender)
                        <?php if(strlen($tender->download)>3 && strlen($tender->body)<1) { ?>
                            <li><a href="{{ $tender->download }}" download>{{ $tender->title }}</a></li>
                        <?php } else { ?>
                            <li><a href="{{ URL::route('page.index','id='.$tender->id) }}">{{ $tender->title }}</a></li>
                        <?php } ?>
                    @endforeach
                    <ol>
                    {!! $tenders !!}
                </div>

                <div class="tab-pane " id='training'>  
                    <?php $trainings = App\Post::where('category_id','=',5)->orderBy('id','desc')->paginate(); ?>
                    <div class="scrollpoint sp-effect5">
                        <h3>Trainings</h3>
                    </div>
                    <ol start='1'>
                    @foreach($trainings as $training)
                        <?php if(strlen($training->download)>3 && strlen($training->body)<1) { ?>
                            <li><a href="{{ $training->download }}" download>{{ $training->title }}</a></li>
                        <?php } else { ?>
                            <li><a href="{{ URL::route('page.index','id='.$training->id) }}">{{ $training->title }}</a></li>
                        <?php } ?>
                    @endforeach
                    <ol>
                    {!! $trainings !!}
                </div>

                <div class="tab-pane " id='mis'>  
                    <?php $misreports = App\Post::where('category_id','=',6)->orderBy('id','desc')->paginate(); ?>
                    <div class="scrollpoint sp-effect5">
                        <h3>MIS Report</h3>
                    </div>
                    <ol start='1'>
                    @foreach($misreports as $misreport)
                        <?php if(strlen($misreport->download)>3 && strlen($misreport->body)<1) { ?>
                            <li><a href="{{ $misreport->download }}" download>{{ $misreport->title }}</a></li>
                        <?php } else { ?>
                            <li><a href="{{ URL::route('page.index','id='.$misreport->id) }}">{{ $misreport->title }}</a></li>
                        <?php } ?>
                    @endforeach
                    <ol>
                    {!! $misreports !!}
                </div>

                <div class="tab-pane " id='activities'>  
                    <?php $activities = App\Post::where('category_id','=',7)->orderBy('id','desc')->paginate(); ?>
                    <div class="scrollpoint sp-effect5">
                        <h3>Activities Under NHM</h3>
                    </div>
                    <ol start='1'>
                    @foreach($activities as $activity)
                        <?php if(strlen($activity->download)>3 && strlen($activity->body)<1) { ?>
                            <li><a href="{{ $activity->download }}" download>{{ $activity->title }}</a></li>
                        <?php } else { ?>
                            <li><a href="{{ URL::route('page.index','id='.$activity->id) }}">{{ $activity->title }}</a></li>
                        <?php } ?>
                    @endforeach
                    <ol>
                    {!! $activities !!}
                </div>

                <div class="tab-pane " id='notice'>  
                    <?php $notifications = App\Post::where('category_id','=',2)->orderBy('id','desc')->paginate(); ?>
                    <div class="scrollpoint sp-effect5">
                        <h3>Notifications</h3>
                    </div>
                    <ol start='1'>
                    @foreach($notifications as $noti)
                        <?php if(strlen($noti->download)>3 && strlen($noti->body)<1) { ?>
                            <li><a href="{{ $noti->download }}" download>{{ $noti->title }}</a></li>
                        <?php } else { ?>
                            <li><a href="{{ URL::route('page.index','id='.$noti->id) }}">{{ $noti->title }}</a></li>
                        <?php } ?>
                    @endforeach
                    <ol>
                    {!! $notifications !!}
                </div>

                <div class="tab-pane " id='iec'>  
                    <?php $iecsPhotos = App\Photo::where('album_id','=',1)->orderBy('name')->paginate(); ?>
                    <div class="scrollpoint sp-effect5">
                        <h3>IEC / BCC</h3>
                    </div>
                    @foreach($iecsPhotos as $photo)
                        <div class="col-md-3 text-center">
                            <a href="#"><img src="{{ $photo->directory }}{{ $photo->photo_file }}" class="img-thumbnail" ></a><br>
                            <strong>{{ $photo->name }}</strong>
                        </div>
                    @endforeach

                    {!! $iecsPhotos !!}
                </div>
            </div>

            <div class="row yieldContent" >
                @yield('content')
            </div>
        </div>

    </div>
    </div>


    <div class="wrapper">



        <footer>
            <div class="container">
                
                <div class="social">
                    <a href="{{ URL::route('page.index','id=4') }}" class="scrollpoint sp-effect3"><span class="glyphicon glyphicon-user"></span><br> Citizen Charter</a>
                    <a href="{{ URL::route('page.index','id=4') }}" class="scrollpoint sp-effect3"><span class="glyphicon glyphicon-pencil"></span><br> Right to Information</a>
                    <a href="{{ URL::route('page.index','id=4') }}" class="scrollpoint sp-effect3"><span class="glyphicon glyphicon-envelope"></span><br> Contacts</a>
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
