<?php 
//include "app/config/Config.php";
include "app/config/Database.php";
include "app/model/Model.php";
// include "app/controller/Controller.php";
// (new Controller)->ifAvailable("index");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Signin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="app/assets/fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="app/assets/css/style.css">
	</head>

	<body>

		<div class="wrapper container">
			<div class="inner">
				<!-- <img src="app/assets/images/image-1.png" alt="" class="image-1"> -->
				<form>
					<h3>Sign in</h3>
					
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control email" placeholder="Email Address" autocomplete="off" >
					</div>
                    
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control password" placeholder="Password" autocomplete="off" >
					</div>
					
					<button class="signin">
						<span>Sign in</span>
					</button>
				</form>
				<img src="app/assets/images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="app/assets/js/jquery-3.3.1.min.js"></script>
		<script src="app/assets/js/main.js"></script>
        <script src="app/assets/js/app.js"></script>
	</body>
</html>