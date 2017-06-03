<?php
	session_start();
	include("mysql_connect.inc.php");
	if($_SESSION['username']==null){
				echo "<div>";
				echo 'Login Frist!';
				echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
				echo "</div>";
	}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!DOCTYPE html>
<html lang="en">
<head>
 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>Puzzle_menu</title>
	 
	<link href="css/bootstrap.css" rel="stylesheet">
	
	<link href="css/main.css" rel="stylesheet">
 
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond.min.js"></script>
	<![endif]-->
 
	<link rel="shortcut icon" href="images/favicon.png">
	<script src="js/pace.js"></script>
 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="preloader"></div>
	
    <! -- ******************** MASTHEAD SECTION ******************** -->	
	<main id="top" class="masthead" role="main">
		<div class="container">
			<div class="logo"> <a href="member.php#"><img src="images/logo.png" alt="logo"></a>
			</div>
			<h1>My Account Menu</h1>
			<a href="member.php#play" class="scrollto">
			<p>Skip To Play The Game</p>
			<p class="scrollto--arrow"><img src="images/scroll_down.png" alt="scroll down arrow"></p>
			</a>
 
		</div><! --/container -->
		
	</main><! --/main -->

    <! -- ******************** FEATURES SECTION ******************** -->	
	<div class="container" id="explore">
 
		<div class="section-title">
			<h2>Manage my account</h2>
			<h4>you can change your account or logout.</h4>
		</div>

		<section class="row heroimg breath">
			<div class="col-md-12 text-center"> 
				<a href="update.php" class="btn btn-success btn-lg gototop">Change my acount</a>&nbsp;
				<a href="logout.php" class="btn btn-success btn-lg gototop">Logout Bye-Bye</a>
			</div>
		</section><! --/section -->
 
		<div class="section-title">
			<h2>Manage my game picture</h2>
			<h4>select a picture that you want to play !</h4>
		</div>
		
		<section class="row heroimg breath">
			<div class="col-md-12 text-center">
				<form enctype="multipart/form-data" class="form-horizontal" role="form" action="upload.php" id="subscribeForm" method="POST">
						<input class="form-control input-lg" name="image" type="file"/>
						<button type="submit" class="btn btn-success btn-lg">Upload my picture</button>
						<a href="display.php" class="btn btn-success btn-lg gototop">See my picture</a>
				</form>
			</div>
		</section><! --/section -->
		
		<div class="section-title">
			<h2>Leave message !</h2>
		</div>

		<section class="row heroimg breath">
			<div class="col-md-12 text-center"> 
				<a href="msg.php" class="btn btn-success btn-lg gototop">Go Message Board</a>
			</div>
		</section><! --/section -->
		
	</div><! --/container -->
		
	    <! -- ******************** TESTIMONIALS SECTION ******************** -->
		<?php
			$id = $_SESSION['username'];
			$sql = "SELECT * FROM member_table where username='$id'";
			$result = mysql_query($sql);
			$row = mysql_fetch_row($result);
		?>
		<div class="highlight testimonials">
			<div class="container">
				<div class="section-title">
					<h2>My Playing History</h2>
					<h4>you can see your playing history below</h4>
				</div>
			<section class="row breath" style="padding-left:10cm;">
									
					<div class="col-md-6">
						<div class="testblock"><?php echo "$row[4]";?></div>
						<div class="clientblock"> 
							<img src="images/user.jpg" alt=".">
							<p><strong>Your Account Name</strong> <br>
								<?php echo "$row[0]";?>
							</p>
						</div>
					</div><! --/col-md-6 -->
				</section><! --/section -->	
				
			</div><! --/container -->
		</div><! --/highlight Testimonials -->
 

	    <! -- ******************** PRICING LIST ******************** -->
		<main id="play" class="footercta" role="main">
				<div class="container">
		 
					
					<h2>Start Playing the Game</h2>
					<h4>choose the level you want to participate in.</h4>
					
					<section class="row breath planpricing">
					
						<a href="game3.php"><div class="col-md-4">
							<div class="pricing color1">
								<div class="planname">EAZY LEVEL</div>
								<div class="price"> <span class="curr">puzzle</span>3x3</div>
								<div class="billing">Click to start</div>
							</div><! --/pricing -->
						</div></a><! --/col-md-4-->
						
						<a href="game4.php"><div class="col-md-4">
							<div class="pricing color2">
								<div class="planname">MIDDLE LEVEL</div>
								<div class="price"> <span class="curr">puzzle</span>4x4</div>
								<div class="billing">Click to start</div>
							</div><! --/pricing -->
						</div></a><! --/col-md-4-->
						
						<a href="game5.php"><div class="col-md-4" >
							<div class="pricing color3">
								<div class="planname">HARD LEVEL</div>
								<div class="price"> <span class="curr">puzzle</span>5x5</div>
								<div class="billing">Click to start</div>
							</div><! --/pricing -->
						</div></a><! --/col-md-4-->
						
					</section><!-- /section planpricing -->
		 
				</div><! --/container -->
		</main><! --/main -->
 
		<div class="container">
			<section class="row breath">
				<div class="col-md-12 footerlinks">
					<p>&copy; 2016 Create by POPO-WU . All Rights Reserved</p>
				</div>
			</section><! --/section -->
		</div><! --/container -->
 
 
 
 
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/easing.js"></script>
<script src="js/nicescroll.js"></script>
 
 
<script>


 $(function() {
    $('.scrollto, .gototop').bind('click',function(event){
		 var $anchor = $(this);
		 $('html, body').stop().animate({
         scrollTop: $($anchor.attr('href')).offset().top
          }, 1500,'easeInOutExpo');
     event.preventDefault();
      });
  });
        

</script>
 
</body>
</html>