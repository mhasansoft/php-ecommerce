<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Kenakata</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="./css/contact.css">
        <script src="https://kit.fontawesome.com/5f29bef806.js" crossorigin="anonymous"></script>
		<style></style>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Kenakata</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span> Product</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon glyphicon-earphone"></span> Contact</a></li>
			</ul>
			<!-- <form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		     </form> -->
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
                <div class="sidebar-header">
                    <h3>Contact with Us</h3>
                </div>

                <div class="sidebar-content">
                    <div class="phonecall">
                        <h4>Call us</h4>
                        <p> <i class="fas fa-phone-alt"></i> 88 0196 9775131</p>
                    </div>

                    <div class="socailMedia">
                        <h4>Follow Us at soacila media</h4>
                        <h5> <a href="https://www.facebook.com/kenakata.com.cn"> <i class="fab fa-facebook"></i> Facebook</i> </a> </h5>
                        <!-- <h5> <i class="fab fa-twitter"></i> Twitter</i></h5>
                        <h5> <i class="fab fa-instagram"></i> instagram</i></h5> -->
                    </div>

					<div class="mail">
                        <h4>Mail Us</h4>
                        <h5> <a href="mailto:ronghin420@gmail.com"> <i class="fas fa-envelope"></i> ronghin420@gmail.com</i> </a> </h5>
                        <!-- <h5> <i class="fab fa-twitter"></i> Twitter</i></h5>
                        <h5> <i class="fab fa-instagram"></i> instagram</i></h5> -->
                    </div>
                </div>
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="panel panel-info">
					<div class="panel-heading">Contact</div>

						<div class="col-md-6 leftside">
							<h3>Hello Meet the owner of the shop!</h3>
							
							<img src="./img/owner.jpeg" alt="">
						</div>

						<div class="col-md-6">
							<h3>Come to our Shop!</h3>
							<div class="map-responsive">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14604.26430074903!2d90.40768503037133!3d23.780661303189763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c79ebfc24eab%3A0xea7dab563f12457a!2sGulshan%201%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1622008544022!5m2!1sen!2sbd" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>	
						</div>				

					<div class="panel-footer">&copy; Kanakata 2021</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>
















































