<meta http-equiv="Content-Type" content="text/html" />
<!DOCTYPE html>
<html lang="en">
<head>
 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>Web Final : My puzzle game</title>
	 
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
			<div class="logo"> <a href="index.php#"><img src="images/logo.png" alt="logo"></a>
			</div>
 
			<h1>The Most Beautiful and <strong>Incredible</strong> <br>
			game : <strong>Puzzle</strong> you ever seen.</h1>
 
			<div class="row">
				<div class="col-md-6 col-sm-12 col-md-offset-3 subscribe">
					<form class="form-horizontal" role="form" action="connect.php" id="subscribeForm" method="POST">
						<div class="form-group">
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<input class="form-control input-lg" name="id" type="text" id="address" placeholder="Enter your account">
							</div>
							<div class="col-md-5 col-sm-4">
								<a href="register.php" class="btn btn-success btn-lg">Go and Register</a>
							</div>
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">&nbsp;</div>
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<input class="form-control input-lg" name="pw" type="password" id="address" placeholder="Enter your password">
							</div>
							<div class="col-md-5 col-sm-4">
								<button type="submit" class="btn btn-success btn-lg">Login and Start</button>
							</div>
						</div>
					</form>
					<!--my code
					<form name="form" method="post" action="connect.php">
						account: <input type="text" name="id" /> <br>
						password: <input type="password" name="pw" /> <br><br>
						
						<input type="submit" name="button" class="myButton" value="login" />&nbsp;&nbsp;
						<a href="register.php" class="myButton">register</a>
					</form>
					-->
					<span id="result" class="alertMsg"></span> </div>
				</div>
 
				<a href="index.php#client" class="scrollto">
				<p>ABOUT THE GAME</p>
				<p class="scrollto--arrow"><img src="images/scroll_down.png" alt="scroll down arrow"></p>
				</a>
		</div><! --/container -->
	</main><! --/main -->
		<! -- ******************** CLIENTS SECTION ******************** -->	 
		<div id="client"class="section-title">
			<h2>About the game</h2>
			<h4>want to provide players with amazing visual experience</h4>
		</div>
	
		<section class="row clientlogo breath">
			<div class="col-md-12 text-center"> 
				<img src="images/puz.png" alt="puzzle-image">
			</div>
		</section><! --/section -->
 
	    </div><! --/container -->
	    <! -- ******************** FOOTER ******************** -->	  
		<main id="footer" class="footercta" role="main">
			<div class="container">
				<h1>Let's go and start the game !</h1>
 
				<div class="row">
					<div class="col-md-12 breath text-center"> 
						<a href="index.php#top" class="btn btn-success btn-lg gototop">GET START</a> 
					</div>
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
<meta http-equiv="Content-Type" content="text/html" />
<div>
<h2>My Puzzle Game<h2>
</div><br>

<div>
<form name="form" method="post" action="connect.php">
account: <input type="text" name="id" /> <br>
password: <input type="password" name="pw" /> <br><br>
<input type="submit" name="button" class="myButton" value="login" />&nbsp;&nbsp;
<a href="register.php" class="myButton">register</a>
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