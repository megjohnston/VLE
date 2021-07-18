<?php
  include('../functions.php');
  
  $read = "SELECT * FROM module_list";
  
  $result = $conn->query($read);

  while($row = $result->fetch_assoc() ){
    $module_data = $row['module'];
    $moduleid = $row['id'];
    ///get learners
    $learners ="SELECT users.username
    FROM module_list_users
    INNER JOIN
    users
    ON
    module_list_users.user_id = users.id
    WHERE module_list_users.module_list_id='$moduleid' ";
    $resultlearners = $conn->query($learners);
    if(!$resultlearners ){
    echo $conn->error;
    }

    echo "<div class='grid-x'>
    <div class='small-10 cell'>
    <strong>$module_data</strong>
    </div>
    <div class='small-2 cell'>
    <a href='select.php?dataid=$moduleid' class='button
    secondary'>details</a>
    </div>
    </div>";
    //while($row1 = $resultlearners->fetch_assoc() ){
    //$moduleid = $row1['name'];
    //echo " <span>Enrolled Students: $moduleid </span>";
    //}
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
                <h1 style="color:azure">Enroll Learners</h1>
                <p>*</p>
                <p class="intro-text" style="color:azure;"></p><a class="btn btn-link btn-circle" role="button" href="#about"><i class="fa fa-angle-double-down animated"></i></a></div>
            </div>
        </div>
    </section>
	</header>

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Page Title -->
    <title>Module Listing</title>
	<!-- Compressed CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation.min.css" >

	<!-- Compressed JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/js/foundation.min.js" ></script>

  </head>
  
<body>
<div class="container">

	<div class="grid-x">
		<div class="medium-6 cell">
			<h1 color: white>Enroll Learners</h1>
		</div>
     </div>

 	<?php
		
		while($row = $result->fetch_assoc() ){
			
			$module_data = $row['module'];
            $moduleid = $row['id'];
            $learners = $row['learners'];
		
			echo "<div class='grid-x'>
			
					<div class='small-10 cell'>		
						<strong>$module_data</strong>
					</div>	 
					
					<div class='small-2 cell'>
						<a href='select.php?dataid=$moduleid' class='button secondary'>details</a>
					</div>
				
			</div>";
				
										
		}
	?>
	  
				
</div>		
</body>
  
</html>

<?php
$read = "SELECT * FROM module_list";
  
$result = $conn->query($read);

while($row = $result->fetch_assoc() ){
  $module_data = $row['module'];
  $moduleid = $row['id'];
  //$learners = $row['learners'];
  ///get learners
  $learners ="SELECT users.username
  FROM module_list_users
  INNER JOIN
  users
  ON
  module_list_users.user_id = users.id
  WHERE module_list_users.module_list_id='$moduleid' ";
  $resultlearners = $conn->query($learners);
  if(!$resultlearners ){
  echo $conn->error;
  }

  echo "<div class='grid-x'>
  <div class='small-10 cell'>
  <strong>$module_data</strong>
  </div>
  <div class='small-2 cell'>
  <a href='select.php?dataid=$moduleid' class='button
  secondary'>details</a>
  </div>
  </div>";
  while($row2 = $resultlearners->fetch_assoc() ){
  //$learners = $row2['learners'];
  echo " <span>Enrolled Students: $learners </span>";
  }
  }

?>