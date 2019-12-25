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
  <!-- custom css created by AMS -->
  <link href="css/custom.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">
  <!-- favicon-->
   <link rel="shortcut icon" type="image/png" href="img/favicon.png">

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
        <ul class="navbar-nav ml-auto navbar-right"  style="margin-right:-6vw;">
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
            <a class="nav-link js-scroll-trigger" href="#publication">Publications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#forum">Forum</a>
          </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="blog/">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <!-- <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
      <div class="typewrite display-4 mx-auto text-white font-weight-bold my-0 text-uppercase" data-period="4000" data-type='[ "Amini Centre for Policy Research"]'>
            <span class="wrap"></span>
      </div>
        <a href="#about" class="btn btn-danger text-white js-scroll-trigger mt-5">Get to Know Us</a>
      </div>
    </div>
  </header> -->

 <!-- page-header bootsnipp -->
 <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">
                        <!-- <h1 class="page-title">Hike Pageheader</h1> -->
                        <div class="mx-auto text-center">
                          <div class="typewrite display-4 mx-auto text-white font-weight-bold my-0 text-uppercase" data-period="4000" data-type='[ "Amini Center for Policy Research"]'>
                                <span class="wrap"></span>
                          </div>
                            <!-- <a href="#about" class="btn btn-danger text-white js-scroll-trigger mt-5">Get to Know Us</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- news -->
    <div class="card-section">
        <div class="container">
            <div class="card-block bg-white mb30">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- section-title -->
                        <div class="section-title mb-0 text-center">
                            <h2 class="font-weight-bold">A pan-african think tank</h2>
                            <!-- <p>Our approach is very simple: we define your problem and give the best solution. </p> -->
                             <a href="#about" class="btn btn-danger text-white js-scroll-trigger mt-5">Get to Know Us</a>
                        </div>
                        <!-- /.section-title -->
                    </div>
                </div>
            </div>
      </div>
    </div>
  </div>

<!-- Aboutus Section -->
  <div class="aboutus-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus">
                        <h2 class="aboutus-title">About Us</h2>
                        <p class="aboutus-text">Amini Centre for Policy Research is an independent think tank. It is registered as a non-profit organisation limited by guarantee under the Patents and Companies Registration Agency of Zambia.</p>
                        <p class="aboutus-text">We undertake research in International Relations, Development, Elections and the work of the Zambian parliament. Through our research, we provide to the public as well as government with policy analysis and recommendations.</p>
                        <!-- <a class="aboutus-more js-scroll-trigger" href="#research">read more</a> -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus-banner">
                        <!-- <img src="img/about.png" alt="zumani"> -->
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
                                    <p>-Intergrity<br>-Youth Leadership<br>-Excellence<br>-Transpranecy<br>-Quality Fun</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- ./Aboutus Section -->

   <!--Current Blogs-->
<!-- details card section starts from here -->
<section class="details-card" style="background:white;">
    <div class="container">
    <div class="col-12 text-center">
              <h1 class="text-primary font-weight-bold ">Latest blogs</h1>
          </div>
        <div class="row">
        <?php include 'blog/includes/connection.php';?>
        <?php
  $query = "SELECT * FROM posts WHERE status='published' AND featured='featured' ORDER BY updated_on DESC LIMIT 3";
  $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));

  if (mysqli_num_rows($run_query) > 0) {
    while ($row = mysqli_fetch_assoc($run_query)) {
      $post_title = $row['title'];
      $post_id = $row['id'];
      $post_author = $row['author'];
      $post_date = $row['postdate'];
      $post_image = $row['image'];
      $post_content = $row['content'];
      $post_tags = $row['tag'];
      $post_status = $row['status'];
      if ($post_status !== 'published') {
        echo "NO POST exist";
      } else {
      ?>
          <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="blog/allpostpics/<?php echo $post_image; ?>" alt="900 * 300">
                        <span><h4>by <?php echo $post_author; ?></h4></span>
                    </div>
                    <div class="card-desc">
                        <h3 class='text-primary'><?php echo $post_title; ?></h3>
                        <p><?php echo substr($post_content, 0, 300) . '.........'; ?></p>
                            <a href="blog/publicposts.php?post=<?php echo $post_id; ?>" class="btn-card">Read</a>   
                    </div>
                </div>
            </div>
              <?php }}}?>
              <hr>
        </div>
    </div>
</section>

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
			<h2 class="section-title font-weight-bold">Thematic Areas</h2>
			<div class="row">
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

<!-- Publications -->
<section id="publication" class="project-section ">
	<div class="container text-center">
    <h1 class="mb-4 text-primary text-center font-weight-bold mt-0">Publications</h1>
      <p class=" text-center text-muted h5">Click on the images to Download Some of our Publications!</p>
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

<!-- Forum-->
<section class="project-section p-5" id="forum">
 <div class="container-fluid text-center">
     <h1 class=" text-primary font-weight-bold mt-0 pt-3">Events and Programs by ACPR</h1>
  <div id="demo" class="carousel slide " data-ride="carousel">
  <ul class="carousel-indicators bg-primary">
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
        <h3 class="font-weight-bold text-primary">The Conversation</h3>
        <p>A platform for the public to discuss and debate pertinent political, economic and social issues affecting policy in Zambia and Africa. We invite a panel of experts on the topic being discussed to provide quality analysis.</p>
      </div>
    </div>
    <div class="carousel-item p-5">
      <div class="carousel-text">
        <h3 class="font-weight-bold text-primary">The Lusaka Indaba</h3>
        <p>A foreign policy and research symposium. We invite policymakers, government officials, researchers, entrepreneurs from Africa and across the road convene, debate and discuss ideas, ideate new solutions that will drive regional policy framework.</p>
      </div>
    </div>
      <div class="carousel-item p-5">
      <div class="carousel-text">
        <h3 class="font-weight-bold text-primary">The Policy Expert</h3>
        <p>A competition for undergraduate students. Participants work in teams of three to write a policy brief that proposes a solution to a real-world problem. The winning team wins a cash prize and a three-month internship at ACPR.</p>
      </div>
    </div>
    <div class="carousel-item p-5">
      <div class="carousel-text">
        <h3 class="font-weight-bold text-primary">Africa Weekly Monitor</h3>
        <p>We curate a weekly publication of the news that made headlines in Africa and tries to give an unbiased and independent analysis. We often add satire and humour to the weekly monitor. A new issue is published every Friday.</p>
      </div>
    </div>
      <div class="carousel-item p-5">
      <div class="carousel-text">
        <h3 class="font-weight-bold text-primary">International Believe Conference</h3>
        <p>A capacity-building educational seminar for High School Students and School leavers. We invite young people from across Africa who have excelled in their respective professions to speak at the conference. The IBC is an annual event held in the second week of December.</p>
      </div>
    </div>
     <div class="carousel-item p-5">
      <div class="carousel-text">
        <h3 class="font-weight-bold text-primary">Parliament at a Glance</h3>
        <p>Get up to date with all the debates that happened in parliament by reading Parliament at a Glance every Saturday. The members of parliament have the mandate to build our society through the debates that lead to laws that govern us. We help you know what is going on.</p>
      </div>
    </div>
    <div class="carousel-item p-5">
      <div class="carousel-text">
        <h3 class="font-weight-bold text-primary">Lusaka Literature Festival</h3>
        <p>An event for book lovers, authors and publishers. We meet in the capital city of Zambia, Lusaka with all stakeholders in the discipline of literature from Africa and across the world. This event aims at upholding the written words and celebrating it.</p>
      </div>
    </div>
    <div class="carousel-item p-5">
      <div class="carousel-text">
        <h3 class="font-weight-bold text-primary">Amini Policy Boot Camp</h3>
        <p>This is a 3-day policy boot camp for high school students and school leavers. The participants learn the basics of policy analysis, making decisions using data and research methodologies. We teach them how to maintain excellence while having fun.</p>
      </div>
    </div>
    <div class="carousel-item p-5">
      <div class="carousel-text">
        <h3 class="font-weight-bold text-primary">Amini Annual Fundraising Dinner</h3>
        <p>The annual dinner is an opportunity for donors and staff of ACPR to meet and re-ignite the objectives of the organisation. We raise money to support our corporate social responsibility initiatives and the day to day functions of our think tank.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon bg-primary"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon bg-primary"></span>
  </a>
</div>
</div>
</section>

  <!-- Signup Section -->
  <section id="contact" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x text-white"></i>
          <h2 class="text-white">Subscribe to receive our newsletters!</h2>
    <!-- Begin Mailchimp Signup Form -->
        <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
        <style type="text/css">
        	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
        	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
        	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>
        <div id="mc_embed_signup" style="background: none;">
        <form action="https://aminicpr.us4.list-manage.com/subscribe/post?u=61184e446f5d05b21eaf35dd8&amp;id=6ffcf8122b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
        	<label for="mce-EMAIL"></label>
        	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter email address" required>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_61184e446f5d05b21eaf35dd8_6ffcf8122b" tabindex="-1" value=""></div>
            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style="background: red;"></div>
            </div>
        </form>
        </div>

<!--End mc_embed_signup-->

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <!-- <section class="contact-section bg-black">
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
  </section> -->
  <!-- Footer -->
  <?php
      include_once "footer.php";
  ?>
