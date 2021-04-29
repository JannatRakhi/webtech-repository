<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Welcome to Bootstrap HomePage</title>
	<!-- bootstrap cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
	<!-- font awesome cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<!-- style.css -->
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<!-- jquery cdn -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 navbar">
				<a href="index.html" class="logo navbar-brand text-white offset-md-2">MyCafe</a>
				<ul class="nav">
					<li class="nav-item active"><a href="Home_Page.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="loginUserView.php" class="nav-link">Login</a></li>
					<li class="nav-item"><a href="signupUserView.php" class="nav-link">Signup</a></li>
          <li class="nav-item"><a href="menu.php" class="nav-link">menu</a></li>

					<li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li>
				</ul>
			</div>

			<!-- slider banner	 -->

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			    	<div class="info">
			      		<h1>CAFE.com</h1>
			      		<p>Eat good food, love your body </p>
			      	</div>
			    </div>
			    <div class="carousel-item">
			    	<div class="info">
			      		<h1>CAFE.com</h1>
			      		<p>Eat good food, love your body</p>
			      	</div>
			    </div>
			    <div class="carousel-item">
			    	<div class="info">
			      		<h1>CAFE.com</h1>
			      		<p>Eat good food, love your body</p>
			      	</div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>
	<footer>
  <?php 
 include 'footer.php';?>

</footer>


	<!-- scripts -->
	<!-- bootstrap javascript cdn -->
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

 
</body>
</html>