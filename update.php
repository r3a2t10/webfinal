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
<meta http-equiv="Content-Type" content="text/html" />
<!DOCTYPE html>
<html lang="en">
<head>
 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>My puzzle game - Change</title>
	 
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
	<?php
		$id = $_SESSION['username'];
        $sql = "SELECT * FROM member_table where username='$id'";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
	?>
	<main id="top" class="masthead" role="main">
		<div class="container">
			<div class="logo"><a href="index.php#top"><img src="images/logo.png" alt="logo"></a></div>
			<h1>Change my account</h1>
			<h3><span style="font-weight:normal;">change my password</span></h3>
			<div class="row">
				<div class="col-md-6 col-sm-12 col-md-offset-3 subscribe">
					<form class="form-horizontal" role="form" action="update_finish.php" id="subscribeForm" method="POST">
						<div class="form-group">
						
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<input class="form-control input-lg" name="pw" type="password" id="address" placeholder="Enter your password" value="<?php echo $row[1]?>">
							</div>
							
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">&nbsp;</div>
							
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<input class="form-control input-lg" name="pw2" type="password" id="address" placeholder="Confirm your password" value="<?php echo $row[1]?>">
							</div>
							
							<div class="col-md-5 col-sm-4">
								<button type="submit" class="btn btn-success btn-lg">change my password</button>
							</div>
							
						</div>
					</form>
					<span id="result" class="alertMsg"></span> </div>
				</div> 
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