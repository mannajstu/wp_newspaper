
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
        <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css"  type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/owl-carousel/owl.theme.css" rel="stylesheet">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
	 <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	
	<!-- jQuery and Modernizr-->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-2.1.1.js"></script>
	
	<!-- Core JavaScript Files -->  	 
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
	<!--Top-->

	
	<!--Navigation-->
    <nav id="menu" class="navbar container">
		<div class="navbar-header">
			<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div class="logo"><span>Newspaper</span></div>
			</a>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <i class="fa fa-arrow-circle-o-down"></i></a>
					<div class="dropdown-menu">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Login</a></li>
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Register</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Video <i class="fa fa-arrow-circle-o-down"></i></a>
					<div class="dropdown-menu">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Text 201</a></li>
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Text 202</a></li>
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Text 203</a></li>
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Text 204</a></li>
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Text 205</a></li>
							</ul>
						</div> 
					</div>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <i class="fa fa-arrow-circle-o-down"></i></a>
					<div class="dropdown-menu" style="margin-left: -203.625px;">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Text 301</a></li>
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Text 302</a></li>
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Text 303</a></li>
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Text 304</a></li>
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Text 305</a></li>
							</ul>
							<ul class="list-unstyled">
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Text 306</a></li>
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Text 307</a></li>
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Text 308</a></li>
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Text 309</a></li>
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Text 310</a></li>
							</ul>
							<ul class="list-unstyled">
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Text 311</a></li>
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Text 312</a></li>
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php#">Text 313</a></li>
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php#">Text 314</a></li>
								<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php">Text 315</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/archive.php"><i class="fa fa-cubes"></i> Blocks</a></li>
				<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/contact.php"><i class="fa fa-envelope"></i> Contact</a></li>
			</ul>
			<ul class="list-inline navbar-right top-social">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
			</ul>
		</div>
	</nav>
</header>
