
<!DOCTYPE html>
<html>
<head>
<title>Online Dance Management System||Home Page</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<!---->
<?php include_once('includes/header.php');?>
<!---->
<script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
        manualControls: '#slider3-pager',
      });
    });
  </script> 
<div class="content">
	 <div class="container">  
		  <div class="slider">
			<!-- Slideshow 3 -->
			<ul class="rslides" id="slider">
			  <li><img src="images/Bharata1.jpg" alt="">
				<div class="caption">
					<h1>Baratanatyam</h1>
					<p>Bharatanatyam is the oldest classical dance tradition in India.</p>
				</div>
			  </li>
			  <li><img src="images/ballet.jpg" alt="">
				<div class="caption">
					<h1>Ballet</h1>	  
					<p>Ballet originated in Italy in the fifteenth century. The dance is performed on classical music.</p>
				</div>
			  </li>	      
			  <li><img src="images/Kathakali2.jpg" alt="">
				<div class="caption">
					<h1>Kathakali</h1>	  
					<p>Kathakali is a blend of music and acting and dramatizes stories.</p>
				</div>
			  </li>
			  <li><img src="images/kuchipudi1.jpg" alt="">
				<div class="caption">
					<h1>Kuchipudi</h1>
					<p>Kuchipudi is the classical dance from the state of Andhra Pradesh.like all major classical dances of India.</p>
				</div>
			  </li>
			  <li><img src="images/iris.jpg" alt="">
				<div class="caption">
					<h1>Iris</h1>	  
					<p>Irish dance is a group of traditional dance forms originating from Ireland.</p>
				</div>
			  </li>	      
			  <li><img src="images/contemporary.jpg" alt="">
				<div class="caption">
					<h1>Contemporary</h1>	  
					<p>Contemporary dance is a style of expressive dance that combines elements of several dance genres.</p>
				</div>
			  </li>
			  <li><img src="images/swing.jpg" alt="">
				<div class="caption">
					<h1>Swing</h1>	  
					<p>Swing dance is a group of dances that developed with the swing style of jazz music.</p>
				</div>
			  </li>	      
			  <li><img src="images/hiphop.jpg" alt="">
				<div class="caption">
					<h1>Hip-hop</h1>	  
					<p>It is a street dancing style. This dance has moves which are close to the ground</p>
				</div>
			  </li>
			</ul>
			<!-- Slideshow 3 Pager --></br></br>
			<ul id="slider3-pager">
			  <li><a href="#"><img src="images/Bharata1.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/ballet.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/Kathakali2.jpg" alt=""></a></li>
			   <li><a href="#"><img src="images/kuchipudi1.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/iris.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/contemporary.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/swing.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/hiphop.jpg" alt=""></a></li>
			</ul>   
				<div class="clearfix"></div>
		  </div>
	 </div>
	<?php include_once('includes/footer.php');?>
</div>
<!---->

<!---->
</body>
</html>