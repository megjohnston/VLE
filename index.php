<?php 
	include('functions.php');

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Learner Home</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	.header {
		background: #5F9EA0;;
	}
	button[name=register_btn] {
		background: #5F9EA0;;
	}
	</style>
</head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Student Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
</head>

<body>
    <div>
        <div class="header-dark" style="background-color: #b5d1e8;">
            <nav class="navbar navbar-dark navbar-expand-lg">
                <div class="container"><a class="navbar-brand" href="index.html">VLE</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only"></span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" style="color: white;" href="index.php">Student Dashboard Home</a></li>
                        </ul><a href="contact.php">Contact</a>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"></label></div>
                        </form><span class="navbar-text"><a class="login" href="login.php">Log In</a></span><a class="btn btn-light action-button" role="button" href="register.php">Sign Up</a></div>
                </div>
            </nav>
	<div class="header">
		<h2>Student - Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="../images/user_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="login.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="create_user.php"> + add user</a>
                       &nbsp; <a href="module_details.php"> + add modules/ edit content</a>
                       &nbsp; <a href="display.php"> + display module content</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>