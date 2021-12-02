<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shopner Khuje</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="sub-header">
		<nav>
			<a href="index.html"><img src="images/logo.png" style="max-width: 50px"></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="about.php">ABOUT US</a></li>
					<li><a href="Blood_request.php">BLOOD BANK</a></li>
					<li><a href="Doctor_request.php">DOCTORS</a></li>
					<li><a href="Police_request.php">POLICE</a></li>
					<li><a href="contact.php">CONTACT US</a></li>
					<li><a href="admin/login.php">LOG IN</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		<h1>About Us</h1>
	</section>


	<section class="about-us">
		<div class="row">
			<div class="about-col">
				<h1>what is Lorem Ipsum</h1>
				<p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in lsodales vehicula. Duis ac vulputate nunc. Integer vitae ligula turpis. Mauris imperdiet elit non mauris dapibus, sit amet lobortis risus venenatis. Duis suscipit lectus sed tellus convallis, id varius ipsum vehicula. Nulla ultricies sit amet enim id auctor. Nulla vel nunc mauris. Proin ullamcorper suscipit ligula, vitae vestibulum nisi aliquet sed. Donec sodales pellentesque nisl, id placerat turpis hendrerit ac. Maecenas eget neque nunc.
				</p>
			</div>
			<div class="about-col"><img src="images/about-us.jpg"> </div>
		</div>

	</section>


	<section class="footer">
		<h4>About Us</h4>
		<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document <br> a typeface without relying on meaningful content. Lorem ipsum may be</p>
		<div class="icons">
			<i class="fa fa-facebook"></i>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-instagram"></i>
			<i class="fa fa-linkedin"></i>
		</div>
		<p> Made with <i class="fa fa-heart-o"></i> by shopner khuje</p>
	</section>


	<script>
		var navLinks = document.getElementById("navLinks");
		function showMenu(){
			navLinks.style.right = "0";
		}
		function hideMenu(){
			navLinks.style.right = "-200px";
		}
	</script>
</body>
</html>