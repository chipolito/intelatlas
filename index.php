<?php
	session_start();
	
	if(!isset($_SESSION['login']))
		header("Location: login.html");
?>

<!doctype html>
<html lang="en">
<head>
	<!-- // Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Required meta tags // -->

    <meta name="description" content="Welcome page">

    <title>Welcome</title>

	<!-- // Favicon -->
	<link href="images/favicon.png" rel="icon">
	<!-- Favicon // -->

	<!-- // Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;display=swap" rel="stylesheet">
	<!-- Google Web Fonts // -->
	
	<!-- // Font Awesome 5 Free -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Font Awesome 5 Free // -->

    <!-- // Template CSS files -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!-- Template CSS files  // -->
</head>
<body>
	<!-- // Preloader -->
	<div id="nm-preloader" class="nm-aic nm-vh-md-100">
		<div class="nm-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
	<!-- Preloader // -->

	<main id="page-content" class="d-flex nm-aic nm-vh-md-100" style="position: relative;">
		<div class="overlay"></div>

		<div class="nm-tm-wr">
			<div class="container">
				<form>
					<div class="nm-hr nm-up-rl-3">
						<h2>Welcome</h2>
						<p>Your name is: <?php echo $_SESSION['userName']; ?></p>
					</div>

					<footer style="text-align: center; margin-top: 2rem; font-size: 0.75rem; color: #97a4af; font-weight: 400;">
						<a class="nm-fs-1 nm-fw-bd" style="font-size: 0.75rem;" href="core/logout.php">Logout</a>
					</footer>
				</form>
			</div>
		</div>
	</main>
	
	<!-- // Vendor JS files -->
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<!-- Vendor JS files // -->

	<!-- Template JS files // -->
	<script src="js/script.js"></script>
	<!-- Template JS files // -->
</body>
</html>