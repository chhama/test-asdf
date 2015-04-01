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


    {!!Html::Style('css/freeze.css')!!}
    {!!Html::Style('css/bootstrap.css')!!}
    {!!Html::Style('css/animate.css')!!}
    {!!Html::Style('css/font-awesome.min.css')!!}
    {!!Html::Style('css/slick.css')!!}
    {!!Html::Style('js/rs-plugin/css/settings.css')!!}




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
                            <li><a href="#stateprofile">State Profile</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#about">Executive Summary</a></li>
                                        <li><a href="#">Conceptual Framework</a></li>
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
                            <li><a href="#support">Contacts</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-->
        </nav>

        
        <!--RevSlider-->
       @yield('slider')

            </header>
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
                                <li>National Programme for Control of Blindness (NPCB)
                                <li>National Mental Health Programme (NMHP)
                                <li>National Programme for the Healthcare of the Elderly (NPHCE)
                                <li>National Programme for  Prevention and control of Deafness (NPPCD)
                                <li>National Tobacco Control Programme (NTCP)
                                <li>National Oral Health Programme (NOHP)
                                <li>National Programme for Prevention and Control of Cancer, Diabetes, Cardiovascular Diseases and Stroke (NPCDCS)
                            </ul>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        <div class="col-md-9">
        <div class="container" style="margin-top:10px">
            <ul class="nav nav-pills" role='tablist' data-tabs='tabs'>
            <li class=""><a href="#order" data-toggle="tab">Government Order</a></li>
            <li class="active"><a href="#ads" data-toggle="tab">Advertisement</a></li>
            <li class=""><a href="#tender" data-toggle="tab">Tender</a></li>
            <li class=""><a href="#training" data-toggle="tab">Trainings</a></li>
            <li class=""><a href="#mis" data-toggle="tab">MIS Report</a></li>
            <li class=""><a href="#activities" data-toggle="tab">Activities under NHM</a></li>
            <li class=""><a href="#charter" data-toggle="tab">Citizen Charter</a></li>
            <li class=""><a href="#notice" data-toggle="tab">Notifications</a></li>
            <li class=""><a href="#iec" data-toggle="tab">IEC/BCC</a></li>


            </ul>
            
            <div id='myTab' class="tab-content">
                <div class="tab-pane " id='order'>  
                    <p>
                    Orderlist
                    </p>
                </div>

                <div class="tab-pane  active in" id='ads'>  
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


        <section id="support" class="doublediagonal">
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>Contact Us</h1>
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
                                        <h4 class="media-heading">Dinthar, Aizawl</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#" >
                                        <i class="fa fa-envelope fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="mailto:support@oleose.com">support@nhm.com</a>
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
