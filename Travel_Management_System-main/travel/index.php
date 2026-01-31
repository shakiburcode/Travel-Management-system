<!DOCTYPE html>
<html>

	
<head>
	<title></title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);
		//function hideURLbar(){ window.scrollTo(0,1); } 
	</script>
	<!--js-->
	<script src="js/jquery.min.js"></script>

</head>

<body>
	<!--header-->
	<!--sticky-->
	<?php include('function.php'); ?>

	<?php include('top.php'); ?>
	<!--/sticky-->
	<?php include('slider.php'); ?>
	<!--About-->
	<div class="about section" id="section-2">
		<div class="about-head text-center">
			<h3>About Us</h3>
		</div>
		<div class="container">
			<div class="col-md-4 about-grids">
				<h4>Our Vision</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col-md-4 about-grids grid2">
				<h4>Our Mission</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col-md-4 about-grids">
				<h4>Safety Information</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
	<!--/About-->


	<div id="section-5" class="contact section">
		<div class="contact-head text-center">
			<h3>Contact Us</h3>
			<br>
			<h4 style="color:#000">Plan Your Trip</h4>
			<br>
			<h5 style="color:#000">Our travel experts can help you book now</h5>

			<div class="contact-grids">
				<div class="container">
					<div class="col-md-4 address">
						<h4 style="color:#08F"></h4>
						<p style=" color:#000"><br />
							</p>
							<br />
					</div>
					<div class="col-md-8 contact">

						<?php
						if (isset($_POST["sbmt"])) {
							$cn = makeconnection();
							$s = "insert into contactus(Name,Phno,Email,Message) values('" . $_POST["t1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "')";
							mysqli_query($cn, $s);
							mysqli_close($cn);
							echo "<script>alert('Record Save');</script>";
						}
						?>
						<form method="post">
							<table border="0" width="700px" height="500px">
								<tr>
									<td align="left"> <input type="text" class="text" value=" Name" name="t1" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" required pattern="[a-zA-z1 _]{1,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name"></td>
								</tr>
								<tr>
									<td align="left"><input type="text" class="text" value=" Contact No" name="t2" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact NO';}" required pattern="[0-9]{10,12}" title"Please Enter Only numbers between 10 to 12 for Contact no"></td>
								</tr>
								<tr>
									<td align="left"> <input type="text" class="text" value="Email" name="t3" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your mail';}" required></td>
								</tr>
								<tr>
									<td><textarea onFocus="if(this.value == 'Message') this.value='';" name="t4" onBlur="if(this.value == '') this.value='Enter Message Here';" required />Message</textarea></td>
								</tr>
								<tr>
									<td><input type="submit" value="Send message" name="sbmt"></td>
								</tr>
							</table>
							<div class="clearfix"></div>
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>




			<?php include('bottom.php'); ?>
</body>

</html>
