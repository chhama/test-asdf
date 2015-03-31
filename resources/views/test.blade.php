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
            <img src="images/freeze/logo.png" class="animated fadeInDown" alt="">
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
                        <a class="navbar-brand" href={{$_SERVER['PHP_SELF']}}>
                            <h2>National Health Mission</h2>
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#stateprofile">State Profile</a>
                            </li>
                            <li><a href="#about">About Us</a>
                            </li>
                            <li><a href="#reviews">State PIP</a>
                            </li>
                            <li><a href="#screens">Programmes</a>
                            </li>
                            <li><a href="#demo">Mandatory Disclosure</a>
                            </li>
                            <li><a href="#support">Contacts</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-->
        </nav>

        
        <!--RevSlider-->
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <!-- MAIN IMAGE -->
                        <img src="images/transparent.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption lfl fadeout hidden-xs"
                            data-x="center"
                            data-y="center"
                            data-hoffset="0"
                            data-voffset="0"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="images/freeze/Slides/sparkler.jpeg" alt="">
                        </div>

                        <div class="tp-caption lfl fadeout visible-xs"
                            data-x="left"
                            data-y="center"
                            data-hoffset="700"
                            data-voffset="0"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="images/freeze/iphone-freeze.png" alt="">
                        </div>

                        <div class="tp-caption large_white_bold sft" data-x="550" data-y="center" data-hoffset="0" data-voffset="-80" data-speed="500" data-start="1200" data-easing="Power4.easeOut">
                            Oleose
                        </div>
                        <div class="tp-caption large_white_light sfr" data-x="770" data-y="center" data-hoffset="0" data-voffset="-80" data-speed="500" data-start="1400" data-easing="Power4.easeOut">
                            App
                        </div>
                        <div class="tp-caption large_white_light sfb" data-x="550" data-y="center" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="1500" data-easing="Power4.easeOut">
                            Landing Theme
                        </div>

                        <div class="tp-caption sfb hidden-xs" data-x="550" data-y="center" data-hoffset="0" data-voffset="85" data-speed="1000" data-start="1700" data-easing="Power4.easeOut">
                            <a href="#about" class="btn btn-primary inverse btn-lg">LEARN MORE</a>
                        </div>
                        <div class="tp-caption sfr hidden-xs" data-x="730" data-y="center" data-hoffset="0" data-voffset="85" data-speed="1500" data-start="1900" data-easing="Power4.easeOut">
                            <a href="#getApp" class="btn btn-default btn-lg">GET APP</a>
                        </div>

                    </li>
                    <!-- SLIDE 2 -->
                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                        <!-- MAIN IMAGE -->
                        <img src="images/transparent.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption lfb fadeout hidden-xs"
                            data-x="center"
                            data-y="bottom"
                            data-hoffset="0"
                            data-voffset="0"
                            data-speed="1000"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="images/freeze/Slides/helpline.jpeg" alt="">
                        </div>

                        
                        <div class="tp-caption large_white_light sft" data-x="center" data-y="250" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="1400" data-easing="Power4.easeOut">
                            Every Pixel <i class="fa fa-heart"></i>
                        </div>
                        
                        
                    </li>

                    <!-- SLIDE 3 -->
                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                        <!-- MAIN IMAGE -->
                        <img src="images/transparent.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption customin customout hidden-xs"
                            data-x="right"
                            data-y="center"
                            data-hoffset="0"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-voffset="50"
                            data-speed="1000"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="images/freeze/Slides/family-freeze.png" alt="">
                        </div>

                        <div class="tp-caption customin customout visible-xs"
                            data-x="center"
                            data-y="center"
                            data-hoffset="0"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-voffset="0"
                            data-speed="1000"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="images/freeze/Slides/family-freeze.png" alt="">
                        </div>

                        <div class="tp-caption lfb visible-xs" data-x="center" data-y="center" data-hoffset="0" data-voffset="400" data-speed="1000" data-start="1200" data-easing="Power4.easeOut">
                            <a href="#" class="btn btn-primary inverse btn-lg">Purchase</a>
                        </div>

                        
                        <div class="tp-caption mediumlarge_light_white sfl hidden-xs" data-x="left" data-y="center" data-hoffset="0" data-voffset="-50" data-speed="1000" data-start="1000" data-easing="Power4.easeOut">
                           Powerful Responsive
                        </div>
                        <div class="tp-caption mediumlarge_light_white sft hidden-xs" data-x="left" data-y="center" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="1200" data-easing="Power4.easeOut">
                           App Landing Page
                        </div>
                        <div class="tp-caption small_light_white sfb hidden-xs" data-x="left" data-y="center" data-hoffset="0" data-voffset="80" data-speed="1000" data-start="1600" data-easing="Power4.easeOut">
                           <p>Nulla pretium libero interdum, tempus lorem non, rutrum diam. <br> Quisque pellentesque diam sed pulvinar lobortis. Vestibulum ante <br>ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                        </div>

                        <div class="tp-caption lfl hidden-xs" data-x="left" data-y="center" data-hoffset="0" data-voffset="160" data-speed="1000" data-start="1800" data-easing="Power4.easeOut">
                            <a href="#" class="btn btn-primary inverse btn-lg">Purchase</a>
                        </div>
                        
                        
                    </li>
                    
                </ul>
            </div>
        </div>


    </header>


    <div class="wrapper">

        

        <section id="stateprofile">
            <div class="container">
                
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>About the state of MIZORAM</h1>
                    <div class="divider"></div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="about-item scrollpoint sp-effect2">
                            The State is bordering by Myanmar in the East and South and Bangladesh in the West, it occupies an area of great strategic importance in the North Eastern corner of India.  It has a total of 722 kms international boundary with Myanmar and Bangladesh.  Mizoram has the most variegated hilly terrain in the eastern part of India.  The hills are steep and are separated by rivers that flow either to the North or South creating deep gorgeous between the hill rangers.  The average height of the hills is about 1000 meters and the highest peak is the Phawngpui (Blue Mountain) with the height of 2210 meters. Mizoram has a pleasant climate.  It is generally cool in summer and not very cold in winter. The temperate varies from 10c to 30c and the entire state is under the direct influence of monsoon.  It rains heavily from May to September and the average rainfall in Aizawl is 208 cm.
<p></p>
Mizoram is a mountainous region and became the 23rd state of the Union in February 1987.  It was one of the districts of Assam till 1972 when it became Union Territory.  Mizoram is a state with one of the highest literacy rates in India.  Situated on the extreme south of the North Eastern India, it is a land of unending natural beauty with an array of flora and fauna.  Presently, there are 8 Civil Administrative Districts but there are 9 Health Districts since Aizawl Civil administrative district is divided into Aizawl West and East health districts.  3 more districts are created during 2008 namely, Hnahthial, Khawzawl and Saitual districts but are yet to be fully functional. Panchayati Raj system is not adapted in Mizoram but there is Village Council system. 
<p></p>
<h3>Demography</h3>
The population of Mizoram is 1.09 million according to 2011 census and it is having 26 blocks and 830 recognised villages. The state has a density of 52 persons per sq. Km, with decadal growth of 22.78 percent.  The high decadal growth rate is mainly due to influx across the international borders and workforce from other states of the country.  The sex ratio is 975 females to 1000 males. Female literacy of the state rose to 89.40 percent from 86.13 percent in the year 2001. The state profile Administrative details, Facility distance, Existing number of Facility and Development partners in Mizoram is shown below. To have a clear picture of the facility in Mizoram, it is better to mentioned that the Facilities are not as per the norms of IPHS.

<h3>About the State Capital</h3>
The capital of Mizoram, Aizawl is wonderfully blue in the winter, and in the enchanting view of wide stretches of a vast lake of cloud.  This place has great natural beauty and endless variety of landscape and is very rich in flora and fauna.  Almost all kinds of tropical trees and plants thrive in Mizoram, especially in Aizawl. The hills are marvelously green
</div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about">
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>About Us</h1>
                    <div class="divider"></div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 scrollpoint sp-effect1">
                        <div class="media media-left feature">
                      <h3>National Health Mission</h3>
The National Rural Health Mission was launched on the 12th April 2005 and is one of the major flagships programmed of the government in the health sector. The Mission aims at inclusive health, improved access to quality health care for people in rural areas, particularly women, children and the under privileged by promoting integration, decentralization and encouraging community participation in health programmed. It also aims at mainstreaming Indian System of Medicine ie. Ayurveda, Yoga, Unani, Siddha and Homeopathic system of medicine to facilitate in health care.  The Plan of Action includes increasing public expenditure on health, reducing regional imbalance in health infrastructure, pooling resources, integration of organizational structures, optimization of health manpower, decentralization  and district management of health programmed, community participation and ownership of assets, induction of management and financial personnel into district health system, and operationalizing community health centers into functional hospitals meeting Indian Public Health Standards in each Block of the country.
<p></p>
With the advent of the National Urban Health Mission in 2013, separate NUHM PIPs are made. The sub- mission strives to improve the health status of the urban poor particularly the slum dwellers and other disadvantaged sections by facilitating equitable access to quality health care.
<p></p>
Now the National Health Mission subsumes NRHM and NUHM the two sub-missions. The main goals of NHM are to reduced Infant Mortality Rate (IMR), Maternal Mortality Ratio (MMR) and Total Fertility Rate (TFR); thus, reducing growth rate in a population with a view to achieved gender and demographic balance. Prevention and reduction of Anaemia in women aged 15-49 years. Apart from other NRHM goals, it aims to reduce household out- of- pocket expenditure on total health care expenditure.

                <h3>Conceptual Framework</h3>


Different health system frameworks were critically appraised and finally the health system framework suggested by WHO was adopted to assess the health system of Mizoram. The WHO framework suggests six building blocks: financing, health workforce, information, medical products and technologies, service delivery and leadership/ governance. Framework and Goals for health system of Mizoram state for the next coming three years is shown below:
<br>
 <img src="images/conceptualframework.png" alt="conceptual framework">
<p></p>
Goals:
<ul type='radio'>
<li>Service Delivery</li>
<ol>
<li>  Ensure availability of adequate number of health facilities
<li>  Improve quality of services
</ol>
<li>Health workforce:</li>
<ol>
<li>  Establish a policy for Human Resources for health
<li>  Improve availability of Human Resources for health
<li>  Improve skills of health workers
</ol>

<li>Health information</li>
<ol>
<li>  Improve availability and access to health information
<li>  Streamline reporting channels
<li>  Improve use of data
</ol>
<li>Health financing: </li>
<ol> 
<li>  Increase health expenditure 10% by the state govt.
<li>  Improve financial protection of vulnerable populations
</ol>
<li>Leadership/ governance</li>
<ol>
<li>  Foster stewardship in the health sector
<li>  Instilling managerial and leadership instincts in the health workforce
<li>  Improve community participation in governance
</ol>
</ul>

STRATEGIES: Strategies suggested accomplishing the set goals. 
<ol>
<li>  To meet the health services goals included, strengthening management capacity to monitor service delivery, implementing specialized health service packages, accreditation of health facilities to improve quality and establishing a health systems performance management unit.

<li>  To meet the Human Resources goals included, reviewing and developing comprehensive Human Resources policy and involving private sector for producing necessary trained human resources 

<li>  To meet health information goals included, review of data reporting and use mechanisms, establishing a central data repository, implementing a performance management system in the form of a score-card, capacity building of senior managers and integration of Health Management information Systems with decision making process.

<li>  To meet the strategies of Health financing goals included, increasing state outlay for as percentage of Gross State Domestic Product, taking stock of the current expenditure pattern and aligning it to estimated burden of disease and ensuring financial inclusiveness in health care programmes.

<li>  To meet governance goals included, developing a comprehensive health policy, operationalizing community based organizations, encouraging innovation, improving community participation and capacity building of leaders through leadership development programmes.

<li>  To meet Medical technology goals included, increasing financial outlay for drugs, strengthening drug procurement and developing drug policy.
</ol>
To meet the set goals/ outcomes we need to have access coverage through our activities and ensure quality safety as shown in the framework.



                    </div>
                 
                </div>
            </div>
        </section>

        <section id="reviews">
            <div class="container">
                <div class="section-heading inverse scrollpoint sp-effect3">
                    <h1>Reviews</h1>
                    <div class="divider"></div>
                    <p>Read What's The People Are Saying About Us</p>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-push-1 scrollpoint sp-effect3">
                        <div class="review-filtering">
                            <div class="review">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="review-person">
                                            <img src="http://api.randomuser.me/portraits/women/94.jpg" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="review-comment">
                                            <h3>“I love Oleose, I highly recommend it, Everyone Try It Now”</h3>
                                            <p>
                                                - Krin Fox
                                                <span>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star-o fa-lg"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review rollitin">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="review-person">
                                            <img src="http://api.randomuser.me/portraits/men/70.jpg" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="review-comment">
                                            <h3>“Oleaose Is The Best Stable, Fast App I Have Ever Experienced”</h3>
                                            <p>
                                                - Theodore Willis
                                                <span>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star-half-o fa-lg"></i>
                                                    <i class="fa fa-star-o fa-lg"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review rollitin">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="review-person">
                                            <img src="http://api.randomuser.me/portraits/men/93.jpg" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="review-comment">
                                            <h3>“Keep It Up Guys Your Work Rules, Cheers :)”</h3>
                                            <p>
                                                - Ricky Grant
                                                <span>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star-half-o fa-lg"></i>
                                                    <i class="fa fa-star-o fa-lg"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="screens">
            <div class="container">

                <div class="section-heading scrollpoint sp-effect3">
                    <h1>Programmes</h1>
                    <div class="divider"></div>
                </div>

                <div class="filter scrollpoint sp-effect3">
                    <a href="javascript:void(0)" class="button js-filter-all active">All programmes</a>
                    <a href="javascript:void(0)" class="button js-filter-one">NRHM + RMNCH plus A</a>
                    <a href="javascript:void(0)" class="button js-filter-two">NUHM</a>
                    <a href="javascript:void(0)" class="button js-filter-three">Disease Control Programme</a>
                    <a href="javascript:void(0)" class="button js-filter-even">Non Communicable Diseases</a>

                </div>
                <div class="slider filtering scrollpoint sp-effect5" >
                    <div class="one">
                        <img src="images/freeze/screens/profile.jpg" alt="">
                        <h4>RCH</h4>
                    </div>
                    <div class="two">
                        <img src="images/freeze/screens/menu.jpg" alt="">
                        <h4>NUHM</h4>
                    </div>
                    <div class="three">
                        <img src="images/freeze/screens/weather.jpg" alt="">
                        <h4>IDSP</h4>
                    </div>
                    <div class="one">
                        <img src="images/freeze/screens/signup.jpg" alt="">
                        <h4>Additionalities under NRHM</h4>
                    </div>
                    <div class="three">
                        <img src="images/freeze/screens/calendar.jpg" alt="">
                        <h4>NVBDCP</h4>
                    </div>
                    <div class="three">
                        <img src="images/freeze/screens/options.jpg" alt="">
                        <h4>NLEP</h4>
                    </div>
                    <div class="three">
                        <img src="images/freeze/screens/sales.jpg" alt="">
                        <h4>RNTCP</h4>
                    </div>
                    <div class="four">
                        <img src="images/freeze/screens/sales.jpg" alt="">
                        <h4>NPCB</h4>
                    </div>
                    <div class="four">
                        <img src="images/freeze/screens/sales.jpg" alt="">
                        <h4>NMHP</h4>
                    </div>
                    <div class="four">
                        <img src="images/freeze/screens/sales.jpg" alt="">
                        <h4>NPHCE</h4>
                    </div>
                    <div class="four">
                        <img src="images/freeze/screens/sales.jpg" alt="">
                        <h4>NPPCD</h4>
                    </div>
                    <div class="four">
                        <img src="images/freeze/screens/sales.jpg" alt="">
                        <h4>NTCP</h4>
                    </div>
                    <div class="four">
                        <img src="images/freeze/screens/sales.jpg" alt="">
                        <h4>NOHP</h4>
                    </div>
                    <div class="four">
                        <img src="images/freeze/screens/sales.jpg" alt="">
                        <h4>NPCDCS</h4>
                    </div>

                </div>
            </div>
        </section>

        <section id="demo">
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>Demo</h1>
                    <div class="divider"></div>
                    <p>Take a closer look in more detail</p>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 scrollpoint sp-effect2">
                        <div class="video-container" >
                            <iframe src="http://player.vimeo.com/video/70984663"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="getApp">
            <div class="container-fluid">
                <div class="section-heading inverse scrollpoint sp-effect3">
                    <h1>Get App</h1>
                    <div class="divider"></div>
                    <p>Choose your native platform and get started!</p>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="hanging-phone scrollpoint sp-effect2 hidden-xs">
                            <img src="images/freeze/freeze-angled2.png" alt="">
                        </div>
                        <div class="platforms">
                            <a href="#" class="btn btn-primary inverse scrollpoint sp-effect1">
                                <i class="fa fa-android fa-3x pull-left"></i>
                                <span>Download for</span><br>
                                <b>Android</b>
                            </a>
                            
                                <a href="#" class="btn btn-primary inverse scrollpoint sp-effect2">
                                    <i class="fa fa-apple fa-3x pull-left"></i>
                                    <span>Download for</span><br>
                                    <b>Apple IOS</b>
                                </a>
                        </div>

                    </div>
                </div>

                

            </div>
        </section>

        <section id="support" class="doublediagonal">
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>Support</h1>
                    <div class="divider"></div>
                    <p>For more info and support, contact us!</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 scrollpoint sp-effect1">
                                <form role="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your email">
                                    </div>
                                    <div class="form-group">
                                        <textarea cols="30" rows="10" class="form-control" placeholder="Your message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </form>
                            </div>
                            <div class="col-md-4 col-sm-4 contact-details scrollpoint sp-effect2">
                                <div class="media">
                                    <a class="pull-left" href="#" >
                                        <i class="fa fa-map-marker fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">4, Some street, California, USA</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#" >
                                        <i class="fa fa-envelope fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="mailto:support@oleose.com">support@oleose.com</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#" >
                                        <i class="fa fa-phone fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">+1 234 567890</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <a href="#" class="scrollpoint sp-effect3">
                    <img src="images/freeze/logo.png" alt="" class="logo">
                </a>
                <div class="social">
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-google-plus fa-lg"></i></a>
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-facebook fa-lg"></i></a>
                </div>
                <div class="rights">
                    <p>Copyright &copy; 2014</p>
                    <p>Template by <a href="http://www.scoopthemes.com" target="_blank">ScoopThemes</a></p>
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
        });
    </script>

</body>

</html>
