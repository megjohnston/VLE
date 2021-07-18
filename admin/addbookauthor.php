<?php

  
?>
<!DOCTYPE html>
<section>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add Learners - ST</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>
</section>

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
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="../learner_login.php">learner log in</a></li>
                </ul>
            </div>
        </div>
	</nav>
	
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Page Title -->
    <title>Add Learners</title>
	<!-- Compressed CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation.min.css" >

	<!-- Compressed JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/js/foundation.min.js" ></script>

  </head>
  
<body>
  
<div class="grid-container">


 	<div class='grid-x'>
		<div class='small-6 cell'>
				<h1>Add Learner to Module</h1>
			</div>
 	</div>
		

	<form action='processbookauthor.php' method='POST'>
		<div class='grid-x'>
			<div class='small-8 cell'>	

			<select name='moduleid'>

<?php
include("../functions.php");

$readmodules = "SELECT * FROM module_list";
$resultmodules = $conn->query($readmodules);
while($row = $resultmodules ->fetch_assoc()){
$namedata = $row['module'];
$id = $row['id'];
echo "<option value='$id'>$namedata</option>";

}

?>
				
			</div>
			
			<div class='small-8 cell'>	

            <select name='userid'>
<?php
//$readuser = "SELECT * FROM users";
//$resultuser= $conn->query($readuser);
//while($row2 = $resultuser ->fetch_assoc()){
//$username = $row2['name'];
//$id = $row2['id'];
//echo "<option value='$id'>$username</option>";
//}
?>
</select>
				
			</div>
			
			
			<div class='cell'>
				<input type='submit' class='success button'>
			</div>
		</div>
	</form>						

				
</div>		
</body>
  
</html>