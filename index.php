<?php session_start();  ?>
<?php
  $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
  unset($_SESSION['msg']);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="We are an independent think tank in Zambia. We undertake research in International Relations, Development, Elections and the work of the Zambian parliament. Through our reserach, we provide to the public as well as government with policy analysis and recommendations.">
  <meta name="author" content="Afrika Software Technologies">
  <meta name="keywords" content=" international relations, development, electoral analysis, Elections, research, Legislative research, international">


  <title>Amini | center For Policy Research</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">
  <!-- favicon-->
   <link rel="shortcut icon" type="image/png" href="img/favicon.png">

   <style>
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section{
	padding: 60px 0;
}
section .section-title{
	text-align:center;
	color:#007b5e;
	margin-bottom:50px;
	text-transform:uppercase;
}
#research{
	background:#ffffff;
}
#research .card{
	padding: 1rem!important;
	border: none;
	margin-bottom:1rem;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#research .card:hover{
	-webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	-moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}
#research .card .card-block{
	padding-left: 50px;
    position: relative;
}
#research .card .card-block a{
	color: #007b5e !important;
	font-weight:700;
	text-decoration:none;
}
#research .card .card-block a i{
	display:none;
	
}
#research .card:hover .card-block a i{
	display:inline-block;
	font-weight:700;
	
}
#research .card .card-block:before{
	font-family: FontAwesome;
    position: absolute;
    font-size: 39px;
    color: #007b5e;
    left: 0;
	-webkit-transition: -webkit-transform .2s ease-in-out;
    transition:transform .2s ease-in-out;
}
#research .card .block-1:before{
    content: "\f209";
}
#research .card .block-2:before{
    content: "\f19c";
}
#research .card .block-3:before{
    content: "\f080";
}
#research .card .block-4:before{
    content: "\f0f7";
}

#research .card:hover .card-block:before{
	-webkit-transform: rotate(360deg);
	transform: rotate(360deg);	
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}

/*Aboutus Section*/
.aboutus-section {
    padding: 90px 0;
}
.aboutus-title {
    font-size: 30px;
    letter-spacing: 0;
    line-height: 32px;
    margin: 0 0 39px;
    padding: 0 0 11px;
    position: relative;
    text-transform: uppercase;
    color: #000;
}
.aboutus-title::after {
    background: #64a19d none repeat scroll 0 0;
    bottom: 0;
    content: "";
    height: 2px;
    left: 0;
    position: absolute;
    width: 54px;
}
.aboutus-text {
    color: #606060;
    font-size: 13px;
    line-height: 22px;
    margin: 0 0 35px;
}

a:hover, a:active {
    color: red;
    text-decoration: none;
    outline: 0;
}
.aboutus-more {
    border: 1px solid #64a19d;
    border-radius: 25px;
    color: #64a19d;
    display: inline-block;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 0;
    padding: 7px 20px;
    text-transform: uppercase;
}
.feature .feature-box .iconset {
    background: #fff none repeat scroll 0 0;
    float: left;
    position: relative;
    width: 18%;
}
.feature .feature-box .iconset::after {
    background: #64a19d none repeat scroll 0 0;
    content: "";
    height: 150%;
    left: 43%;
    position: absolute;
    top: 100%;
    width: 1px;
}

.feature .feature-box .feature-content h4 {
    color: #64a19d;
    font-size: 18px;
    letter-spacing: 0;
    line-height: 22px;
    margin: 0 0 5px;
}


.feature .feature-box .feature-content {
    float: left;
    padding-left: 28px;
    width: 78%;
}
.feature .feature-box .feature-content h4 {
    color: #64a19d;
    font-size: 18px;
    letter-spacing: 0;
    line-height: 22px;
    margin: 0 0 5px;
}
.feature .feature-box .feature-content p {
    color: #64a19d;
    font-size: 13px;
    line-height: 22px;
}
.icon {
    color : #64a19d;
    padding:0px;
    font-size:40px;
    border: 1px solid #64a19d;
    border-radius: 100px;
    color: #64a19d;
    font-size: 28px;
    height: 70px;
    line-height: 70px;
    text-align: center;
    width: 70px;
}
}

/* Glyphicons Support for bootstrap 4*/
@font-face {
  font-family: 'Glyphicons Halflings';

  src: url('../fonts/glyphicons-halflings-regular.eot');
  src: url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../fonts/glyphicons-halflings-regular.woff2') format('woff2'), url('../fonts/glyphicons-halflings-regular.woff') format('woff'), url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;

  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-asterisk:before {
  content: "\002a";
}
.glyphicon-plus:before {
  content: "\002b";
}
.glyphicon-euro:before,
.glyphicon-eur:before {
  content: "\20ac";
}
.glyphicon-minus:before {
  content: "\2212";
}
.glyphicon-cloud:before {
  content: "\2601";
}
.glyphicon-envelope:before {
  content: "\2709";
}
.glyphicon-pencil:before {
  content: "\270f";
}
.glyphicon-glass:before {
  content: "\e001";
}
.glyphicon-music:before {
  content: "\e002";
}
.glyphicon-search:before {
  content: "\e003";
}
.glyphicon-heart:before {
  content: "\e005";
}
   </style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/logo.png" alt="Logo"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto navbar-right">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <!-- edited 18.09.2019 -->
          <li class="nav-item ">
            <a class="nav-link js-scroll-trigger" href="#research">Research</a>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
            Team
          </a>
            <!-- Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set! -->
            <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown" id="team" >
              <a class="dropdown-item" href="advisory.php">Advisory Board</a>
              <a class="dropdown-item" href="executive.php">Executive Team</a>
              <a class="dropdown-item" href="directors.php">Research Directors</a>
              <a class="dropdown-item" href="assist.php">Research Assistants</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#forum">Forum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#publication">Publications</a>
          </li>
        <!--<li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#funding">Funding</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
     <!-- <div class="display-4 mx-auto text-white font-weight-bold my-0 text-uppercase" >Amini Centre for Policy Research</div>-->
      <div class="typewrite display-4 mx-auto text-white font-weight-bold my-0 text-uppercase" data-period="4000" data-type='[ "Amini Centre for Policy Research"]'>
            <span class="wrap"></span>
      </div>
        <!--<h1 class="mx-auto  my-0 text-uppercase text-white font-weight-bold ">Amini Centre for Policy Research </h1>-->
        <a href="#about" class="btn btn-danger text-white js-scroll-trigger mt-5">Get to Know Us</a>
      </div>
    </div>
  </header>

<!-- Aboutus Section -->
  <div class="aboutus-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus">
                        <h2 class="aboutus-title">About Us</h2>
                        <p class="aboutus-text">Amini Centre for Policy Research is an independent think tank. It is registered as a non-profit organisation limited by guarantee under the Patents and Companies Registration Agency of Zambia.</p>
                        <p class="aboutus-text">We undertake research in International Relations, Development, Elections and the work of the Zambian parliament. Through our research, we provide to the public as well as government with policy analysis and recommendations.</p>
                        <a class="aboutus-more" href="#about">read more</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus-banner">
                        <img src="http://themeinnovation.com/demo2/html/build-up/img/home1/about1.jpg" alt="zumani">
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="feature">
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                <span class="glyphicon glyphicon-cog icon"><i class="fas fa-eye"></i></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Vision</h4>
                                    <p>“To be the focal point of youth-led research and policy analysis in Africa.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"><i class="fas fa-heart"></i></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Values</h4>
                                    <p><kbd>-Intergrity</kbd><br><kbd>-Youth Leadership</kbd> <br><kbd>-Excellence </kbd><br><kbd>-Transpranecy </kbd><br><kbd>-Quality Fun</kbd></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- ./Aboutus Section -->

  <!-- About Section -->
  <!--<section id="about" class="about-section text-center pt-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-primary mb-4 font-weight-bold">About Us</h2>
          <hr class="divider my-4">
          <p class="text-white-50 container mb-0"><kbd>Amini Centre for Policy Research is an independent think tank. It is registered as a non-profit organisation limited by guarantee under the Patents and Companies Registration Agency of Zambia. We undertake research in International Relations, Development, Elections and the work of the Zambian parliament. Through our research, we provide to the public as well as government with policy analysis and recommendations.</kbd></p>
         <h3 class="text-white-50 mx-auto mb-0"></h3>
        </div>
       <div class="container mb-5">
              <div class="row">
                <div class="col-lg-6 col-md-6 text-center">
                  <div class="mt-3">
                    <h2 class="text-white mb-2 font-weight-bold">Vision</h2>
                    <p class="text-white-50 mb-0"><kbd>“To be the focal point of youth-led research and policy analysis in Africa.”</kbd></p>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                  <div class="mt-3">
                    <h2 class="text-white mb-2 font-weight-bold">Values</h2>
                    <p class="text-white-50 mb-0"><kbd>-Intergrity</kbd><br><kbd>-Youth Leadership</kbd> <br><kbd>-Excellence </kbd><br><kbd>-Transpranecy </kbd><br><kbd>-Quality Fun</kbd></p>
                  </div>
                </div>
              </div>
            </div>
  </section>-->

  <!-- Research Section -->
 <!-- <section id="research" class="projects-section bg-light pb-0 pt-3" style="height: 100%; width: 100%;">
    <div class="container mt-0">
       <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase text-primary font-weight-bold">Research</h2>
            <h3 class="section-subheading text-muted">What we research on</h3>
          </div>
       </div>
      <div class="row text-center justify-content-center">
        <div class="col-md-3">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-handshake fa-stack-1x fa-inverse"></i>
           
          </span>
          <h4 class="service-heading font-weight-bold">International Relations</h4>
          <p class="text-muted">Under the banner of International Relations, we seek to produce quality information and analysis of Zambian foreign policy against the backdrop of a global policy framework. The center will also track and analyze Zambian foreign policy in action and its relations with its neighbors and other complex multilateral institutions  i.e. United Nations, Africa Union , Common Market for Eastern and Southern Africa (COMESA), Southern Africa Development Council (SADC), The Common Wealth and all affiliated international bodies.</p>
        </div>
        <div class="col-md-3">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-university fa-stack-1x fa-inverse"></i>
         
          </span>
          <h4 class="service-heading font-weight-bold">Legislative Research</h4>
          <p class="text-muted">We support the functions of the legislature by making their work accessible and transparent through public engagement. We monitor their work by reviewing and analysing budgets, bills, allocation and spending of the constituency development fund and debates during the parliament. We also provide independent research support to councillors and members of parliament pertaining to policy and debates.</p>
        </div>
        <div class="col-md-3">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-chart-line fa-stack-1x fa-inverse"></i>
         
          </span>
          <h4 class="service-heading font-weight-bold">Electoral Analysis</h4>
          <p class="text-muted">We provide data-driven electoral analysis of candidates, voting patterns, constituents, voter partners, party manifestos and election results. One of the challenges faced by growing democracies in the world is the miscommunication between political partners and the votes. Our goal is to be the bridge between these two stakeholders by providing quality research and information, educating voters on the importance of casting their ballot and holding elected officials accountable to their campaign promises.</p>
        </div>
        <div class="col-md-3">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-building fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading font-weight-bold">Development</h4>
            <p class="text-muted">We contribute ideas through research and confront challenges, develop solutions that will create change in Zambia. We believe issues pertaining to human rights, climate change, education, health, technology, law and agriculture champion development in a country. We study and interpret the policy in Zambia under these focus areas, and work in tandem with NGOs, government organisations, ministries, parastatals and institutions to research on development-related policy in line with the United Nations Sustainable Development Goals.</p>
          </div>
      </div>
    </div>
  </section>-->

  <!-- Services section -->
	<section id="research">
		<div class="container-fluid">
			<h2 class="section-title mb-2 font-weight-bold">Research</h2>
			<p class="text-center text-muted h5">What we research on</p>
			<div class="row mt-5">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="card">
						<div class="card-block block-1">
							<h3 class="card-title">International Relations</h3>
							<p class="card-text">Under the banner of International Relations, we seek to produce quality information and analysis of Zambian foreign policy against the backdrop of a global policy framework. The center will also track and analyze Zambian foreign policy in action and its relations with its neighbors and other complex multilateral institutions i.e. United Nations, Africa Union , Common Market for Eastern and Southern Africa (COMESA), Southern Africa Development Council (SADC), The Common Wealth and all affiliated international bodies.</p>
							<a href="javascript:void();" title="Read more" class="read-more">Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="card">
						<div class="card-block block-2">
							<h3 class="card-title">Legislative Research</h3>
							<p class="card-text">We support the functions of the legislature by making their work accessible and transparent through public engagement. We monitor their work by reviewing and analysing budgets, bills, allocation and spending of the constituency development fund and debates during the parliament. We also provide independent research support to councillors and members of parliament pertaining to policy and debates.</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="card">
						<div class="card-block block-3">
							<h3 class="card-title">Electoral Analysis</h3>
							<p class="card-text">We provide data-driven electoral analysis of candidates, voting patterns, constituents, voter partners, party manifestos and election results. One of the challenges faced by growing democracies in the world is the miscommunication between political partners and the votes. Our goal is to be the bridge between these two stakeholders by providing quality research and information, educating voters on the importance of casting their ballot and holding elected officials accountable to their campaign promises.</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="card">
						<div class="card-block block-4">
							<h3 class="card-title">Development</h3>
							<p class="card-text">We contribute ideas through research and confront challenges, develop solutions that will create change in Zambia. We believe issues pertaining to human rights, climate change, education, health, technology, law and agriculture champion development in a country. We study and interpret the policy in Zambia under these focus areas, and work in tandem with NGOs, government organisations, ministries, parastatals and institutions to research on development-related policy in line with the United Nations Sustainable Development Goals.</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<!-- /Services section -->

<!-- Forum-->
<section class="project-section bg-dark text-white mt-3" id="forum">
 <div class="container">
 <div class="container text-center">
     <h1 class="mb-4 text-primary font-weight-bold mt-0 pt-3">Events and Programs by ACPR</h1>
  <div id="demo" class="carousel slide " data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
    <li data-target="#demo" data-slide-to="6"></li>
    <li data-target="#demo" data-slide-to="7"></li>
    <li data-target="#demo" data-slide-to="8"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active p-5">
      <div class="carousel-text">
        <h3 class="font-weight-bold">The Conversation</h3>
        <p>A platform for the public to discuss and debate pertinent political, economic and social issues affecting policy in Zambia and Africa. We invite a panel of experts on the topic being discussed to provide quality analysis.</p>
      </div>
    </div>
    <div class="carousel-item p-5">
      <div class="carousel-text">
        <h3 class="font-weight-bold">The Lusaka Indaba</h3>
        <p>A foreign policy and research symposium. We invite policymakers, government officials, researchers, entrepreneurs from Africa and across the road convene, debate and discuss ideas, ideate new solutions that will drive regional policy framework.</p>
      </div>
    </div>
      <div class="carousel-item p-5">
      <div class="carousel-text">
        <h3 class="font-weight-bold">The Policy Expert</h3>
        <p>A competition for undergraduate students. Participants work in teams of three to write a policy brief that proposes a solution to a real-world problem. The winning team wins a cash prize and a three-month internship at ACPR.</p>
      </div>
    </div>
    <div class="carousel-item p-5">
      <div class="carousel-text" >
        <h3 class="font-weight-bold">Africa Weekly Monitor</h3>
        <p>We curate a weekly publication of the news that made headlines in Africa and tries to give an unbiased and independent analysis. We often add satire and humour to the weekly monitor. A new issue is published every Friday.</p>
      </div>
    </div>
      <div class="carousel-item p-5">
      <div class="carousel-text">
        <h3 class="font-weight-bold">International Believe Conference</h3>
        <p>A capacity-building educational seminar for High School Students and School leavers. We invite young people from across Africa who have excelled in their respective professions to speak at the conference. The IBC is an annual event held in the second week of December.</p>
      </div>
    </div>
     <div class="carousel-item p-5">
      <div class="carousel-text">
        <h3 class="font-weight-bold">Parliament at a Glance</h3>
        <p>Get up to date with all the debates that happened in parliament by reading Parliament at a Glance every Saturday. The members of parliament have the mandate to build our society through the debates that lead to laws that govern us. We help you know what is going on.</p>
      </div>
    </div>
    <div class="carousel-item p-5">
      <div class="carousel-text">
        <h3 class="font-weight-bold">Lusaka Literature Festival</h3>
        <p>An event for book lovers, authors and publishers. We meet in the capital city of Zambia, Lusaka with all stakeholders in the discipline of literature from Africa and across the world. This event aims at upholding the written words and celebrating it.</p>
      </div>
    </div>
    <div class="carousel-item p-5">
      <div class="carousel-text">
        <h3 class="font-weight-bold">Amini Policy Boot Camp</h3>
        <p>This is a 3-day policy boot camp for high school students and school leavers. The participants learn the basics of policy analysis, making decisions using data and research methodologies. We teach them how to maintain excellence while having fun.</p>
      </div>
    </div>
    <div class="carousel-item p-5">
      <div class="carousel-text">
        <h3 class="font-weight-bold">Amini Annual Fundraising Dinner</h3>
        <p>The annual dinner is an opportunity for donors and staff of ACPR to meet and re-ignite the objectives of the organisation. We raise money to support our corporate social responsibility initiatives and the day to day functions of our think tank.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
</div>
</section>

<!-- Publications -->
<section id="publication" class="project-section bg-dark text-white">
	<div class="container text-center">
    <h1 class="mb-4 text-primary text-center font-weight-bold mt-0 pt-3">Publications</h1>
      <p class=" text-white text-center">Click on the images to Download Some of our Publications!</p>
		<div class="row services">
			<div class="col-md-4">
				<div class="service">
				 <div class="icon-holder">
						<a href="prayer.pdf" target="_blank"><img src="img/icon.png" alt="publication" class="icon"></a>
					</div>
					  <h4 class="heading font-weight-bold">Policy One</h4>
					<p class="description">A policy on how to do the needed when the needed is really needed to solve the needed.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service">
					<div class="icon-holder">
				  	<a href="prayer.pdf" target="_blank"><img src="img/icon.png" alt="publication" class="icon"></a>
					</div>
				   <h4 class="heading font-weight-bold">Policy Two</h4>
					<p class="description">A policy on how to do the needed when the needed is really needed to solve the needed.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service">
					<div class="icon-holder">
					<a href="prayer.pdf" target="_blank"><img src="img/icon.png" alt="publication" class="icon"></a>
					</div>
					<h4 class="heading font-weight-bold">Policy Three</h4>
					<p class="description">A policy on how to do the needed when the needed is really needed to solve the needed.</p>
				</div>
			</div>
		</div>
	</div>
</section>

  <!-- Signup Section -->
  <section id="contact" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Subscribe to receive our newsletters!</h2>

          <form class="form-inline d-flex" method="post" action="action.php">
            <input type="email" name="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
            <button type="submit" name="submit" class="btn btn-danger mx-auto">Subscribe</button>
            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2" id="success">
                <?php
                   if(!empty($statusMsg))
                  echo "<script type='text/javascript'>alert('$statusMsg');</script>";
               ?>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Address</h4>
              <hr class="my-4">
              <div class="small text-black-50">Thorn park Mukosa Rd, Hse 6145 Lusaka, Zambia</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">contact@aminicpr.org</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4">
              <div class="small text-black-50">+260972076498</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="https://twitter.com/AminiFor?s=08" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.facebook.com/Amini-Centre-for-Policy-Research-689971748099566/?ti=as" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
      </div>

    </div>
  </section>
  <!-- Footer -->
  <?php
      include_once "footer.php";
  ?>
