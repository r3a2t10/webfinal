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
	<title>Puzzle_message</title>
	 
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
			<h1>Messange Board</h1>
			<a href="msg.php#bottom" class="scrollto">
			<p>Skip To The Bottom</p>
			<p class="scrollto--arrow"><img src="images/scroll_down.png" alt="scroll down arrow"></p>
			</a>
		</div><! --/container -->
	</main><! --/main -->

		<! -- ******************** CLIENTS SECTION ******************** -->	 
		<div id="client"class="section-title">
			<h2>Leave a message !</h2>
			<h4>share your playing experience or your thought</h4>
		</div>
	    </div><! --/container -->
	
	
	    <! -- ******************** TESTIMONIALS SECTION ******************** -->
		<?php
			$id = $_SESSION['username'];
			$sql = "SELECT * FROM member_table where username='$id'";
			$result = mysql_query($sql);
			$row = mysql_fetch_row($result);
		?>
		<div class="highlight testimonials">				
				<div class="row">
				<div class="col-md-6 col-sm-12 col-md-offset-3 subscribe">
					<form class="form-horizontal" role="form" action="msg_finish.php" id="subscribeForm" method="POST">
						<div class="form-group">
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">&nbsp;</div>
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<input class="form-control input-lg" name="taxt" type="text" id="address" placeholder="What do you want to say?">
							</div>
							<div class="col-md-5 col-sm-4">
								<button type="submit" class="btn btn-success btn-lg">Leave Message !</button>
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
				
		</div><! --/highlight Testimonials -->
 

	    <! -- ******************** PRICING LIST ******************** -->
		<main id="play" class="footercta" role="main">
			<div class="container">
			<div class="section-title">
				<h2><span style="color:white;">What do others say...</span></h2>
				<h4><span style="color:white;">see everyone's opinion !</span></h4>
			</div>
			<?php
			$result=mysql_query('select * from msg'); //執行sql指令;
			$fields=mysql_num_rows($result);//取得資料表欄位數
			for ($x=1;$x<=($fields);$x++){
				$row = mysql_fetch_row($result);
				echo '<section class="row breath" style="padding-left:10cm;">';
				echo '<div class="col-md-6">';
				echo '<div class="testblock" style="color:black;">';
				echo $row[2];
				echo '</div>';
				echo '<div class="clientblock">';
				echo '<img src="images/user.jpg" alt=".">';
				echo '<p><strong>User Name</strong><br>';
				echo $row[1];
				echo '</p></div></div><! --/col-md-6 --></section><! --/section -->';
			}
			?>
						
			</div><! --/container -->
			
			<section class="row heroimg breath">
			<div class="col-md-12 text-center"> 
				<a href="member.php" class="btn btn-success btn-lg gototop">Back Memu</a>
			</div>
		    </section><! --/section -->
		</main><! --/main -->
 
		<div id="bottom" class="container">
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