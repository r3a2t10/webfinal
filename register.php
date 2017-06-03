<meta http-equiv="Content-Type" content="text/html" />
<!DOCTYPE html>
<html lang="en">
<head>
 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>My puzzle game - Register</title>
	 
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
			<div class="logo"><a href="index.php#top"><img src="images/logo.png" alt="logo"></a></div>
			<h1>Create a new account</h1>
			<h3><span style="font-weight:normal;">account id must larger 5 letters and can not contain blank and " ; ".</span></h3>
			<div class="row">
				<div class="col-md-6 col-sm-12 col-md-offset-3 subscribe">
					<form class="form-horizontal" role="form" action="register_finish.php" id="subscribeForm" method="POST">
						<div class="form-group">
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<input class="form-control input-lg" name="id" type="text" id="address" placeholder="Enter your account">
							</div>
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">&nbsp;</div>
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<input class="form-control input-lg" name="pw" type="password" id="address" placeholder="Enter your password">
							</div>
							<div class="col-md-5 col-sm-4">
								<button type="submit" class="btn btn-success btn-lg">Create a new account !</button>
							</div>
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">&nbsp;</div>
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<input class="form-control input-lg" name="pw2" type="password" id="address" placeholder="Confirm your password">
							</div>
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">&nbsp;</div>
							
						</div>
					</form>
					<!--my code
					<form enctype="multipart/form-data" name="form" method="post" action="register_finish.php">
						account: <input type="text" name="id" /> <br>
						password: <input type="password" name="pw" /> <br>
						confirm password: <input type="password" name="pw2" /> <br>
						phone: <input type="text" name="telephone" /> <br>
						address: <input type="text" name="address" /> <br>
						history(readonly): <textarea name="other" cols="45" rows="5" readonly></textarea> <br>
						<input type="submit" name="button" class="myButton" value="submit" />
					</form>
					-->
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



<!--
<div>
<h2>New an account<h2>
</div><br>
 
<div>
<form enctype="multipart/form-data" name="form" method="post" action="register_finish.php">
account: <input type="text" name="id" /> <br>
password: <input type="password" name="pw" /> <br>
confirm password: <input type="password" name="pw2" /> <br>
phone: <input type="text" name="telephone" /> <br>
address: <input type="text" name="address" /> <br>
history(readonly): <textarea name="other" cols="45" rows="5" readonly></textarea> <br>
<input type="submit" name="button" class="myButton" value="submit" />
</form>
</div>
<style>
div{
    background-color:#ccff99;
    color:#00994d;
	  width:500px;
	  height:auto;
    margin: auto;
  	padding:10px;
  	line-height:5px;
  	text-align:center;
  	font-family:Calibri;
  	font-size:25px;
  	border-radius:10px;
    line-height: normal ;
}
h2{
  text-align:center;
  color:#00994d;
}
.myButton{
  	background-color:#00cc66;
  	border-radius:10px;
  	font-family:Calibri;
  	color:white;
  	font-size:20px;
  	font-weight:bold;
  	padding:5px 25px;
  	text-decoration:none;
}
.myButton:hover {
  	background-color:#00994d;
  	color:white;
}
.myButton:active {
  	position:relative;
  	top:2px;
}
</style>-->