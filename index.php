<?php
  $myemail = "twaelbroeck@gmail.com";
  $subject = "Form Submitted";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $comments = $_POST['comments'];
  $message  = <<<EMAIL

Name:   $name
Email:  $email

Message:

$comments

EMAIL;

if($_POST){
  mail($myemail,$subject,$message);
  $feedback = "Thanks for contacting us ! We'll be in touch soon.";
}
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1"/>
	  <meta property="og:type" content="website"/>
	  <meta property="og:url" content="http://www.traviswaelbroeck.com"/>
	  <meta property="og:image" content="http://www.traviswaelbroeck.com/images/preview.png" />
	  <meta property="og:title" content="Travis Waelbroeck"/>
	  <meta property="og:site_name" content="Travis Waelbroeck"/>
	  <title>Travis Waelbroeck</title>
	  <!--Bootstrap -->
	  	<link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href='http://fonts.googleapis.com/css?family=Wire+One|Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
	  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
	  <link href="css/queries.css" rel="stylesheet">
	  <link rel="shortcut icon" type="image/x-icon" href="images/x-icon.ico" >
	  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
	</head>
	<body data-spy="scroll" data-target="#bs-example-navbar-collapse-1">
		<div id="wrapp">
				<header class="navbar-inverse" id="navit" role="banner">
					<div class="container-fluid">
						<nav class="navbar-fixed-top" role="navigation">
						  <div class="container">
						    <!-- Brand and toggle get grouped for better mobile display -->
						    <div class="navbar-header scroll-link">
						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
						      <a href="#top" class="navbar-brand">Travis Waelbroeck</a>
						    
								<!-- Collect the nav links, forms, and other content for toggling -->
							    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
							      <ul class="nav navbar-nav navbar-right scroll-link">
							        <li><a href="#about">About</a></li>
							        <li><a href="#work">Work</a></li>
							        <li><a href="#team">Team</a></li>
							        <!-- <li class="col-md-3"><a class="col-md-8 col-centered" href="#build">Build</a></li> -->
							        <li><a href="#contact">Contact</a></li>
							      </ul>
							    </div><!-- /.navbar-collapse -->
							    </div>
						  </div><!-- /.container-fluid -->
						</nav>
					</div>
				</header>
			</div>
		<section class="top-content text-center" id="top" style="background-image: url('images/mtn3.jpg');">
			
			<div class="container-fluid land">
				<div class="container">
					<h1>Travis Waelbroeck</h1>
					<h3>Web Developer/Designer</h3>
					<ul class="media list-inline">
		        <li><a href="https://www.facebook.com/twaelbroeck"><i class="fa fa-fw fa-facebook" target="_blank"></i></a></li>
		        <li><a href="https://twitter.com/trvswlbrck"><i class="fa fa-fw fa-twitter"></i></a></li>
		        <li><a href="https://github.com/trvswlbrck"><i class="fa fa-fw fa-github"></i></a></li>
		        <li><a href="https://www.linkedin.com/profile/view?id=379696521&trk=spm_pic" target="_blank"><i class="fa fa-fw fa-linkedin"></i></a></li>
		        <li><a href="mailto:twaelbroeck@gmail.com" target="_blank"><i class="fa fa-fw fa-envelope"></i></a></li>
		      </ul>
				</div>
			</div>
		</section>
		<section class="difference" id="about">
			<div class="container-fluid center">
				<div class="container text-justify">
					<h1 class="text-center">What makes me different?</h1>
					<div class="col-md-10 col-md-offset-1">
						<h4>I'm not going to give you the same cookie-cutter spiel and design as the other guys. I care about my customers - and I care about their customers.</h4>
						<h4>I want to have a conversation with you.</h4>
						<h4>My goal is to learn what challenges you face and find every way to minimize or eliminate those challenges. I strive to learn your business inside and out. </h4>
						<h4>With this understanding of how <em>your</em> business works, I can create a solution that works best for <em>you</em>.  </h4>
					</div>
				</div>
			</div>
		</section>
		<section class="work text-center" id="work">
			<div class="container-fluid">
				<h2>Featured Work</h2>
				<div class="display col-xs-12 col-md-5 col-md-offset-1">
					<a href="http://www.hannahwphotography.com" target="_blank">
						<img src="images/hannah.png" alt="Site Preview">
						<h3>Hannah W Photography</h3>
					</a>
					<p>Full service professional photography.</p>
				</div>
				<div class="display col-xs-12 col-md-5"><!--
					<a href="#" target="_blank">-->
						<img src="images/alerium.png" alt="Site Preview">
						<h3>Alerium Productions</h3>
<!--					</a>-->
					<p>Custom audio tracks, music production, and recording.</p>
					<h4>Link will be added when site goes live.</h4>
				</div>
			</div>
		</section>
		<div class="clearfix"></div>
		<section class="about text-center" id="team">
			<div class="container-fluid">
				<div class="container">
					<h1>About Me!</h1>
					<img src="images/travis-icon.jpg" alt="Travis!" class="img-circle me">
					<h3 class="col-md-10 col-md-offset-1">I'm Travis, a computer geek based out of Indiana. I've studied both Computer Engineering and Software Development at Rose-Hulman and Ivy Tech. I love making things better, easier to use, and lots of fun. Big or small, I enjoy taking an idea and turning it into reality.</h3>
					<div class="clearfix"></div>
					<div class="container">
						<ul class="list-inline skills col-sm-10 col-md-8 col-centered">
							<li class="col-sm-2 col-xs-12 skillstitle"><strong>Skills</strong></li>
							<li class="col-sm-1 col-xs-12">HTML5</li>
							<li class="col-sm-1 col-xs-12">CSS3</li>
							<li class="col-sm-2 col-xs-12">Javascript</li>
							<li class="col-sm-1 col-xs-12">jQuery</li>
							<li class="col-sm-1 col-xs-12">Git</li>
							<li class="col-sm-4 col-xs-12">Responsive Web Design</li>
						</ul>
					</div>
					<div class="clearfix"></div>
					<div class="container">
						<ul class="social list-inline col-md-8 col-md-offset-2">
			        <li><a href="https://www.facebook.com/twaelbroeck"><i class="fa fa-fw fa-facebook" target="_blank"></i></a></li>
			        <li><a href="https://twitter.com/trvswlbrck"><i class="fa fa-fw fa-twitter"></i></a></li>
			        <li><a href="https://github.com/trvswlbrck"><i class="fa fa-fw fa-github"></i></a></li>
			        <li><a href="https://www.linkedin.com/profile/view?id=379696521&trk=spm_pic" target="_blank"><i class="fa fa-fw fa-linkedin"></i></a></li>
			        <li><a href="mailto:twaelbroeck@gmail.com" target="_blank"><i class="fa fa-fw fa-envelope"></i></a></li>
			      </ul>
					</div>
				</div>
			</div>
		</section>
		<div class="clearfix"></div>
		<!--
			<section class="showoff">
				
			</section>
			
		<div class="clearfix"></div>-->
		<section class="bottom">
			<div class="action-container">
				<div class="action text-center container-fluid">
					<h1>Whatcha Waiting For?</h1>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="contact-container">
				<div class="contact text-center container-fluid" id="contact">
					<h1>Contact Us</h1>
					<h4>Interested in working together or just want to say hi?</h4>
					<h4 id="feedback"><?php echo $feedback; ?></h4>
					<form role="form" action="#contact" method="POST" class="col-md-3 col-centered">
						<div class="form-group">
							<input type="text" name="name" placeholder="Name (required)" class="form-control">	
						</div>
						<div class="form-group">
							<input type="email" name="email" placeholder="Email" class="form-control">	
						</div>
						<div class="form-group">
							<input type="tel" name="number" placeholder="Phone" class="form-control">	
						</div>
						<div class="form-group">
							<textarea name="comments" id="message" placeholder="Message..." cols="30" rows="10" class="form-control"></textarea>	
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">SEND</button>	
						</div>
					</form>
				</div>
			</div>
		</section>
		<div class="clearfix"></div>

	<!-- Scripts -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script></div>
    <!-- Include jQuery ScrollTo/LocalScroll -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script src="js/jquery.scrollTo-1.4.2-min.js"></script>
		<script src="js/jquery.localscroll-1.2.7-min.js"></script>
		<!-- Wrap link with scroll-link class -->
		<script src="js/scrollplease.js"></script>
		<script src="js/navhideonscroll.js"></script>
	</body>
</html>