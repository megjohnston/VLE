<?php
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}

$mylisttask = $conn->real_escape_string($_POST['myinput']); 
$myduedate = $conn->real_escape_string($_POST['duedate']);
//convert date to mysql date type
$myduedate = date('Y-m-d', strtotime($myduedate));

$myitem = $conn->real_escape_string($_POST['itemtype']);
$mydetails = $conn->real_escape_string($_POST['details']);
echo "<p>$mylisttask</p>
<p>$myduedate</p>
<p>$myitem</p>
<p>$mydetails</p>";

$pic = $_FILES["imageup"]["name"];
$pictemp = $_FILES["imageup"]["tmp_name"];
$move = move_uploaded_file($pictemp, "img/$pic");
if(!$move){
echo "Not uploaded because of error ".$_FILES["imageup"]["error"];
}

$insertsql = "INSERT INTO modules(info, datedue, type, details, imgpath) VALUES('$mylisttask', '$myduedate','$myitem','$mydetails', '$pic')";

$result= $conn->query($insertsql);

if(!$result){
echo $conn->error;
}else{
echo "<p>You have successfully added a module!</p>
<div class='addright'>
<a href='display.php'>Modules</a>
</div>";
}
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
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="../index.html" style="font-family: Cabin, sans-serif;">SmartTutor</a><button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" type="button" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="../about.html">about</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="../contact.php">contact</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="../login.php">log in</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="../register.php">sign up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="masthead" style="background-image:url('/assets/img/chalk.jpg'); background-color:#f8c7fa;"></header>
    <section id="download" class="download-section content-section text-center" style="background-image:url('../assets/img/chalkboard.jpg');">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h1 style="color:azure">Insert Module</h1>
                <p>*</p>
                <p class="intro-text" style="color:azure;"></p><a class="btn btn-link btn-circle" role="button" href="#about"><i class="fa fa-angle-double-down animated"></i></a></div>
            </div>
        </div>
    </section>
	</header>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Create Modules</title>
<link href="styles/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="styles/mylist.css" >

</head>

<body>
<div id="container">
	<div id="top">
	<div id="title">Create Module Content</div>
	</div>
	
		<div id="main">
	 		<article>
		<?php	 
			$mylisttask = $conn->real_escape_string($_POST['myinput']);
			$myduedate = $conn->real_escape_string($_POST['duedate']);
			
			$myitem = $conn->real_escape_string($_POST['itemtype']);
			$mydetails = $conn->real_escape_string($_POST['details']);
            						
			echo "<p>$mylisttask</p>
				<p>$myduedate</p>
				<p>$myitem</p>
				<p>$mydetails</p>";
		?>			
			</article> 
		</div>

 </div>
</body>

</html>
