<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>National Health Mission</title>

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href={!!$_SERVER['PHP_SELF']!!}>National Health Mission</a>
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">State Profile</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Executive Summary</a></li>
							<li><a href="#">Conceptual Framework</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">State PIP <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">PIP 2011-2012</a></li>
							<li><a href="#">PIP 2012-2013</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Mandatory Disclosure <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Disclosure 1</a></li>
							
							<li class='dropdown'>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Disclosure 2 <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">2011</a></li>
									</ul>
							</li>

						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Key Contacts<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">SPMU</a></li>
							<li><a href="#">DPMU</a></li>
						</ul>
					</li>				
					</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Gallery <span class='glyphicon glyphicon-picture'></span></a></li>
					
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
<div class="row">
	@yield('content')

		
		</div>	
			<div class="container-fluid">
			<div class="col-md-3" style="margin-top:10px;">
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
		            <li class=""><a href="#notice" data-toggle="tab">Notifications</a></li>
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
        @yield('contentlow')			
		</div>
        </div>
		
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.js"></script>

		<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
		
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Citizen Charter</a></li>
					<li><a href="#">IEC/BCC </a></li>
					<li>&nbsp;</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</body>


</html>