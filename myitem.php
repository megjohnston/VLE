<?php
include("functions.php");
$itemid = $conn->real_escape_string($_GET["rowid"]);
$read = "SELECT * FROM modules WHERE id='$itemid' ";
$result = $conn->query($read);

?>


<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Modules - ST</title>
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
    <section id="download" class="download-section content-section text-center" style="background-image:url('assets/img/pencils.jpg');">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h1 style="color:azure">Module</h1>
                <p>*</p>
                <p class="intro-text" style="color:azure;">Information</p><a class="btn btn-link btn-circle" role="button" href="#about"><i class="fa fa-angle-double-down animated"></i></a></div>
            </div>
        </div>
    </section>
    </header>
<section>    
<div id="container">
	<div id="top">	
	<a href='display.php'><div class='addright'>Back to Module List</div></a>
	<div id="title">Module Information</div>	

	</div>
		<div id="main">	
			<article>
            <?php
        if(!$result){
        echo $conn->error;
        }else{
        while ($row=$result->fetch_assoc()){
        //get data from column 'info'
        $listdata = $row['info'];
        $datedue = $row['datedue'];
        //needs to be converted to be day-month-year
        $datedue = date('d-m-Y', strtotime($datedue));
        $typedata = $row["type"];
        $detailsdata = $row["details"];
        $imgname = $row["imgpath"];
        echo " <h2>$listdata</h2>
        <div class='dateleft'>Module start date:
        <strong>$datedue</strong>
        <p><img src='img/$imgname'/></p>
        </div>
        <p>Subject: $typedata </p>
        <p>Tutor: $detailsdata </p>";
    }
}
?>
     
       
                            
               <div style="clear:both;"></div>             
            </article> 
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
