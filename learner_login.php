<?php include('functions.php') ?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - ST</title>
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
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="learner_login.php">learner log in</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="masthead" style="background-image:url('assets/img/.jpg'); background-color:#f8c7fa;"></header>
    <section id="download" class="download-section content-section text-center" style="background-image:url('assets/img/pencils.jpg');">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h1 style="color:azure">Login</h1>
                <p>*</p>
                <p class="intro-text" style="color:azure;">to SmartTutor</p><a class="btn btn-link btn-circle" role="button" href="#about"><i class="fa fa-angle-double-down animated"></i></a></div>
            </div>
        </div>
    </section>
    </header>
    <section>    
    <form method="post" action="learner.html">

        <h3 class="fcf-h3" style="color:#f8c7fa">Log in</h3>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>		
        <div class="form-group"><button class="btn btn-primary btn-xl" name="learner" href="learner.html" type="submit">Login Students</button>
		</div>
    <section id="about" class="content-section text-center" style="background-color:#f8c7fa">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 style="color:gray">Thank you for choosing SmartTutor!</h2>
                    <p>Happy studying!</p>
                    <p></p>
                </div>
            </div>
        </div>
    </section>

    <div class="map-clean"></div>
    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h4 style="color:gray">SmartTutor 2020</h4>
                </div>
            </div>    
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
</body>

</html>