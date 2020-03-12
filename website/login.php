<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Foody</title>
<link rel="icon" href="images/favicon5.ico" style="width: 32px; height: 32px">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Foody Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet">
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
<body>

<body>
<div class="header head">
	<div class="container">
		<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h1><a href="index.php"><span>F</span><img src="images/oo.png" alt=""><img src="images/oo.png" alt="">dy</a></h1>
		</div>
		<?php require("header_menu.php") ?>
	<div class="clearfix"></div>
	</div>
	<!-- start search-->	
		
</div>
<!--content-->
<!---728x90--->
<div class="blog">
	<div class="container">
		<div class="col-md-12">
		<center>
		<div class="leave">
			<h3>Customer Login</h3>
			<form action="login_code.php" role="form" method="post" name="cust_login" id="cust_login">
					<div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">
						
							<input type="email" id="textbox1" name="email" placeholder	="E-mail" onfocus="this.placeholder='';" onblur="if (this.placeholder == '') {this.placeholder = 'E-mail';}" required class="form-control">
							<br><br>
							<input type="password" id="textbox2" name="password" placeholder="Password" onfocus="this.placeholder='';" onblur="if (this.placeholder == '') {this.placeholder = 'Password';}" required class="form-control">
							<br>
						<label class="hvr-rectangle-out">
								<input type="submit" value="Sign In">
						</label>						
				</div>
				</form>
				<br>
				<h4 class="text-danger text-center" style="font-weight: bolder;">
				<?php
				if(isset($_GET['msg'])){
					echo '<div class="animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1000ms">'.$_GET["msg"].'</div>';
				}
				?>
				<br>
				<div class="animated wow fadeInLeft" data-wow-duration="1000ms">
					<h4 class="text-center text-muted" style="font-weight: bolder">New User? <a href="register.php">Register</a> here!</h4>
				</div>
				</h4>
				<script type="text/javascript">
					document.getElementById('textbox1').style.height="40px";
					document.getElementById('textbox2').style.height="40px";
					document.getElementById('textbox1').style.fontSize="20px";
					document.getElementById('textbox2').style.fontSize="20px";
				</script>				
		</div>
			</center>
		<!--content-->
<div class="single">		
</div>
<!---->
<!--//content-->
</div>
	  <div class="clearfix"> </div>
	</div>
</div>
<!--//content-->
<!--footer-->
	<?php require("footer.php") ?>	
	<!--//footer-->

</body>
</html>

