<?php 
	include('functions.php'); 
	
	//if (!isLoggedIn()) {
	//	$_SESSION['msg'] = "You must log in first";
	//	header('location: learner_login.php');
	//}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: learner_login.php");
}
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Learner - ST</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<!-- Navigation Bar (using Bootstrap listed above) -->

<body id="page-top" style="background-color: #f8c7fa;">
    <nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav" style="background-color: #a978b3;">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="index.html" style="font-family: Cabin, sans-serif;">SmartTutor</a><button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" type="button" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="about.html">about</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="contact.php">contact</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="login.php">log in</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="register.php">sign up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="masthead" style="background-image:url('/assets/img/chalk.jpg'); background-color:#f8c7fa;"></header>
    <section id="download" class="download-section content-section text-center" style="background-image:url('assets/img/chalk.jpg');">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h1 style="color:azure">Learner</h1>
                <p>*</p>
                <p class="intro-text" style="color:azure;">Dashboard</p><a class="btn btn-link btn-circle" role="button" href="#about"><i class="fa fa-angle-double-down animated"></i></a></div>
            </div>
        </div>
    </section>
    </header>

	<section>
	<div class="content">
		<!-- notification message -->
		<?php 
	include('functions.php'); 
	
	if (!isLearner()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>


		<!-- logged in user information -->
		<div class="profile_info">
            <img src="images/user_profile.jpg" >

			<div>
			<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="learner.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="display.php"> + display module content</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
	</section>
	<div class="map-clean"></div>
    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h4 style="color:gray"></h4>
                </div>
            </div>    
        </div>
    </footer>
</body>
</html>