<?php 
include('../functions.php');

if (!isTutor()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
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
                <h1 style="color:azure">Edit Modules</h1>
                <p>*</p>
                <p class="intro-text" style="color:azure;"></p><a class="btn btn-link btn-circle" role="button" href="#about"><i class="fa fa-angle-double-down animated"></i></a></div>
            </div>
        </div>
    </section>
	</header>
<script>

$(function(){

	$('#datepick').datepicker({
		
	  showOn: "button",
      buttonImage: "img/calendar.gif",
      buttonImageOnly: true,
      buttonText: "Select date"	
	  
	 });
			
});	

</script>

</head>

<div id="container">
	<div id="top">
	 <a href='display.php'><div class='addright'>View Modules</div></a>
	<div id="title">Add Modules</div>
	
	</div>
	
		<div id="main">
				
	 		<article>
				
                <form name="mylist" method="POST" action="insert.php" enctype="multipart/form-data">
				<fieldset>
				<legend>Enter Module Name</legend>
					<label for="task">Name of Module:</label> 
					<input type="text" id="myItemInput" name="myinput" placeholder="Module Name"/>
				
				<div>
                    <label for="due date">Module Start Date:</label> 
                    <input type="text" id="datepick" name="duedate"/>
                </div>  
                    
                <div style="clear:both;"></div> 
                <div>
                    <label for="item type">Subject:</label> 
                    <select name='itemtype'>
					<option value="Maths">Maths</option>
						<option value="Physics">Physics</option>
						<option value="Chemistry">Chemistry</option>
						<option value="Biology">Biology</option>
						<option value="Literature">Literature</option>
						<option value="Spanish">Spanish</option>
						<option value="French">French</option>
                    </select>
                </div>
				
                <div>
                    <label for="item details">Tutor:</label> 
                    <textarea name="details"></textarea>
                </div>
                
				<div>
				<label for="imageup">Image:</label>
				<input class="button" type="file" name="imageup">
				</div>
				
				<div>
					<input type="submit" id="addButton" value="add item">	
				</div>
				
				</fieldset>			
				</form>

			</article> 
			
			
			<div style="clear:both;"></div>
			
		</div>
	 

 </div>
</body>

</html>